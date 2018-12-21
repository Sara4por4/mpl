<!DOCTYPE html>
<html lang="zxx">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
      @yield('meta-tags')
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
      <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">

      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <title>Mafalda Pinto Leite</title>
      @stack('styles')
    </head>
    <body>
   </body>

</html>
