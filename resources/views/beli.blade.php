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
            <li><a href="{{ url('/cara') }}">Cara Pemesanan</a></li>
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
                            <!-- NOTIFIKASI -->
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_message') }}</div>
                                    @endif
                        <!-- BATAS NOTIFIKASI -->
        <div class="col-sm-12 col-md-12 col-xs-12">
        <div class="row">
        @if(count($data) != 0)
        @foreach($data as $game)
            <div class="col-sm-3">
                <div class="kontenBarang">
                    <img src="{{ asset('images/games')}}/{{'game'.$game->id}}.jpg" class="img-responsive">
                    <h3>{{ $game->nama_game }}</h3>
                    <p>Harga : <?php echo 'Rp. ' . number_format( $game['harga'], 0 , '' , '.' )?></p>
                    <p>Stok : @if($game->stok <= "0")
                              {!! "<b style='color:red'>Habis</b>" !!}  
                              @else
                              {{ $game->stok }}
                              <center><a href="{{url('/transaksi',$game->id)}}"><button class="btn btn-warning"><b>Pesan Sekarang!</b></button></a></center>
                              @endif
                    </p>
                    
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