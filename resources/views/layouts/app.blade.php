<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colossus Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{asset("image/favicon.png")}}" rel="icon">
    <link href="{{asset("image/apple-touch-icon.png")}}"  rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
@include('inc.navbar')
 @include('inc.intro')
@include('inc.games')
@include('inc.gallery')
@include('inc.sponsor')
@include('inc.duk')
@include('inc.footer')

@yield('content')
<!-- Template Main Javascript File -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
<script src="{{asset("/js/app.js")}}"></script>



</body>
</html>