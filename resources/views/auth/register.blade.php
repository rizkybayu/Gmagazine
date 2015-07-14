<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2>Daftar Admin</h2>
               
                <h5>( Untuk Mendaftarkan Admin )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong> GMagazine </strong>  
                            </div>
                            <div class="panel-body">
                                <!-- NOTIFIKASI -->
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                                    @endif
                                <!-- BATAS NOTIFIKASI -->
                                {!! Form::open(array('url' => 'auth/register', 'method' => 'POST')) !!}
<br/>
                                        <div class="form-group input-group @if ($errors->has('name')) has-error @endif">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nama Lengkap']) !!}
                                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                            <!-- <input type="text" class="form-control" placeholder="Nama" /> -->
                                        </div>
                                         <div class="form-group input-group @if ($errors->has('email')) has-error @endif">
                                            <span class="input-group-addon">@</span>
                                            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                                            <!-- <input type="text" class="form-control" placeholder="Email" /> -->
                                        </div>
                                      <div class="form-group input-group @if ($errors->has('password')) has-error @endif">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <!-- {!! Form::password('pass',null,['class'=>'form-control','placeholder'=>'Password']) !!} -->
                                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); !!}
                                            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                                            <!-- <input type="password" class="form-control" placeholder="Password" /> -->
                                        </div>
                                     <!-- <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Ketik Ulang Password" />
                                        </div> -->
                                     
                                     {!!Form::submit('Tambah Admin',['class' => 'btn btn-success','name'=>'simpan']) !!}
                                     <!-- <a href="index.html" class="btn btn-success ">Tambah Admin</a> -->
                                    <hr />
                                    <a href="{{url('/')}}" >Kembali</a>
                                    {!! Form::close() !!}
                                    
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('admin/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('admin/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
   
</body>
</html>
