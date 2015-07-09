@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Artikel</h2>   
                        <h5>Welcome Rizky Bayu</h5>
                       
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Masukan Judul</label>
                                            <input class="form-control">
                                            <!-- <p class="help-block"></p> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Masukan Gambar Cover</label>
                                            <input type="file">
                                        </div>

                                        <div class="form-group">
                                            <label>Isi Artikel</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control">
                                                <option>Berita</option>
                                                <option>Games</option>
                                                <option>Artikel</option>
                                                <option>Harga</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>

                                    </form>
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
