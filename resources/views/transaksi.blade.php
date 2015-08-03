    <!--header -->
@include('header')
    <!--end header-->
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse garis" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}"><div class="tul">GMagazine</div></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Berita</a></li>
            <li><a href="{{ url('/beli') }}">Beli Games</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>                    
                </ul>
            </li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form action="{{ url('/cari') }}" method="POST" name="carii" class="navbar-form" role="search" onSubmit="return cekFile()">
                <div class="input-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control" placeholder="Search" name="cari1">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>          
    </div>
</nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                                <!-- NOTIFIKASI -->
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_message') }}</div>
                                    @endif
                        <!-- BATAS NOTIFIKASI -->
    <div class="col-lg-12">
        {!! Form::open(array('url' => ['transaksi_simpan',$yangdipilih], 'method' => 'POST' ,'files' => true , 'name' => 'myForm' , 'onsubmit' => 'return validateForm()')) !!}
        <!-- <form role="form"> -->
        <div class="form-group @if ($errors->has('nama_game')) has-error @endif">
            {!! Form::label('Game Yang Di Pilih :') !!}
            {!! Form::hidden('id',$yangdipilih->id,['class'=>'form-control','placeholder'=>'Masukan Nama Game','maxlength'=>'40']) !!}
            {!! Form::text('nama_game',$yangdipilih->nama_game,['class'=>'form-control','placeholder'=>'Masukan Nama Game','maxlength'=>'40' ,'readonly']) !!}
            @if ($errors->has('nama_game')) <p class="help-block">{{ $errors->first('nama_game') }}</p> @endif
        </div>
        <div class="form-group @if ($errors->has('nama')) has-error @endif">
            {!! Form::label('Nama Pembeli :') !!}
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Masukan Nama Lengkap','maxlength'=>'40']) !!}
            @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
        </div>
        <div class="form-group @if ($errors->has('email')) has-error @endif">
            {!! Form::label('Email :') !!}
            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Masukan Email','maxlength'=>'40']) !!}
            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
        </div> 
        <div class="form-group @if ($errors->has('no_hp')) has-error @endif">
            {!! Form::label('No Telephon :') !!}
            {!! Form::text('no_hp',null,['class'=>'form-control','placeholder'=>'Masukan No Telephon','maxlength'=>'40']) !!}
            @if ($errors->has('no_hp')) <p class="help-block">{{ $errors->first('no_hp') }}</p> @endif
        </div>  
        <div class="form-group @if ($errors->has('jumbel')) has-error @endif">
            {!! Form::label('Jumlah Beli :') !!}
            {!! Form::text('jumbel',null,['class'=>'form-control','placeholder'=>'Masukan No Telephon','maxlength'=>'40']) !!}
            @if ($errors->has('jumbel')) <p class="help-block">{{ $errors->first('jumbel') }}</p> @endif
        </div>                    
            {!! Form::hidden('stok',$yangdipilih->stok,['class'=>'form-control','placeholder'=>'Masukan No Telephon','maxlength'=>'40']) !!}                     
        <div class="col-sm-3" style="clear:both">
        {!!Form::submit('Beli!',['class' => 'btn btn-default','name'=>'simpan']) !!}
        <!-- <button type="submit" class="btn btn-default">Simpan</button> -->
        <button type="reset" class="btn btn-primary">Reset</button>
        </div>
        {!! Form::close() !!}
        <center>
        </center>
        </div>
      </div>
    </div>

    <script>
    function validateForm() {
    var x = document.forms["myForm"]["jumbel"].value;
    var y = document.forms["myForm"]["stok"].value;
    if (x == null || x == "" || x == "0") {
        alert("Data Harus Di Isi Dengan Benar");
        return false;
    }else if(x>=y){
        alert("Pemesanan Melibihi Stok");
        return false;
    }
    }
    </script>
    <!-- /.container -->
