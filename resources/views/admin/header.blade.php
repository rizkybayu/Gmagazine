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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{asset('admin/img/find_user.png')}}" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="{{url('/dash')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="{{url('/lihatartikel')}}"><i class="fa fa-table fa-3x"></i>Daftar Artikel</a>
                      </li>
                    <li>
                        <a class=""  href="{{url('/tambahartikel')}}"><i class="fa fa-edit fa-3x"></i>Tambah Artikel</a>
                    </li>                 
                     <li>
                        <a   href="{{url('/tambahadmin')}}"><i class="fa fa-laptop fa-3x"></i>Tambah Admin</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav> 