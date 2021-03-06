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
            <li class="active"><a href="{{url('/')}}">Berita</a></li>
            <li><a href="{{ url('/beli') }}">Beli Games</a></li>
            <li><a href="{{ url('/cara') }}">Cara Pemesanan</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form action="{{ url('/cari') }}" method="POST" name="carii" class="navbar-form" role="search" onSubmit="return cekFile()">
                <div class="input-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control" placeholder="Search" name="cari1" id="Ms_cari">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>          
    </div>
</nav>

    <!-- Page Content -->

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
        <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
        <li><a href="127.0.0.1"><img src="data1/images/2.jpg" alt="responsive carousel" title="2" id="wows1_1"/></a></li>
        <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
    <?= $a=1;?>
    @foreach($data2 as $slide)
        <a href="#" title="1"><span><img src="{{$slide->foto}}" alt="<?= $a; ?>"/><?= $a; ?></span></a>
    <?= $a++; ?>
    @endforeach
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">css image gallery</a> by WOWSlider.com v8.2</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    <!-- /.container -->


    <!-- Page Content -->
    <div class="container">
        <div class="row">
    <div class="col-lg-12">

        @foreach ($data as $val )
        <div class="isi">
            <div class="col-lg-6">
            <div class="tambah">
            <div class="row">
              <div class="kotak2">
                  <img src="{{ asset('images/news')}}/{{'cover'.$val->id}}.jpg" class="img-responsive">
                  <div class="ket">
                  <div class="tag">{{$val->dataKategori ? $val->dataKategori->kategori : '' }}</div>
                        <p><a href="{{ url('artikel',$val->id) }}">{{ $val->Judul }}</a></p>
                  </div>
              </div>
            </div>
            </div>
            </div>
        </div>
        @endforeach

        

        <center>
        <nav style="clear:both">
        <div class="pagination">
            {!! str_replace('/?', '?', $data->render()) !!}
        </div>
        </nav>
        </center>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!--footer-->

<!-- Modal -->
    <div class="modal fade" id="help">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Keyboard Shortcut</h4>
          </div>

          <div class="modal-body">
            <table>
                <tr>
                    <td width="80"><span class="label label-default">?</span></td>
                    <td width="200">Help</td>
                    <td width="60"><span class="label label-default">t</span></td>
                    <td width="200">Share to tweet</td>
                </tr>
                <tr>
                    <td><span class="label label-default">/</span></td>
                    <td>Search Post</td>
                </tr>
            </table>

          </div>
        </div>
      </div>
    </div>

@include('footer')
    <!--end footer-->