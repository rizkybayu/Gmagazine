@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Ubah Artikel</h2>   
                        <h5>Welcome {{ Auth::user()->name }}</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Artikel
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
                                    {!! Form::open(['url' => ['ubah', $edit], 'method' => 'PUT']) !!}
                                    <!-- <form role="form"> -->

                                        <div class="form-group">
                                            {!! Form::label('Judul :') !!}
                                            {!! Form::text('judul',$edit->Judul,['class'=>'form-control','placeholder'=>'Masukan Judul','maxlength'=>'40']) !!}
                                            
                                            <!-- <label>Masukan Judul</label>
                                            <input class="form-control"> -->
                                            <!-- <p class="help-block"></p> -->
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('Isi Artikel :') !!}
                                            {!! Form::textarea('isi',$edit->isi, ['class'=>'ckeditor','row'=>'3','placeholder'=>'Masukan Isi Artikel']) !!}
                                           
                                            <!-- <label>Isi Artikel</label>
                                            <textarea class="form-control" rows="3"></textarea> -->
                                        </div>

                                        <div class="form-group ">
                                            {!! Form::label('Tags :') !!}
                                            {!! Form::text('tag',$edit->tag,['class'=>'form-control','placeholder'=>'Ex : #RPG #ADVENTURE']) !!}
                                            
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
