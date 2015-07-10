<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Database\Model\Game;
use App\Database\Model\Admin;
use App\Database\Model\Slider;
use Carbon\Carbon;


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
        return view('admin.home',compact('ambilArtikel','ambilAdmin'));
    }

//UNTUK ADMIN LOGIN
    public function login()
    {
        return view('admin.login');
    }
//BATAS UNTUK ADMIN LOGIN


//UNTUK MEMBUAT ARTIKEL
    public function tambah()
    {
        return view('admin.form');
    }
    public function store(Request $request) //menyimpan
    {
        $game = new Game();
        $game->judul=$request->input('judul');
        // $game->foto=$request->input('judul'); TERAKHIR atau di skip tapi di ganti jadi default
        $game->foto='images/news/ps4.png';
        $game->isi=$request->input('isi');
        $game->kategori=$request->input('kategori');
        $game->pembuat= 'Rizky Bayu';
        $game->tag = $request->input('tag');
        $game->tgl_buat= Carbon::now();
        $game->save();

        return redirect('/tambahartikel');
    }
//BATAS MEMBUAT ARTIKEL

//MELIHAT ARTIKEL APA SAJA YANG SUDAH DI BUAT DAN BISA MENGEDITNYA
    public function lihat()
    {
        $list_game = Game::paginate(10);
        return view('admin.table',compact('list_game'));
    }
//BATAS MELIHAT DAN MENGEDIT DAN MENGHAPUS 

//UNTUK MEMBUAT ADMIN 
    public function tambahadmin(){
        return view('admin.registeration');
    }
    public function tambah_admin(Request $request2)
    {
        $admin = new Admin();
        $admin->nama_admin=$request2->input('nama');
        $admin->email_admin=$request2->input('email');
        $admin->username=$request2->input('user');
        $admin->password=$request2->input('pass');
        $admin->tgl_jadi= Carbon::now();
        $admin->save();

        return redirect('/tambahadmin');
    }
// BATAS UNTUK MEMBUAT ADMIN

}
