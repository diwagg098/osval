<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="{{ asset('js/') }}/app.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/1006bc6174.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
    <title>Osval Basic</title>
</head>
<body>

{{-- 
    <div class="loader-wrapper">
        <span class="loader">
            <img src="{{asset('images/Backup_of_Backup_of_plastic oval.png')}}" width="50%">
            <span class="loader-inner"></span>
        </span>
    </div> --}}


    @yield('home')


    @yield('about')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        });
    </script>


<script>
    AOS.init();
  </script>
</body>
</html>