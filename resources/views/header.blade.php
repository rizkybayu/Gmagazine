<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GMag</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/logo-nav.css"')}}' rel="stylesheet">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- FAV ICON -->
    <link rel="SHORTCUT ICON" href="{{asset('images/fav.png')}}" type="image/x-icon"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}" />
<script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>
<!-- End WOWSlider.com HEAD section -->
<script>
function cekFile() {
   var cek = document.forms['carii']['cari1'].value;
     if(cek==null || cek=="")
     {
       alert("Data harus di isi !!!");
       return false;
     }
}
function cekFile2() {
   var cek = document.forms['carii2']['cari1'].value;
     if(cek==null || cek=="")
     {
       alert("Data harus di isi !!!");
       return false;
     }
}
</script>
<style type="text/css">
    @media print
    {
     #not-print { display: none; }
    }
    </style>
</head>

<body>