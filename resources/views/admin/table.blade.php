@include('admin.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Artikel</h2>   
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
                                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                                    @endif
                        <!-- BATAS NOTIFIKASI -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2.5%">No</th>
                                            <th width="20%"><center>Judul</center></th>
                                            <th><div style="width:40px; overflow:hidden"><center>Isi</center></div></th>
                                            <th width="15%"><center>Tanggal Buat</center></th>
                                            <th width="15%"><center>Kategori</center></th>
                                            <th width="7.5%"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $a=1;?>
                                    @foreach($list_game as $game)
                                        <tr class="gradeU">
                                            <td><?php echo $a; ?></td>
                                            <td>{{$game->Judul}}</td>
                                            <td><div style="height:40px; overflow:hidden">{{$game->isi}}</div></td>
                                            <td><!-- <div style="height:40px; overflow:hidden"> --><center>{{$game->tgl_buat}}</center></div></td>
                                            <td class="center">{{$game->kategori}}</td>
                                            <td class="center"><center><a href="{{url('/edit',$game->id)}}"><i class="fa fa-pencil-square-o"></i></a> <a href="{{ url('/hapus',$game->id) }}"><i class="fa fa-trash"></i></a></center></td>
                                        </tr>
                                    <?php $a++;?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <center>
                            <nav style="clear:both">
                                <div class="pagination">
                                {!! str_replace('/?', '?', $list_game->render()) !!}
                                </div>
                            </nav>
                        </center>
                        <a href="{{ url('/pdf') }}"><button type="button" class="btn btn-primary">Export Ke PDF</button></a> <a href="{{ url('/excel') }}"><button type="button" class="btn btn-primary">Export ke Excel</button></a>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                </div>
            </div>

@include('admin.footer')
