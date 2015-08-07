@include('admin.header')
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Lihat Report</h2>   
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
                                    {!! Form::open(array('url' => 'report', 'method' => 'POST' ,'files' => true)) !!}
                                    <!-- <form role="form"> -->
                                        <div class="form-group @if ($errors->has('dari_tanggal')) has-error @endif">
                                            {!! Form::label('Dari Tanggal :') !!}
                                            {!! Form::text('dari_tanggal',null,['class'=>'form-control','placeholder'=>'Awal Tanggal','maxlength'=>'40','id'=>'dp1' ]) !!}
                                            @if ($errors->has('dari_tanggal')) <p class="help-block">{{ $errors->first('dari_tanggal') }}</p> @endif
                                        </div>
                                        <div class="form-group @if ($errors->has('sampai_tanggal')) has-error @endif">
                                            {!! Form::label('Sampai Tanggal :') !!}
                                            {!! Form::text('sampai_tanggal',null,['class'=>'form-control','placeholder'=>'Akhir Tanggal','maxlength'=>'40','id'=>'dp2']) !!}
                                            @if ($errors->has('sampai_tanggal')) <p class="help-block">{{ $errors->first('sampai_tanggal') }}</p> @endif
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
<script>
            $(function () {
                window.prettyPrint && prettyPrint();
                $('#dp1').fdatepicker({
                    format: 'yyyy-mm-dd',
                    disableDblClickSelection: true
                });
                $('#dp2').fdatepicker({
                    format: 'yyyy-mm-dd',
                    disableDblClickSelection: true
                });
                $('#dp3').fdatepicker();
                $('#dp3').fdatepicker();
                $('#dp-margin').fdatepicker();
                $('#dpMonths').fdatepicker();
                var startDate = new Date(2012, 1, 20);
                var endDate = new Date(2012, 1, 25);
                $('#dp4').fdatepicker()
                    .on('changeDate', function (ev) {
                    if (ev.date.valueOf() > endDate.valueOf()) {
                        $('#alert').show().find('strong').text('The start date can not be greater then the end date');
                    } else {
                        $('#alert').hide();
                        startDate = new Date(ev.date);
                        $('#startDate').text($('#dp4').data('date'));
                    }
                    $('#dp4').fdatepicker('hide');
                });
                $('#dp5').fdatepicker()
                    .on('changeDate', function (ev) {
                    if (ev.date.valueOf() < startDate.valueOf()) {
                        $('#alert').show().find('strong').text('The end date can not be less then the start date');
                    } else {
                        $('#alert').hide();
                        endDate = new Date(ev.date);
                        $('#endDate').text($('#dp5').data('date'));
                    }
                    $('#dp5').fdatepicker('hide');
                });
                // implementation of disabled form fields
                var nowTemp = new Date();
                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                var checkin = $('#dpd1').fdatepicker({
                    onRender: function (date) {
                        return date.valueOf() < now.valueOf() ? 'disabled' : '';
                    }
                }).on('changeDate', function (ev) {
                    if (ev.date.valueOf() > checkout.date.valueOf()) {
                        var newDate = new Date(ev.date)
                        newDate.setDate(newDate.getDate() + 1);
                        checkout.update(newDate);
                    }
                    checkin.hide();
                    $('#dpd2')[0].focus();
                }).data('datepicker');
                var checkout = $('#dpd2').fdatepicker({
                    onRender: function (date) {
                        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                    }
                }).on('changeDate', function (ev) {
                    checkout.hide();
                }).data('datepicker');
            });
        </script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30989810-2']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
@include('admin.footer')
