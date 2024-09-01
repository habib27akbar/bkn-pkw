<!DOCTYPE html>
	<html lang="en">
	
	<head>
	<meta charset="UTF-8">
	<title>.:: Badan Kepegawaian Negara (BKN RI) ::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	
	<!----------------- Font ---------------------------------------->
	<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;500;600;700;800;900&display=swap"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('new_template/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_template/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_template/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_template/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset('new_template/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('new_template/css/responsive.css') }}">


	

	<?php 
	if(false){
	?>
	<!----------------- CSS ---------------------------------------->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/imp.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/header-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/banner-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/about-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/fact-counter-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/faq-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact-page.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/breadcrumb-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/team-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/partner-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/testimonial-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/services-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/module-css/footer-section.css') }}">
	<link href="{{ asset('assets/css/color/blue.css') }}" id="jssDefault" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<?php }?>
	
	@yield('css')

	
	<!------------------------ Favicon ----------------------------->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" sizes="16x16">
	<!-------------------------------------------------------------------->
    <style>
        .tawk-min-container {
            /* position: fixed; */
            /* width: 60px; */
            /* height: 60px; */
            /* bottom: 10px; */
            right: 100px;
            /* background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100; */
        }
    </style>

	</head>
    <body class="homepage">
  
    {{-- <div class="boxed_wrapper ltr"> --}}
        @include('include.header_new')
        @yield('content')
        @include('include.footer')
    {{-- </div> --}}


    {{-- <button class="scroll-top scroll-to-target" data-target="html">
		<span class="flaticon-up-arrow"></span>
	</button> --}}

	<!-- ALL JS FILES -->
    <script src="{{ asset('new_template/js/jquery.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('new_template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('new_template/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('new_template/js/jquery.isotope.min.js') }}"></script>
	<script src="{{ asset('new_template/js/main.js') }}"></script> 
	<script src="{{ asset('new_template/js/wow.min.js') }}"></script> 
	<?php 
	if(false){
	?>
   	<!----------------JAVASCRIPT ------------------------------------------------------------------------------->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-sidebar-content.js') }}"></script>
	<script src="{{ asset('assets/js/knob.js') }}"></script>
	<script src="{{ asset('assets/js/map-script.js') }}"></script>
	<script src="{{ asset('assets/js/owl.js') }}"></script>
	<script src="{{ asset('assets/js/pagenav.js') }}"></script>
	<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
	<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
	<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('assets/js/validation.js') }}"></script>
	<script src="{{ asset('assets/js/wow.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-1color-switcher.min.js') }}"></script>
	{{-- <script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
	</script> --}}
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<!---------------------------------------------------------------------------------------------------->
	<?php }?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/664ab5aa9a809f19fb32dd3e/1hu9tb8jv';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
	
	<!---------------- WHATSAPP ------------------------------------------------------------------------------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	{{-- <a href="https://api.whatsapp.com/send?phone=+6281318462404&text=Salam,%20Saya%20ingin%20bertanya." class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i></a> --}}
	<!---------------------------------------------------------------------------------------------------->
   
	</body>
</html>    