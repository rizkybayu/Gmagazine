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
                                            <b>Rp.<div id="terbilang"></div></b>{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>'Masukan Harga','maxlength'=>'40','onkeyup'=>'terbilang()','id'=>'nominal']) !!}
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
<script charset="utf-8" type="text/javascript">
function terbilang(){
    var bilangan=document.getElementById("nominal").value;
    var kalimat="";
    var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
    var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
    var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
    var panjang_bilangan = bilangan.length;
     
    /* pengujian panjang bilangan */
    if(panjang_bilangan > 15){
        kalimat = "Diluar Batas";
    }else{
        /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
        for(i = 1; i <= panjang_bilangan; i++) {
            angka[i] = bilangan.substr(-(i),1);
        }
         
        var i = 1;
        var j = 0;
         
        /* mulai proses iterasi terhadap array angka */
        while(i <= panjang_bilangan){
            subkalimat = "";
            kata1 = "";
            kata2 = "";
            kata3 = "";
             
            /* untuk Ratusan */
            if(angka[i+2] != "0"){
                if(angka[i+2] == "1"){
                    kata1 = "Seratus";
                }else{
                    kata1 = kata[angka[i+2]] + " Ratus";
                }
            }
             
            /* untuk Puluhan atau Belasan */
            if(angka[i+1] != "0"){
                if(angka[i+1] == "1"){
                    if(angka[i] == "0"){
                        kata2 = "Sepuluh";
                    }else if(angka[i] == "1"){
                        kata2 = "Sebelas";
                    }else{
                        kata2 = kata[angka[i]] + " Belas";
                    }
                }else{
                    kata2 = kata[angka[i+1]] + " Puluh";
                }
            }
             
            /* untuk Satuan */
            if (angka[i] != "0"){
                if (angka[i+1] != "1"){
                    kata3 = kata[angka[i]];
                }
            }
             
            /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
            if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
                subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
            }
             
            /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
            kalimat = subkalimat + kalimat;
            i = i + 3;
            j = j + 1;
        }
         
        /* mengganti Satu Ribu jadi Seribu jika diperlukan */
        if ((angka[5] == "0") && (angka[6] == "0")){
            kalimat = kalimat.replace("Satu Ribu","Seribu");
        }
    }
    document.getElementById("terbilang").innerHTML=kalimat;
}
</script>
@include('admin.footer')
