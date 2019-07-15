<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('public/user/img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Groceris Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{asset('public/user/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/ion.rangeSlider.css')}}" >
	<link rel="stylesheet" href="{{asset('public/user/css/ion.rangeSlider.skinFlat.css')}}" >
	<link rel="stylesheet" href="{{asset('public/user/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('public/user/css/main.css')}}">

</head>
<body >
{{--include file header.blade.php--}}
    @include('USer.header')
    <div class="contrainer">
    @yield('main')
    </div>
    @include('User.pages.footer')
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('public/user/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('public/user/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/user/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('public/user/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('public/user/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('public/user/js/nouislider.min.js')}}"></script>
	<script src="{{asset('public/user/js/countdown.js')}}"></script>
	<script src="{{asset('public/user/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('public/user/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('public/user/js/gmaps.min.js')}}"></script>
	<script src="{{asset('public/user/js/main.js')}}"></script>
</body>
</html>