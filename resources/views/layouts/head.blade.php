<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
{{--    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">--}}
<link rel="apple-touch-icon" href="{{asset('storage/thumbnails/play-1.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/thumbnails/play-1.png')}}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!-- sweetalert -->
<link rel="stylesheet" href="{{asset('plugins/sweet-alert/sweetalert.css')}}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}">


<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@livewireStyles

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,400;1,500;1,700;1,800&display=swap"
    rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/>




@include('layouts.style')

