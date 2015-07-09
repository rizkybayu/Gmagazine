<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Database\Model\Game;
use App\Database\Model\Slider;


class AdminController extends Controller
{
    /**
     * INI DI PAKAI DI HALAMAN ADMIN !!!
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.home');
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
        $game->save();

        return redirect('/lihatartikel');

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
