<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$artikel2->Judul}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/logo-nav.css')}}" rel="stylesheet">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}" />
<script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>
<!-- End WOWSlider.com HEAD section -->

</head>

<body>

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
        <li><img src="{{asset('data1/images/1.jpg')}}" alt="1" title="1" id="wows1_0"/></li>
        <li><a href="http://wowslider.com"><img src="{{asset('data1/images/2.jpg')}}" alt="responsive carousel" title="2" id="wows1_1"/></a></li>
        <li><img src="{{asset('data1/images/2.jpg')}}" alt="3" title="3" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="1"><span><img src="{{asset('data1/tooltips/1.jpg')}}" alt="1"/>1</span></a>
        <a href="#" title="2"><span><img src="{{asset('data1/tooltips/2.jpg')}}" alt="2"/>2</span></a>
        <a href="#" title="3"><span><img src="{{asset('data1/tooltips/3.jpg')}}" alt="3"/>3</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">css image gallery</a> by WOWSlider.com v8.2</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="{{asset('engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{asset('engine1/script.js')}}"></script>
<!-- End WOWSlider.com BODY section -->
    <!-- /.container -->


    <!-- Page Content -->
    <div class="container">
    <div class="col-sm-12">
    <!--artikel-->
        <div class="col-sm-9 col-xs-12">
          <div class="judul"><h2>{{$artikel2->Judul}}</h2>
              <p><b>{{$artikel2->pembuat}}</b> , <i>{{ date('d F, Y', strtotime($artikel2->tgl_buat)) }}</i></p>
              <hr>
          </div><!-- judul -->

        <div class="isi-gambar">
          <img src="{{asset('images/games/bf.jpg')}}" class="img-responsive">
        </div>

        <div class="isi-artikel">
            <p>
            {!! $artikel2->isi !!}
            </p>
        </div>

        <div class="tags">
        <h3>Tags : </h3> <p>{{$artikel2->tag}}</p>
        </div>

        <div class="col-sm-12 col-xs-12">
            <!-- begin htmlcommentbox.com -->
            <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
            <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
            <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(""+window.location).replace(/'/g,"%27") || hcb_user.PAGE, h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
            <!-- end htmlcommentbox.com -->
        </div>
        </div>

    <!--sidebar-->
        <div class="col-sm-3 col-xs-12">
        <div class="kanan">ADVERTISMENT</div><br>
        <img src="{{asset('images/ads/ad.jpg')}}" class="img-responsive"/>
        </div>
    </div>
    </div>


<!-- fpoter -->
   <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-3">
                <div id="meta-3" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Find Me On</h4>         
                    <ul>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Entries RSS</a></li>
                        <li><a href="#">Comments></a></li>
                        <li><a href="#">WordPress.org</a></li>                        
                    </ul>
                </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
                <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">     
                    <h4 class="widgettitle">Footer Widget 2</h4>        
                    <ul>
                        <li><a href="#">Links Post</a></li>
                        <li><a href="#">Blockquote Post</a></li>
                        <li><a href="#">UL and OL Post</a></li>
                    </ul>
                </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Footer Widget 3</h4>         
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#">WordPress.org</a></li>                        
                </ul>
            </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">Footer Widget 4</h4>
              <form action="http://danvswild.com/brew/" method="get" class="form-inline">
                <fieldset>
                    <div class="input-group">
                      <input type="text" name="s" id="search" placeholder="Search" value="" class="form-control" />
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Search</button>
                      </span>
                    </div>
                </fieldset>
            </form>

                </div>            
                </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-12 copyright">
              <center>&copy; 2015 Rizky Bayu Oktavian</center>
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer> <!-- end footer -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/jquery.js')}}"></script>

</body>

</html>
