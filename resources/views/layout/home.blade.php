<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>I.T.A.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('itaDesign') }}/img/logo/logo.png">
		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/bootstrap.min.css">
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/font-awesome.min.css">
		<!-- Owl Carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/owl.carousel.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/jquery-ui.css">
		<!-- Meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/meanmenu.min.css">
		<!-- Animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/animate.css">
		<!-- Animated Headlines CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/animated-headlines.css">
        <!-- Nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('itaDesign') }}/lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="{{ asset('itaDesign') }}/lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/material-design-iconic-font.min.css">
		<!-- Slick CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/slick.css">
		<!-- Video CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/jquery.mb.YTPlayer.css">
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/style.css">
		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/color.css">
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('itaDesign') }}/css/responsive.css">
		<!-- Modernizr JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <!--Main Wrapper Start-->
      <div class="as-mainwrapper">
          <!--Bg White Start-->
          <div class="bg-white">
              @include('layout.header')

              @yield('content')

              <!--Footer Widget Area Start-->
              @include('layout.footer')
          </div>
          <!--End of Bg White-->
      </div>
      <!--End of Main Wrapper Area-->

		<!-- jquery
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/bootstrap.min.js"></script>
        <!-- nivo slider js
		============================================ -->
		<script src="{{ asset('itaDesign') }}/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="{{ asset('itaDesign') }}/lib/nivo-slider/home.js" type="text/javascript"></script>
		<!-- meanmenu JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/jquery.meanmenu.js"></script>
		<!-- wow JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/wow.min.js"></script>
		<!-- owl.carousel JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/jquery.scrollUp.min.js"></script>
		<!-- Waypoints JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/waypoints.min.js"></script>
		<!-- Counterup JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/jquery.counterup.min.js"></script>
		<!-- Slick JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/slick.min.js"></script>
		<!-- Animated Headlines JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/animated-headlines.js"></script>
		<!-- Textilate JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/textilate.js"></script>
		<!-- Lettering JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/lettering.js"></script>
		<!-- Video Player JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/jquery.mb.YTPlayer.js"></script>
		<!-- AJax Mail JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/ajax-mail.js"></script>
		<!-- plugins JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/plugins.js"></script>
		<!-- main JS
		============================================ -->
        <script src="{{ asset('itaDesign') }}/js/main.js"></script>
    </body>
</html>
