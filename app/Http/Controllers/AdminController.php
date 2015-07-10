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

    public function login()
    {
        return view('admin.login');
    }

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

    public function lihat()
    {
        $list_game = Game::paginate(10);
        return view('admin.table',compact('list_game'));
    }

    public function tambahadmin(){
        return view('admin.registeration');
    }


}
