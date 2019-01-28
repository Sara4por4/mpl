<!DOCTYPE html>
<html lang="zxx">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
      @yield('meta-tags')
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
      <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
      <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
      <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
      <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
      <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
      <meta name="application-name" content="&nbsp;"/>
      <meta name="msapplication-TileColor" content="#FFFFFF" />
      <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
      <meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
      <meta name="msapplication-square150x150logo" content="favicon/mstile-150x150.png" />
      <meta name="msapplication-wide310x150logo" content="favicon/mstile-310x150.png" />
      <meta name="msapplication-square310x310logo" content="favicon/mstile-310x310.png" />

      <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
      <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">
      <!-- Magnific Popup core CSS file -->
      <link rel="stylesheet" href="{{url('/front/plugins/magnific-popup/magnific-popup.css')}}">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <title>PortoHost</title>
      @stack('styles')
    </head>
    <body>

   @if(Request::is('/'))
       @include('front.layout.nav.nav-homepage')
   @else
       @include('front.layout.nav.nav')
   @endif

   @yield('content')

    @include('front.layout.footer')


    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{url('/')}}/front/js/app.js"></script>
    <script src="{{url('/')}}/front/js/actions.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{url('/')}}/front/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    @stack('scripts')


</body>
</html>
