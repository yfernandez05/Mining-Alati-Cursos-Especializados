<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#457b80"/>   
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    
    <title>Mining Alati | @yield('title')</title>

  <!-- Google Tag Manager HEAD-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KV78CTWG');</script>
<!-- End Google Tag Manager -->

    @yield('css')

    @yield('head')

  </head>
  <body>   
<!-- Google Tag Manager (noscript) BODY-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV78CTWG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    {{-- @include('layouts.partials.header') --}}

    @include('layouts.partials.secondary_header')
    
    @yield('content')    

    @include('layouts.partials.utils.modalterminos')

    @include('layouts.partials.utils.floatingsocial')
    
    @include('layouts.partials.footer')
    @include('layouts.partials.utils.backtop')
    @include('layouts.partials.utils.loading')
    

    <script src="{{asset('js/app.js')}}" ></script>
  </body>
</html>