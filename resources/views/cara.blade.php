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
            <li class="active"><a href="{{ url('/cara') }}">Cara Pemesanan</a></li>
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
    	<div class="col-sm-12 col-xs-12"><center>
    		<img src="{{ asset('images/')}}/logo-bca.gif"/> <img src="{{ asset('images/')}}/logo-mandiri.gif"/> <img src="{{ asset('images/')}}/logo-bni.gif"/> <img src="{{ asset('images/')}}/logo-bri.gif"/>
    	<br><br><div class="jumbotron" style="bgcolor:#ddf0e4">
    	<h3><b>Ketentuan Pembayaran Dan Pemesanan :</b></h3><br>
    	<p>1. Pembeli memilih barang yang akan di pesan terlebih dahulu<br>
    	2. Setelah selesai memilih barang, silahkan transfer ke no rekening di bawah ini :<br><br>
    	<code>BCA<br>A/n : Rizky Bayu <br> No Rek : 5520304412</code>
    	<br><br>
    	<code>Mandiri<br>A/n : Rizky Bayu <br> No Rek : 552030488</code>
    	<br><br>
    	<code>BNI<br>A/n : Rizky Bayu <br> No Rek : 5520483748</code>
    	<br><br>
    	<code>BRI<br>A/n : Rizky Bayu <br> No Rek : 55203473878</code>
    	<br><br>
    	3. Setelah itu kirimkan bukti transfer ke <b><i>admin@gmaz.co.id</i></b><br>
    	4. Sertakan Alamat dan no yang bisa di hubungi<br>
    	5. Admin Akan memproses dan selasai<br>
    	Happy Gamming :)
    	</p></div>
    	</center></div>
    </div>
</div>
    <!-- /.container -->
