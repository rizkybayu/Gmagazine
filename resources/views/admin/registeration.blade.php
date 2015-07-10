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
                                {!! Form::open(array('url' => '/tambah_admin', 'method' => 'POST')) !!}
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Lengkap']) !!}
                                            <!-- <input type="text" class="form-control" placeholder="Nama" /> -->
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            {!! Form::text('user',null,['class'=>'form-control','placeholder'=>'Username']) !!}
                                            <!-- <input type="text" class="form-control" placeholder="Username" /> -->
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                                            <!-- <input type="text" class="form-control" placeholder="Email" /> -->
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <!-- {!! Form::password('pass',null,['class'=>'form-control','placeholder'=>'Password']) !!} -->
                                            {!! Form::password('pass', array('placeholder' => 'Password','class' => 'form-control')); !!}
                                            <!-- <input type="password" class="form-control" placeholder="Password" /> -->
                                        </div>
                                     <!-- <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Ketik Ulang Password" />
                                        </div> -->
                                     
                                     {!!Form::submit('Tambah Admin',['class' => 'btn btn-success','name'=>'simpan']) !!}
                                     <!-- <a href="index.html" class="btn btn-success ">Tambah Admin</a> -->
                                    <hr />
                                    <a href="{{url('/dash')}}" >Kembali</a>
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
