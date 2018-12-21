<!DOCTYPE html>
<html lang="zxx">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
      @yield('meta-tags')
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
      <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">

      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <title>Mafalda Pinto Leite</title>
      @stack('styles')
    </head>
    <body>


   @if(Request::is('login') || Request::is('personal-info') || Request::is('history') || Request::is('vouchers') || Request::is('myworkshops'))
   @include('front.layout.nav.nav-user')
   @else
   @include('front.layout.nav.nav')
   @endif

    <div id="body-content">
      @yield('content')
    </div>

    @include('front.layout.footer')


    <!-- JavaScripts -->
    <script src="{{url('/')}}/front/js/app.js"></script>
    <script src="{{url('/')}}/front/js/actions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    @stack('scripts')


</body>
</html>
