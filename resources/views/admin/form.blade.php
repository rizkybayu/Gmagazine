@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Artikel</h2>   
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
                                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                                    @endif
                                <!-- BATAS NOTIFIKASI -->
                                    {!! Form::open(array('url' => '/store', 'method' => 'POST' ,'files' => true)) !!}
                                    <!-- <form role="form"> -->

                                        <div class="form-group @if ($errors->has('judul')) has-error @endif">
                                            {!! Form::label('Judul :') !!}
                                            {!! Form::text('judul',null,['class'=>'form-control','placeholder'=>'Masukan Judul','maxlength'=>'40']) !!}
                                            @if ($errors->has('judul')) <p class="help-block">{{ $errors->first('judul') }}</p> @endif
                                            <!-- <label>Masukan Judul</label>
                                            <input class="form-control"> -->
                                            <!-- <p class="help-block"></p> -->
                                        </div>

                                        <div class="form-group @if ($errors->has('image')) has-error @endif">
                                            {!! Form::label('Masukan Foto Artikel :') !!}<i>*hanya .jpg</i>
                                            {!! Form::file('image',['class'=>null]) !!}
                                             @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
                                            <!-- <label>Masukan Gambar Cover</label>
                                            <input type="file" --> 
                                        </div>

                                        <div class="form-group @if ($errors->has('isi')) has-error @endif">
                                            {!! Form::label('Isi Artikel :') !!}
                                            {!! Form::textarea('isi',null, ['class'=>'ckeditor','row'=>'3','placeholder'=>'Masukan Isi Artikel']) !!}
                                            @if ($errors->has('isi')) <p class="help-block">{{ $errors->first('isi') }}</p> @endif
                                            <!-- <label>Isi Artikel</label>
                                            <textarea class="form-control" rows="3"></textarea> -->
                                        </div>

                                        <div class="form-group @if ($errors->has('tag')) has-error @endif">
                                            {!! Form::label('Tags :') !!}
                                            {!! Form::text('tag',null,['class'=>'form-control','placeholder'=>'Ex : #RPG #ADVENTURE']) !!}
                                            @if ($errors->has('tag')) <p class="help-block">{{ $errors->first('tag') }}</p> @endif
                                        </div>

                                        <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-group">
                                            {!! Form::label('Kategori :') !!}
                                            {!! Form::select('id_kategori',$kategori, null, ['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                            <!-- <select class="form-control">
                                                <option>Berita</option>
                                                <option>Games</option>
                                                <option>Artikel</option>
                                                <option>Harga</option>
                                            </select> -->
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
