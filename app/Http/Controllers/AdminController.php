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
     * Display a listing of the resource.
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

    public function lihat()
    {
        $list_game = Game::paginate(10);
        return view('admin.table',compact('list_game'));
    }

    public function tambahadmin(){
        return view('admin.registeration');
    }

}
