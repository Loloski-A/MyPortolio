<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===== UNICONS =====-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!--===== BOXICONS =====-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--===== SWIPER CSS =====-->
    <link rel="stylesheet" href="{{url('public/assets/css/swiper-bundle.min.css')}}">

    <!--===== MAIN CSS =====-->
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
    <title>Personal Portfolio Website - Loloski</title>
</head>
<body>



      @include('layouts._sidebar')

      @yield('content')




<!--==== MIXITUP FILTER =====-->
<script src="{{url('public/assets/js/mixitup.min.js')}}"></script>

<!--====== SWIPER JS ======-->
<script src="{{url('public/assets/js/swiper-bundle.min.js')}}"></script>

<!--===== MAIN JS =====-->
<script src="{{url('public/assets/js/main.js')}}"></script>
</body>
</html>
