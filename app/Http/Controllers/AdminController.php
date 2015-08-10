<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Controllers\Controller;
use App\Database\Model\Game;
use App\Database\Model\Kategori;
use App\Database\Model\Admin;
use App\Database\Model\Gamez;
use App\Database\Model\Transaksi;
use App\Database\Model\Slider;
use Carbon\Carbon;
use App\Http\Requests\ArtikelRequest;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\PdfReportRequest;
use App\Http\Requests\UbahRequest;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use App\Http\Requests\UbkategRequest;
use App\Http\Requests\KategoriRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;

class AdminController extends Controller
{
    /**
     * INI DI PAKAI DI HALAMAN ADMIN !!!
     *
     * @return Response
     */
    public function index()
    {
        $ambilArtikel = Game::get();
        $ambilAdmin = Admin::get();
        $ambilGame = Gamez::get();
        $ambilTransaksiPending = Transaksi::where('stt','0')->get();
        $ambilTransaksiApprove = Transaksi::where('stt','1')->get();
        return view('admin.home',compact('ambilArtikel','ambilAdmin','ambilGame','ambilTransaksiPending','ambilTransaksiApprove'));
    }

//UNTUK ADMIN LOGIN
    public function login()
    {
        return view('admin.login');
    }
//BATAS UNTUK ADMIN LOGIN


//UNTUK ARTIKEL
    public function tambah()
    {
        $kategori = Kategori::lists('kategori','id');
        return view('admin.form', compact('kategori'));
    }

    public function store(ArtikelRequest $request) //menyimpan
    {

        $game = new Game();
        $game->judul=$request->input('judul');
        // $game->foto=$request->input('judul'); TERAKHIR atau di skip tapi di ganti jadi default
        // $game->foto='images/news/ps4.png'; default ini
        $game->isi=$request->input('isi');
        $game->id_kategori=$request->input('id_kategori');
        $game->pembuat= Auth::user()->name;
        $game->tag = $request->input('tag');
        $game->tgl_buat= Carbon::now();
        $game->save();

        $imageName = "cover".$game->id . '.' . 
        $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/images/news/', $imageName
        );

        \Session::flash('flash_message','Berhasil Membuat Artikel');
        return redirect('/tambahartikel');
    }

    public function hapus($id){
        Game::find($id)->delete();

        \Session::flash('flash_message','Berhasil menghapus artikel !');
        return redirect('/lihatartikel');
    }

    public function ubah($id,UbahRequest $request)
    {
         $game = Game::find($id);
        $game->judul=$request->input('judul');
        // $game->foto=$request->input('judul'); TERAKHIR atau di skip tapi di ganti jadi default
        // $game->foto='images/news/ps4.png';
        $game->isi=$request->input('isi');
        $game->id_kategori=$request->input('id_kategori');
        $game->pembuat= 'Rizky Bayu';
        $game->tag = $request->input('tag');
        $game->tgl_buat= Carbon::now();
        $game->save();
        \Session::flash('flash_message','Berhasil mengubah artikel !');
        return redirect('/lihatartikel');
    }

    public function edit($id)
    {
        $edit = Game::find($id);
        $kategori = Kategori::lists('kategori','id');
        return view('admin.ubahadmin',compact('edit','kategori'));
    }
//BATAS MEMBUAT ARTIKEL

//MELIHAT ARTIKEL APA SAJA YANG SUDAH DI BUAT DAN BISA MENGEDITNYA
    public function lihat()
    {
        $list_game = Game::paginate(10);
        return view('admin.table',compact('list_game'));
    }
//BATAS MELIHAT DAN MENGEDIT DAN MENGHAPUS 

//membuat pdf
    public function pdf(){
        $list_game = Game::all();
        $kategori = Kategori::lists('kategori','id');
        $hmm = Carbon::now();
        $pdf = PDF::loadView('pdf.test', compact('list_game','kategori'));
        return $pdf->download('ExportPdf'.Carbon::now().'.pdf');
    }
// batas membuat pdf

//membuat excel
public function excel(){
       $data = Game::all();
       $kategori = Kategori::lists('kategori','id');
       Excel::create('ExportExcel'.Carbon::now().'', function($excel) use($data) {

       $excel->sheet('coba1', function($sheet) use($data) {

           $sheet->fromArray($data);;

       });

    })->export('xls');
   }
//batas membuat excel

