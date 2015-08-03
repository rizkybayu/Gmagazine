<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Http\Requests\GameRequestEdit;
use App\Http\Requests\TransaksiRequest;
use App\Http\Requests\SisaStokRequest;
use App\Database\Model\Gamez;
use App\Database\Model\Transaksi;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Gamez::paginate(8);
        return view('beli',compact('data'));
    }

//view dan proses tambah game
    public function tambahGame(){
        return view('admin.tambahgame');
    }
    public function simpanGame(GameRequest $request){
        $game = new Gamez();
        $game->nama_game=$request->input('nama_game');
        // $game->foto=$request->input('judul'); TERAKHIR atau di skip tapi di ganti jadi default
        // $game->foto='images/news/ps4.png'; default ini
        $game->stok=$request->input('stok');
        $game->harga=$request->input('harga');
        $game->save();

        $imageName = "game".$game->id . '.' . 
        $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/images/games/', $imageName
        );

        \Session::flash('flash_message','Berhasil Menambahkan Game');
        return redirect('/tambahgame');
    }  

    public function lihatGame(){
        $list_game = Gamez::paginate(10);
        return view('admin.lihatgames',compact('list_game'));
    }

    public function hapusGame($id){
        Gamez::find($id)->delete();

        \Session::flash('flash_message','Berhasil menghapus Game !');
        return redirect('/listgame');
    }

    public function editGame($id){
        $edit = Gamez::find($id);
        return view('admin.ubahgame',compact('edit'));
    } 
    public function edit_game($id,GameRequestEdit $request){
        $game = Gamez::find($id);
        $game->nama_game=$request->input('nama_game');
        $game->stok=$request->input('stok');
        $game->harga=$request->input('harga');
        $game->save();
        \Session::flash('flash_message','Berhasil mengubah Games !');
        return redirect('/listgame');
    }
//BATAS 

//TRANSAKSI
    public function transaksiView($id){
        $yangdipilih = Gamez::find($id);
        return view('transaksi',compact('yangdipilih'));
    }

    public function transaksiSimpan($id,TransaksiRequest $request ,SisaStokRequest $request2 ){
        
        $transaksi = new Transaksi();
        $transaksi->fk_game=$request->input('id');
        $transaksi->nama_pembeli=$request->input('nama');
        $transaksi->tgl_beli = Carbon::now();
        $transaksi->email=$request->input('email');
        $transaksi->no_hp=$request->input('no_hp');
        $transaksi->jumlah_beli=$request->input('jumbel');
        $transaksi->stt='0';
        $transaksi->save();

        $sisa_stok = Gamez::find($id);
        $jumlah_beli=$request2->input('jumbel');
        $jumlah_stok=$request2->input('stok');
        $sisa_stok2 = $jumlah_stok - $jumlah_beli;
        $sisa_stok->stok = $sisa_stok2;
        $sisa_stok->save();

        \Session::flash('flash_message','Transaksi Berhasil Silahkan Mentrasfer Sebesar dan melakukan langkah selanjutnya');
        return redirect('/beli');        
    }
//BATAS TRANSAKSI



//CEK TRANSAKSI
    public function lihatPending(){
        $list_transaksi = Transaksi::where('stt','0')->paginate(10);
        return view('admin.pending',compact('list_transaksi'));
    }

    public function lihatApprove(){
        $list_transaksi = Transaksi::where('stt','1')->paginate(10);
        return view('admin.approve',compact('list_transaksi'));
    }

//ganti status
    public function GantiStatus($id){
        $transaksi = Transaksi::find($id);
        $transaksi->stt = '1';
        $transaksi->save();

        \Session::flash('flash_message','Status Telah Di Ganti Menjadi Approve');
        return redirect('/pending');  
    }
    public function GantiStatusApp($id){
        $transaksi = Transaksi::find($id);    
        $transaksi->stt = '0';
        $transaksi->save();

        // // untuk mengembalikan stok
        // $tambah_stok = Gamez::find($transaksi->fk_game);
        // $gagal_pesan = $transaksi->jumlah_beli;
        // $pengembalian_stok = $tambah_stok->stok;
        // $tambah_stok->stok = $pengembalian_stok + $gagal_pesan;
        // $tambah_stok->save();

        \Session::flash('flash_message','Status Telah Di Ganti Menjadi Pending');
        return redirect('/approve');  
    }
    public function cancel($id){
        $transaksi = Transaksi::find($id);    
        // untuk mengembalikan stok
        $tambah_stok = Gamez::find($transaksi->fk_game);
        $gagal_pesan = $transaksi->jumlah_beli;
        $pengembalian_stok = $tambah_stok->stok;
        $tambah_stok->stok = $pengembalian_stok + $gagal_pesan;
        $tambah_stok->save();

        $transaksi = Transaksi::find($id)->delete();

        \Session::flash('flash_message','Transaksi Telah Di Batalkan');
        return redirect('/approve');  
    }

    public function cancel2($id){
        $transaksi = Transaksi::find($id);    
        // untuk mengembalikan stok
        $tambah_stok = Gamez::find($transaksi->fk_game);
        $gagal_pesan = $transaksi->jumlah_beli;
        $pengembalian_stok = $tambah_stok->stok;
        $tambah_stok->stok = $pengembalian_stok + $gagal_pesan;
        $tambah_stok->save();

        $transaksi = Transaksi::find($id)->delete();

        \Session::flash('flash_message','Transaksi Telah Di Batalkan');
        return redirect('/pending');  
    }

//BATAS 

//EKSPORT PDF DAN EXPORT EXCEL PENDING 
    public function pdfPen(){
        $list_pending= Transaksi::where('stt','0')->get();

        $pdf = PDF::loadView('pdf.PdfTransPen', compact('list_pending'));
        return $pdf->download('ExportPdftransPending'.Carbon::now().'.pdf');
        // FIXED COY
    }

    public function excelPen(){
       $data = Transaksi::where('stt','0')->all();
       Excel::create('ExportExcelTransaksiPending'.Carbon::now().'', function($excel) use($data) {

       $excel->sheet('coba1', function($sheet) use($data) {

           $sheet->fromArray($data);;

       });

    })->export('xls');        
    }

//BATAS

//EKSPORT PDF DAN EXCEL APPROVED
    public function pdfApp(){
        $list_approved= Transaksi::where('stt','1')->get();

        $pdf = PDF::loadView('pdf.PdfTransApp', compact('list_approved'));
        return $pdf->download('ExportPdftransApproved'.Carbon::now().'.pdf');
    }
    
    public function excelApp(){
       $data = Transaksi::where('stt','1')->get();
       Excel::create('ExportExcelTransaksiApproved'.Carbon::now().'', function($excel) use($data) {

       $excel->sheet('coba1', function($sheet) use($data) {

           $sheet->fromArray($data);;

       });

    })->export('xls');       
    }

//BATAS
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
