<!-- header -->
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
           <!-- FAV ICON -->
    <link rel="SHORTCUT ICON" href="{{asset('images/fav.png')}}" type="image/x-icon"/>
</head>
<body>
<!-- end header -->
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Gmagazine : Administrator</h2>
               
                <h5>( Login Dulu Bos )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Masukan Data </strong>  
                            </div>
                            <div class="panel-body">
                            	@if(count($errors))

                            		<ul>
                            		@foreach($errors->all() as $error)
                            			<li>{{ $error }}</li>
                            		@endforeach
                            		</ul>
                            	@endif
                                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                                       <br />
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="email" placeholder="Email " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password"  placeholder="Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Ingat Saya 
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Lupa Password ? </a> 
                                            </span>
                                        </div>
                                     <input type="submit" value="Masuk" class="btn btn-primary">
<!--                                      <a href="{{url('/dash')}}" class="btn btn-primary ">Login Now</a><!-- nanti ganti biar dinamis -->
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


<!-- footer -->
@include('admin.footer')
<!-- end footer -->