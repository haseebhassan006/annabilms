<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="https://netteria.net/myscript/jquery/html5videopopup/css/videopopup.css" rel="stylesheet" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href=" {{ assets('/frontend/assets/css/style.css') }} " rel="stylesheet" >
        <link href=" {{ assets('/frontend/assets/slick-slider/slick/slick-theme.css') }} " rel="stylesheet">
        <link href=" {{assets('/frontend/assets/slick-slider/slick/slick.css')}} " rel="stylesheet">
        @stack('custom_styles')
        <title>Al Nabi</title>
      </head>
  <body>
    <!-- HEADER -->
    @include(getTemplate().'.includes.top_nav')
     @include('frontend.partials.header')
    <!-- HEADER -->

    <!-- Main Content -->
    <main class="main-content">
      @yield('content')
    </main>
    <!-- Main Content -->

    <!-- footer-section -->
    @include('frontend.partials.footer')
    <!-- footer-section -->

    <!-- Scripts -->
    @stack('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>
    <script src="{{ assets('/frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
    <script src=" {{ assets('/frontend/assets/js/custom.js') }} "></script>
  </body>
</html>
