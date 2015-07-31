<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('admin/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />
        <!-- FAV ICON -->
    <link rel="SHORTCUT ICON" href="{{asset('images/fav.png')}}" type="image/x-icon"/>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gmaz admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> {{ date('F d, Y') }} &nbsp; <a href="{{ url('/auth/logout') }}" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{asset('admin/img/find_user.png')}}" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="{{url('/gm-admin/index')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-newspaper-o fa-3x"></i></i>Artikel<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/lihatartikel">Daftar Artikel</a>
                            </li>
                            <li>
                                <a href="/tambahartikel">Tambah Artikel</a>
                            </li>
                        </ul>
                      </li> 

<!--                       <li>
                        <a  href="{{url('/lihatartikel')}}"><i class="fa fa-table fa-3x"></i>Daftar Artikel</a>
                      </li>
                    <li>
                        <a class=""  href="{{url('/tambahartikel')}}"><i class="fa fa-edit fa-3x"></i>Tambah Artikel</a>
                    </li>   -->

                      <li>
                        <a href="#"><i class="fa fa-tags fa-3x"></i>Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/lihatkategori">Daftar Kategori</a>
                            </li>
                            <li>
                                <a href="/tambahkategori">Tambah Kategori</a>
                            </li>
                        </ul>
                      </li> 
                      <li>
                        <a href="#"><i class="fa fa-gamepad fa-3x"></i>Games<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/listgame')}}">List Game</a>
                            </li>
                            <li>
                                <a href="{{url('/tambahgame')}}">Tambah Game</a>
                            </li>
                        </ul>
                      </li> 
                      <li>
                        <a href="#"><i class="fa fa-money fa-3x"></i>Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/approve')}}">Approve</a>
                            </li>
                            <li>
                                <a href="{{url('/pending')}}">Pending</a>
                            </li>
                        </ul>
                      </li> 
<!-- 
                      <li>
                        <a  href="{{url('/lihatkategori')}}"><i class="fa fa-table fa-3x"></i>Daftar Kategori</a>
                      </li>
                    <li>
                        <a class=""  href="{{url('/tambahkategori')}}"><i class="fa fa-edit fa-3x"></i>Tambah Kategori</a>
                    </li>   -->               
                     <!-- <li>
                        <a   href="{{url('auth/register')}}"><i class="fa fa-laptop fa-3x"></i>Tambah Admin</a>
                    </li>    -->
                </ul>
               
            </div>
            
        </nav> 