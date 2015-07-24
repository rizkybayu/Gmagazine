<!DOCTYPE html>
<html lang="en">

<head>
    <meta content='FB Profile ID' property='fb:admins'/>
    <meta content='App ID' property='fb:app_id'/>
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
            <!-- FAV ICON -->
    <link rel="SHORTCUT ICON" href="{{asset('images/fav.png')}}" type="image/x-icon"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        #share-buttons img {
        width: 35px;
        padding: 5px;
        border: 0;
        box-shadow: 0;
        display: inline;
        }
    </style>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}" />
<script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>
<!-- End WOWSlider.com HEAD section -->

<script type="text/javascript">
    //<![CDATA[
    $(window).bind("load resize", function(){
      var url = location.protocol+'//'+location.host+location.pathname;
      var containercm_width = $('#container-commentfb').width();  
        $('#container-commentfb').html('<div class="fb-comments" ' +
        'data-href="'+url+'"' +
        ' width="' + containercm_width + '" data-num-posts="14"></div>');
        FB.XFBML.parse( );  
    });
    //]]>
    </script>
</head>

<body>
<!-- for like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- batas -->

<!-- for comment -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.4&appId=702058006594721";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '954886544550509',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

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
            <form action="{{ url('/cari') }}" method="POST" class="navbar-form" role="search" name="carii" onSubmit="return cekFile()">
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
              <div class="fb-like" data-href="{{asset('/artikel/'.$artikel2->id)}}" data-width="100%" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
              <hr>
          </div><!-- judul -->

        <div class="isi-gambar">
          <img src="{{ asset('images/news')}}/{{'cover'.$artikel2->id}}.jpg" class="img-responsive">
        </div>

        <div class="isi-artikel">
            <p>
            {!! $artikel2->isi !!}
            </p>
        </div>

        <div class="tags">
        <h3>Tags : </h3> <p>{{$artikel2->tag}}</p>
        </div>
        <!-- share button -->
            <div class="col-sm-10 col-xs-12 col-md-10">
      <div id="share-buttons">
      <h4>Bagikan Ini Di :</h4>
          <!-- Email -->
          <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 {{asset('/artikel/'.$artikel2->id)}}">
              <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
          </a>
       
          <!-- Facebook -->
          <a href="http://www.facebook.com/sharer.php?u={{asset('/artikel/'.$artikel2->id)}}" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
          </a>
          
          <!-- Google+ -->
          <a href="https://plus.google.com/share?url={{asset('/artikel/'.$artikel2->id)}}" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
          </a>
          
          <!-- Twitter -->
          <a href="https://twitter.com/share?url={{asset('/artikel/'.$artikel2->id)}}" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
          </a>

      </div>
    </div>
        <div class="col-sm-12 col-xs-12">
        <h3>Tambahkan Komentar !</h3>
        <?php  // {{asset('/artikel/'.$artikel2->id)}} ?>
        <div class="fb-comments" data-href="{{asset('/artikel/'.$artikel2->id)}}" data-width="100%" data-numposts="14"></div>
        </div>
        </div>

    <!--sidebar-->
        <div class="col-sm-3 col-xs-12">
        <div class="kanan">ADVERTISMENT</div><br>
        <img src="{{asset('/images/ads/ad.jpg')}}" class="img-responsive"/>
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
                        <li><a href="www.instagram.com">Instagram</a></li>
                        <li><a href="www.twitter.com">Twitter</a></li>
                        <li><a href="www.facebook.com">Facebook</a></li>
                        <li><a href="www.github.com">Github</a></li>                        
                    </ul>
                </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
                <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">     
                    <h4 class="widgettitle">About me</h4>        
                    <ul>
                        <li>Student on RPL SMKN 2 Cimahi</li>
                        <li>Designer website</li>
                        <li>Learning by doing</a></li>
                    </ul>
                </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Footer Widget 3</h4>         
                <ul>
                    <li><a href="www.twitter.com" target="_blank">Youtube</a></li>
                    <li><a href="www.twitter.com">Entries <abbr title="Really Simple Syndication">Twitter</abbr></a></li>
                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#">laravel.com</a></li>                        
                </ul>
            </div>            
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">Cari Disini </h4>
              <form action="{{ url('/cari') }}" method="POST" name="carii2" class="navbar-form" role="search" onsubmit="return cekFile2()">
                <fieldset>
                    <div class="input-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" name="cari1" id="search" placeholder="Cari" value="" class="form-control" />
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Cari</button>
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

<script>
function cekFile() {
   var cek = document.forms['carii']['cari1'].value;
     if(cek==null || cek=="")
     {
       alert("Data harus di isi !!!");
       return false;
     }
}
function cekFile2() {
   var cek = document.forms['carii2']['cari1'].value;
     if(cek==null || cek=="")
     {
       alert("Data harus di isi !!!");
       return false;
     }
}
</script>
</body>

</html>
