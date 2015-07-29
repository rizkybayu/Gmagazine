@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Kategori</h2>   
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
                                    {!! Form::open(array('url' => 'tambah_kategori', 'method' => 'POST' ,'files' => true)) !!}
                                    <!-- <form role="form"> -->

                                        <div class="form-group @if ($errors->has('kategori')) has-error @endif">
                                            {!! Form::label('Tambah Kategori :') !!}
                                            {!! Form::text('kategori',null,['class'=>'form-control','placeholder'=>'Masukan Judul','maxlength'=>'40']) !!}
                                            @if ($errors->has('kategori')) <p class="help-block">{{ $errors->first('kategori') }}</p> @endif
                                            <!-- <label>Masukan Judul</label>
                                            <input class="form-control"> -->
                                            <!-- <p class="help-block"></p> -->
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
