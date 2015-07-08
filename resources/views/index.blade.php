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
        <a class="navbar-brand" href="#"><div class="tul">GMagazine</div></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Berita</a></li>
            <li><a href="#">Games Baru</a></li>
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
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
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
        <li><a href="http://wowslider.com"><img src="data1/images/2.jpg" alt="responsive carousel" title="2" id="wows1_1"/></a></li>
        <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
        <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a>
        <a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>3</span></a>
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

        <div class="isi">
            <div class="col-lg-6">
            <div class="tambah">
              <div class="kotak2">
                  <img src="images/news/mortal.jpg" class="img-responsive">
                  <div class="ket">
                  <div class="tag">Article</div>
                      <p><a href="#">MORTAL KOMBAT X RELEASE !</a></p>
                  </div>
              </div>
            </div>
            </div>
        </div>

        <div class="isi">
            <div class="col-lg-6">
              <div class="kotak2">
                  <img src="images/news/alien.jpg" class="img-responsive">
                  <div class="ket">
                  <div class="tag">Article</div>
                      <p><a href="#">PS4 NOW PRE ORDER !</a></p>
                  </div>
              </div>
            </div>
        </div>

        <div class="isi">
            <div class="col-lg-6">
              <div class="kotak2">
                  <img src="images/news/ps4.png" class="img-responsive">
                  <div class="ket">
                  <div class="tag">Article</div>
                      <p><a href="#">PS4 NOW PRE ORDER !</a></p>
                  </div>
              </div>
            </div>
        </div>

                <div class="isi">
            <div class="col-lg-6">
              <div class="kotak2">
                  <img src="images/news/amd.jpg" class="img-responsive">
                  <div class="ket">
                  <div class="tag">Article</div>
                      <p><a href="#">PS4 NOW PRE ORDER !</a></p>
                  </div>
              </div>
            </div>
        </div>

        <center>
        <nav>
          <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="disable"><a href="#">2 <span class="sr-only">(current)</span></a></li>
            <li class="disable"><a href="#">3 <span class="sr-only">(current)</span></a></li>
            <li class="disable"><a href="#">4 <span class="sr-only">(current)</span></a></li>
            <li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
          </ul>
        </nav>
        </center>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!--footer-->
@include('footer')
    <!--end footer-->