//UNTUK MEMBUAT ADMIN 
    public function tambahadmin(){
        return view('admin.registeration');
    }
    public function tambah_admin(AdminRequest $request2)
    {
        $admin = new Admin();
        $admin->name=$request2->input('name');
        $admin->email=$request2->input('email');
        $admin->password=$request2->input('password');
        $admin->save();

        \Session::flash('flash_message','Berhasil Menambahkan Admin !');
        return redirect('/tambahadmin');
    }
// BATAS UNTUK MEMBUAT ADMIN

//tambah dan lihat kategori
    public function tambahkategori(){
        return view('admin.tambahkategori');
    }

    public function simpankategori(KategoriRequest $request3){
        $kategori = new Kategori();
        $kategori->kategori = $request3->input('kategori');
        $kategori->save();

        \Session::flash('flash_message','Berhasil Menambahkan Kategori !');
        return redirect('/tambahkategori');
    }

    public function lihatkategori(){    
        $list_kategori = Kategori::paginate(10);
        return view('admin.lihatkategori',compact('list_kategori'));
    }

    public function hapus_kateg($id){
        Kategori::find($id)->delete();

        \Session::flash('flash_message','Berhasil menghapus Kategori !');
        return redirect('/lihatkategori');
    }

    public function ubah_kateg($id,UbkategRequest $request)
    {
        $kategori = Kategori::find($id);
        $kategori->kategori=$request->input('ubah_kategs');
        $kategori->save();
        \Session::flash('flash_message','Berhasil mengubah Kategori !');
        return redirect('/lihatkategori');
    }

    public function edit_kateg($id)
    {
        $edit = Kategori::find($id);
        return view('admin.ubahkategori',compact('edit'));
    }
//batas 

    public function hmm()
    {
        user::create(['email' => 'restu@javan.co.id', 'password' => Hash::make('restu'), 'name' => 'restu']);
    }


//Report Custom
    public function viewPort(){
        return view('admin.viewport');
    }

    public function report(ReportRequest $request){
        $mulai_tgl = $request->input('dari_tanggal');
        $sampai_tgl = $request->input('sampai_tanggal');
        $filter = $request->input('filter');

        if($filter == "0"){
        $filter2 = $request->input('filter');
        $mulai_tgl2 = $request->input('dari_tanggal');
        $sampai_tgl2 = $request->input('sampai_tanggal');
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->where('stt','0')
                        ->get();
                        return view('admin.report',compact('list_transaksi','filter2','mulai_tgl2','sampai_tgl2'));
        }elseif($filter == "1"){
        $filter2 = $request->input('filter');
        $mulai_tgl2 = $request->input('dari_tanggal');
        $sampai_tgl2 = $request->input('sampai_tanggal');
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->where('stt','1')
                        ->get();
                        return view('admin.report',compact('list_transaksi','filter2','mulai_tgl2','sampai_tgl2'));
        }else{
        $filter2 = $request->input('filter');
        $mulai_tgl2 = $request->input('dari_tanggal');
        $sampai_tgl2 = $request->input('sampai_tanggal');
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->get();
                        return view('admin.report',compact('list_transaksi','filter2','mulai_tgl2','sampai_tgl2'));
        }
        
            // $list_transaksi = Transaksi::where('stt','1')->paginate(10);
            // return view('admin.approve',compact('list_transaksi')); 
    }

    public function pdfReport(PdfReportRequest $request){
         // $filter_output = $request->input('filter_ambil');
        // // $list_export= Transaksi::where('stt',$filter)->get();
        // return view('admin.report',compact('list_transaksi'))
        // $list_export= Transaksi::where('stt',$filter_output)->get();

        // dd($filter_output);


        //inisialisasi 
        $filter_output = $request->input('filter_ambil');
        $mulai_tgl = $request->input('tgl_awal');
        $sampai_tgl = $request->input('tgl_akhir');
        //batas inisialisasi
        
        if($filter_output == "0"){
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->where('stt','0')
                        ->get();

        $pdf = PDF::loadView('pdf.ReportFinal', compact('list_transaksi'));
        return $pdf->download('FinalExport'.Carbon::now().'.pdf');

        }elseif($filter_output == "1"){
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->where('stt','1')
                        ->get();
                $pdf = PDF::loadView('pdf.ReportFinal', compact('list_transaksi'));
                return $pdf->download('FinalExport'.Carbon::now().'.pdf');
        }else{
        $list_transaksi = Transaksi::whereBetween('tgl_beli', [$mulai_tgl, $sampai_tgl] )
                        ->get();
                $pdf = PDF::loadView('pdf.ReportFinal', compact('list_transaksi'));
                return $pdf->download('FinalExport'.Carbon::now().'.pdf');
        }

     
    }
    public function excelReport(){

    }
   
}
