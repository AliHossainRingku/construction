<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amity</title>
    <meta name="description"
        content="Multipurpose Architect HTML Template,HTML5 &amp; CSS3, Responsive Template, Multipurpose components for easy setup, Free icons used, Pixel Perfect, Clean &amp; Unique Design, Structured SCSS Processor support for better customization, Easy to customize, Portfolio page with filtor">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <link rel="shortcut icon" href="{{ asset('frontend')}}/assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend')}}/assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <main>

            <!-- Header Area Start Here -->
            @include('frontend.includes.header')
            <!-- Header Area End Here -->

            <!-- Slider Area Start Here -->
            <!-- Slider Area End Here -->
                
                <!--Dynamic part start here -->
                @yield('content')
                <!--Dynamic part ends here -->


            <!-- Footer Area Start Here -->
            <!-- @ include('frontend.includes.footer-small') -->
            <!-- Footer Area End Here -->

        
    </main> <!-- main End -->
    <div class="preloader preloaderInit flex-center">
        <div class="dots">
            <div >
                <img class="img-nav-logo" src="{{ asset('frontend')}}/assets/img/logo.png">
            </div>
        </div>
    </div>
    <a href="#" id="goTop" class="btn btn-primary btn-sm">↑</a>
</body>
<!-- Add javaScript files here-->
<script src="{{ asset('frontend')}}/assets/js/core.min.js"></script>
<script src="{{ asset('frontend')}}/assets/js/script.js"></script>

</html>
