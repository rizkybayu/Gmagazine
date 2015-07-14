<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function getLogin()
    {

        return view('admin.login');
    }

    public function postLogin()
    {

    }

    public function getLogout()
    {

    }


    
}
