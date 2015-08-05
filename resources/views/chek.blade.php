    <!--header -->
@include('header')
    <!--end header-->
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-xs-12">
    <h1>GMagazine Shop</h1>
    <p>Tanggal : {{ $tgl_t }}</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="20%"><center>Nama Pembeli</center></th>
                                            <th width="10%"><center>Email</center></th>
                                            <th width="15%"><center>Nama Games</center></th>
                                            <th width="10%"><center>Jumlah Beli</center></th>
                                            <th width="15%"><center>No Hp</center></th>
                                            <!-- <th width="15%"><center>ex</center></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr class="gradeU">
                                            <td><center>{{ $nama_t }}</center></td>
                                            <td><center>{{ $email_t }}</center></td>
                                            <td><center>{{ $ngame_t }}</center></td>
                                            <td><center>{{ $jumbel_t }}</center></td>
                                            <td><center>{{ $no_t }}</center></td>
                                        </tr>
                                    
                                        <tr>
                                            <td colspan="5"><b>TOTAL :</b>&nbsp;&nbsp;&nbsp;<?php echo 'Rp. ' . number_format( $total , 0 , '' , '.' )?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
    <br><a href="#" id="not-print" onclick="window.print(); return false"><button class="btn btn-primary">Print</button></a> <a href="{{ url('/beli') }}" id="not-print"><button class="btn btn-primary">Kembali</button></a>
    <div id="not-print">
    <br><h4>
    <center>Silahkan Mentransfer sebesar <b><?php echo 'Rp. ' . number_format( $total , 0 , '' , '.' )?></b> Ke no rekening yang telah di sediakan</center><br>
    <center>Salam Hangat Admin Gmagazine enjoy gaming :)</center></h4>
    </div></div>
    </div>    
</div>  