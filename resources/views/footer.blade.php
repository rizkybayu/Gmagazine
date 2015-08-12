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
              <div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Other</h4>         
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
              <form action="{{ url('/cari') }}" method="POST" class="navbar-form" role="search" name="carii2" onSubmit="return cekFile2()">
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

</div>            </div> <!-- end widget1 -->

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
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- mousetrap -->
    <script src="{{ asset('js/mousetrap.min.js') }}"></script>
    <script src="{{ asset('js/shortcut.js') }}"></script>

</body>

</html>