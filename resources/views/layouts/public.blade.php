<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        @if(Route::Is('index')) Bosh sahifa @endif
        @if(Route::Is('about')) Biz haqimizda @endif
        @if(Route::Is('project')) Loyiha @endif
        @if(Route::Is('contact')) Aloqa @endif
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
</head>
<body>
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
            <h1>Texnopark<span>.</span></h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('index')}}" @if(Route::Is('index')) class="active" @endif>Bosh sahifa</a></li>
                <li><a href="{{route('about')}}" @if(Route::Is('about')) class="active" @endif>Biz haqimizda</a></li>
                <li><a href="{{route('project')}}" @if(Route::Is('project')) class="active" @endif>Loyiha</a></li>
                <li><a href="{{route('contact')}}" @if(Route::Is('contact')) class="active" @endif>Bog'lanish</a></li>
            </ul>
        </nav>
    </div>
</header>
@yield('content')
<footer id="footer" class="footer">
    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="footer-info">
                        <h3>Texnopark</h3>
                        <p>
                            Yoshlar texnoparki – yoshlarning intellektual, ilmiy, ijodiy salohiyatini oshirish, tahliliy fikrlash, ilmiy-tadqiqot va innovasion faoliyatga keng jalb etish, «startap» loyihalarini rivojlantirish va ularni amalga oshirish uchun yagona maydon tashkil etish maqsadida barpo etilmoqda
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-3 footer-links">
                    <h4>Umumiy linklar</h4>
                    <ul>
                        <li><a href="#">Bosh sahifa</a></li>
                        <li><a href="#">Biz haqimizda</a></li>
                        <li><a href="#">Loyiha</a></li>
                        <li><a href="#">Bog'lanish</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <div class="footer-info">
                        <h3>Aloqa</h3>
                        <p>
                            <strong>Manzil: </strong>Xorazm viloyati, Urganch tumani, Uchko'prik mahallasi, "Al-Xorazmiy" majmuasi<br>
                            <strong>Phone:</strong> +998977900494<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Unusual Team</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://t.me/sfarruhbek_7">S.Farruhbek</a>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}'"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
