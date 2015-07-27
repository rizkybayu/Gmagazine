<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Controllers\Controller;
use App\Database\Model\Game;
use App\Database\Model\Admin;
use App\Database\Model\Slider;
use Carbon\Carbon;
use App\Http\Requests\ArtikelRequest;
use App\Http\Requests\UbahRequest;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
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
        $ambilAdmin = Admin ::get();
        return view('admin.home',compact('ambilArtikel','ambilAdmin'));
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
        return view('admin.form');
    }

    public function store(ArtikelRequest $request) //menyimpan
    {
        $game = new Game();
        $game->judul=$request->input('judul');
        // $game->foto=$request->input('judul'); TERAKHIR atau di skip tapi di ganti jadi default
        // $game->foto='images/news/ps4.png'; default ini
        $game->isi=$request->input('isi');
        $game->kategori=$request->input('kategori');
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
        $game->kategori=$request->input('kategori');
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

        return view('admin.ubahadmin',compact('edit'));
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
        $hmm = Carbon::now();
        $pdf = PDF::loadView('pdf.test', compact('list_game'));
        return $pdf->download('ExportPdf'.Carbon::now().'.pdf');
    }
// batas membuat pdf

//membuat excel
public function excel(){
       $data = Game::all();

       Excel::create('ExportExcel'.Carbon::now().'', function($excel) use($data) {

       $excel->sheet('coba1', function($sheet) use($data) {

           $sheet->fromArray($data);

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

    public function hmm()
    {
        user::create(['email' => 'restu@javan.co.id', 'password' => Hash::make('restu'), 'name' => 'restu']);
    }
}
