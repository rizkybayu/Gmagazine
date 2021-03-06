@include('admin.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Kategori</h2>   
                        <h5>Selamat Datang {{ Auth::user()->name }}</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             GMagzine
                        </div>
                        <div class="panel-body">
                        <!-- NOTIFIKASI -->
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_message') }}</div>
                                    @endif
                        <!-- BATAS NOTIFIKASI -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2.5%">No</th>
                                            <th width="20%"><center>Kategori</center></th>
                                            <th width="7.5%"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $a=1;?>
                                    @foreach($list_kategori as $kateg)
                                        <tr class="gradeU">
                                            <td><?php echo $a; ?></td>
                                            <td>{{$kateg->kategori}}</td>
                                            <td class="center"><center><a href="{{url('/edit_kateg',$kateg->id)}}"><i class="fa fa-pencil-square-o"></i></a> <a href="{{ url('/hapus_kateg',$kateg->id) }}"><i class="fa fa-trash"></i></a></center></td>
                                        </tr>
                                    <?php $a++;?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <center>
                            <nav style="clear:both">
                                <div class="pagination">
                                {!! str_replace('/?', '?', $list_kategori->render()) !!}
                                </div>
                            </nav>
                        </center>
                        
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                </div>
            </div>

@include('admin.footer')
