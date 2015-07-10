﻿<!-- header -->
@include('admin.header')
<!-- end header -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Selamat Datang Admin!</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-newspaper-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$ambilArtikel->count()}} Artikel</p>
                    <p class="text-muted">Total</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-laptop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$ambilAdmin->count()}} Admin</p>
                    <p class="text-muted">Total</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                       
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->


<!-- footer -->
@include('admin.footer')
<!-- end footer -->
