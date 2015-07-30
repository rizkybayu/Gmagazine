@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Games</h2>   
                        <h5>Selamat Datang {{ Auth::user()->name }}</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GMagazine
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                <!-- NOTIFIKASI -->
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_message') }}</div>
                                    @endif
                                <!-- BATAS NOTIFIKASI -->
                                    {!! Form::open(array('url' => 'tambah_game', 'method' => 'POST' ,'files' => true)) !!}
                                    <!-- <form role="form"> -->

                                        <div class="form-group @if ($errors->has('nama_game')) has-error @endif">
                                            {!! Form::label('Nama Games :') !!}
                                            {!! Form::text('nama_game',null,['class'=>'form-control','placeholder'=>'Masukan Nama Game','maxlength'=>'40']) !!}
                                            @if ($errors->has('nama_game')) <p class="help-block">{{ $errors->first('nama_game') }}</p> @endif
                                        </div>
                                        <div class="form-group @if ($errors->has('image')) has-error @endif">
                                            {!! Form::label('Masukan Foto Artikel :') !!}<i>*hanya .jpg</i>
                                            {!! Form::file('image',['class'=>null]) !!}
                                             @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
                                            <!-- <label>Masukan Gambar Cover</label>
                                            <input type="file" --> 
                                        </div>
                                        <div class="form-group @if ($errors->has('stok')) has-error @endif">
                                            {!! Form::label('Stok tersedia :') !!}
                                            {!! Form::text('stok',null,['class'=>'form-control','placeholder'=>'Masukan Jumlah Stok','maxlength'=>'40']) !!}
                                            @if ($errors->has('stok')) <p class="help-block">{{ $errors->first('stok') }}</p> @endif
                                        </div>
                                        <div class="form-group @if ($errors->has('harga')) has-error @endif">
                                            {!! Form::label('Harga :') !!}
                                            Rp.{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>'Masukan Harga','maxlength'=>'40']) !!}
                                            @if ($errors->has('harga')) <p class="help-block">{{ $errors->first('harga') }}</p> @endif
                                        </div>                                        
                                        <div class="col-sm-3" style="clear:both">
                                        {!!Form::submit('Submit!',['class' => 'btn btn-default','name'=>'simpan']) !!}
                                        <!-- <button type="submit" class="btn btn-default">Simpan</button> -->
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>

                                    <!-- </form> -->
                                    {!! Form::close() !!}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
@include('admin.footer')
