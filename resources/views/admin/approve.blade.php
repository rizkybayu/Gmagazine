@include('admin.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Transaksi Approved</h2>   
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
                                            <th width="20%"><center>Nama Pembeli</center></th>
                                            <th width="10%"><center>Email</center></th>
                                            <th width="15%"><center>Tanggal Beli</center></th>
                                            <th width="10%"><center>Jumlah Beli</center></th>
                                            <th width="15%"><center>No Hp</center></th>
                                            <th width="15%"><center>Yang Di pesan</center></th>
                                            <th width="15%"><center>Total</center></th>
                                            <th width="7.5%"><center>Status</center></th>
                                            <th width="7.5%"><center>Batal</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $a=1; $tot=0;?>
                                    @foreach($list_transaksi as $transaksi)
                                        <tr class="gradeU">
                                            <td><?php echo $a; ?></td>
                                            <td><center>{{$transaksi->nama_pembeli}}</center></td>
                                            <td><center>{{$transaksi->email}}</center></td>
                                            <td><center>{{$transaksi->tgl_beli}}</center></td>
                                            <td><center>{{$transaksi->jumlah_beli}}</center></td>
                                            <td><center>{{$transaksi->no_hp}}</center></td>
                                            <td class="center"><center>{{$transaksi->game ? $transaksi->game->nama_game : '' }}</center></td>
                                            <!-- <td><center>{{ $transaksi->game ? $transaksi->jumlah_beli * $transaksi->game->harga : '' }}</center></td> -->
                                            <?php
                                                $totrans = $transaksi['jumlah_beli'] * $transaksi['game']['harga'];
                                                $tot = $tot + $totrans; 
                                            ?>
                                            <td><center><?php echo 'Rp. ' . number_format( $totrans, 0 , '' , '.' )?></center></td>
                                            <td class="center"><a href="{{ url('/GantiStatusApp',$transaksi->id) }}"><button type="button" class="btn btn-primary">Approved</button></a></a></td>
                                            <td><center><a href="{{ url('/cancel',$transaksi->id) }}"><i class="fa fa-times fa-2x"></i></a></center></td>
                                        </tr>
                                    <?php $a++;?>
                                    @endforeach
                                        <tr>
                                            <td colspan="10"><b>TOTAL :</b>&nbsp;&nbsp;&nbsp;<?php echo 'Rp. ' . number_format( $tot , 0 , '' , '.' )?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <center>
                            <nav style="clear:both">
                                <div class="pagination">
                                {!! str_replace('/?', '?', $list_transaksi->render()) !!}
                                </div>
                            </nav>
                        </center>
                        <a href="{{ url('/pdfTransApp') }}"><button type="button" class="btn btn-primary">Export Ke PDF</button></a> <a href="{{ url('/excelTransApp') }}"><button type="button" class="btn btn-primary">Export ke Excel</button></a>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                </div>
            </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('admin/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('admin/js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{asset('admin/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('admin/js/morris/morris.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <!--ck editor -->
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('ckeditor/style.js')}}"></script>
    
   
</body>
</html>
