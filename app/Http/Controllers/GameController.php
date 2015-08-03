<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Database\Model\Game;
use App\Database\Model\Slider;
use DB;
use App\Database\Model\Kategori;

class GameController extends Controller
{
    /**
     * INI DIPAKAI DI INDEX !!!
     *
     * @return Response
     */
    public function index()
    {
        $data = Game::paginate(4);
        $data2 = Slider::get();
        return view('index',compact('data','data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function lihatArtikel($id)
    {
        $artikel2 = Game::FindOrFail($id);

        return view('artikel',compact('artikel2'));
    }
    public function lihat()
    {
        return view('artikel');
    }

    public function cari(Request $request){
        $data2 = Slider::get();
        

       $searchterm = $request->input('cari1');
       if ($searchterm){


           $results = Game::Where('Judul', 'LIKE', '%'. $searchterm .'%')->get();
           return view('cari', compact('results', 'searchterm','data2'));

       }
   }

   //sorting

   //batas sortng

    public function cek()
    {
        $data2 = Slider::get();
        return view('cari',compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    public function cara(){
        return view('cara');
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
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
