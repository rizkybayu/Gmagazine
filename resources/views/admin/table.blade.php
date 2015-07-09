﻿@include('admin.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Artikel</h2>   
                        <h5>Welcome Rizky Bayu</h5>
                       
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2.5%">No</th>
                                            <th width="15%">Judul</th>
                                            <th width="25%">Lokasi Cover</th>
                                            <th width="25%">Isi</th>
                                            <th width="20%">Kategori</th>
                                            <th width="7.5%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $a=1;?>
                                    @foreach($list_game as $game)
                                        <tr class="gradeU">
                                            <td><?php echo $a; ?></td>
                                            <td>{{$game->Judul}}</td>
                                            <td>{{$game->foto}}</td>
                                            <td><div style="height:40px; overflow:hidden">{{$game->isi}}</div></td>
                                            <td class="center">{{$game->kategori}}</td>
                                            <td class="center">-</td>
                                        </tr>
                                    <?php $a++;?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <center>
                            <nav style="clear:both">
                                <div class="pagination">
                                {!!$list_game->render()!!}
                                </div>
                            </nav>
                        </center>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                </div>
            </div>

@include('admin.footer')
