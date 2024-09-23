<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Portofolio | Andin</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="logo-svt" sizes="180x180" href={{ asset('style/assets/img/favicons/logo-svt.png') }}>
    <link rel="logo-svt" type="image/png" sizes="32x32" href={{ asset('style/assets/img/favicons/logo-svt.png') }}>
    <link rel="logo-svt" type="image/png" sizes="16x16" href={{ asset('style/assets/img/favicons/logo-svt.png') }}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('style/assets/img/favicons/favicon.ico') }}>
    <link rel="manifest" href={{ asset('style/assets/img/favicons/manifest.json') }}>
    <meta name="msapplication-TileImage" content={{ asset('style/assets/img/favicons/mstile-150x150.png') }}>
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="stylesheet" href={{ asset('style/vendors/swiper/swiper-bundle.min.css')}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
    <link href={{ asset('style/assets/css/theme.min.css') }} rel="stylesheet" id="style-default">
    <link href={{ asset('style/assets/css/user-rtl.min.css') }} rel="stylesheet" id="user-style-rtl">
    <link href={{ asset('style/assets/css/user.min.css') }} rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-md fixed-top bg-slate-500" id="navbar" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
        <div class="container-fluid px-0">
          <a class="navbar-brand fw-bold d-none d-md-block" href="/home">Portofolio</a>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbar-content" data-navbar-collapse="data-navbar-collapse">
            <ul class="navbar-nav gap-md-2 gap-lg-3 pt-x1 pb-1 pt-md-0 pb-md-0 d-flex justify-content-center" data-navbar-nav="data-navbar-nav">
              <li class="nav-item"> <a class="nav-link lh-xl" href="/">Home</a></li>
              <li class="nav-item"> <a class="nav-link lh-xl" href="/about">About</a></li>
              <li class="nav-item"> <a class="nav-link lh-xl" href="/project">Projects</a></li>
              <li class="nav-item"> <a class="nav-link lh-xl" href="/contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>

        @yield('content')
        
        @include('layout.footer')

    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src={{  asset('style/vendors/popper/popper.min.js')}}></script>
    <script src={{  asset('style/vendors/bootstrap/bootstrap.min.js')}}></script>
    <script src={{  asset('style/vendors/is/is.min.js')}}></script>
    <script src={{  asset('style/vendors/countup/countUp.umd.js')}}></script>
    <script src={{  asset('style/vendors/swiper/swiper-bundle.min.js')}}></script>
    <script src={{  asset('style/vendors/lodash/lodash.min.js')}}></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src={{ asset('style/assets/js/theme.js')}}></script>
  </body>

</html>