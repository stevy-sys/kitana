<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kitana-develloper</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  {{--<div id="preloader"></div>--}}

  <!-- Start Menu Area -->
  @include('partials/_menu')
  <!-- End Menu Area -->

  @yield('content')

  {{--
  <!-- Start slider couverture Area -->
  @include('partials/_couverture')
  <!-- End slider couverture area -->


  <!-- start about area  -->
  @include('partials/_about')
  <!-- end about area  -->


  <!-- start service area  -->
  @include('partials/_service')
  <!-- end-service-area start -->
  

  <!-- start competence-area start -->
  @include('partials/_competence')
  <!-- end skill area start -->

  <!-- FAQ start area start -->
  @include('partials/_faq')
  <!-- FAQ end Area -->

  <!-- abonne satrt Area -->
  @include('partials/_abonne')
  <!-- abonne end team Area -->

  <!-- team satrt Area -->
  @include('partials/_team')
  <!-- team end team Area -->

  <!-- publicite satrt Area -->
  @include('partials/_publicite')
  <!-- publicite end team Area -->

  <!-- portfolio satrt Area -->
  @include('partials/_portfolio')
  <!-- portfolio end team Area -->

  <!-- price satrt Area -->
  @include('partials/_price')
  <!-- price end team Area -->
  
  <!-- testimonial satrt Area -->
  @include('partials/_testimonial')
  <!-- testimonial end team Area -->

  <!-- blog satrt Area -->
  @include('partials/_blog')
  <!-- blog end team Area -->
  
  <!-- subscribe satrt Area -->
  @include('partials/_subscribe')
  <!-- subscribe end team Area -->

  <!-- contact satrt Area -->
  @include('partials/_contact')
  <!-- contact end team Area -->

  --}}
  <!-- Start Footer Area -->
  @include('partials/_footer')
  <!-- End Footer Area -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/app.js"></script>
</body>

</html>
