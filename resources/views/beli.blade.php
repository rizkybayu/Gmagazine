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
            <li  class="active"><a href="{{ url('/beli') }}">Beli Games</a></li>
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

    <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
        <div class="row">
        @if(count($data) != 0)
        @foreach($data as $game)
            <div class="col-sm-3">
                <div class="kontenBarang">
                    <img src="{{ asset('images/games')}}/{{'game'.$game->id}}.jpg" class="img-responsive">
                    <h3>{{ $game->nama_game }}</h3>
                    <p>Harga : <?php echo 'Rp. ' . number_format( $game['harga'], 0 , '' , '.' )?></p>
                    <p>Stok : {{$game->stok}}</p>
                    <center><a href="{{url('/transaksi',$game->id)}}"><button class="btn btn-warning"><b>Pesan Sekarang!</b></button></a></center>
                </div>
            </div>
        @endforeach
              
        @else
             <center><img src="{{asset('images/notfound.gif')}}" width="50%" height="50%" /></center> 
        @endif
        </div>
        </div>
                            <nav style="clear:both">
                                <div class="pagination">
                                {!! str_replace('/?', '?', $data->render()) !!}
                                </div>
                            </nav>
    </div>
</div>
    <!-- /.container -->

    <!--footer-->
@include('footer')
    <!--end footer-->