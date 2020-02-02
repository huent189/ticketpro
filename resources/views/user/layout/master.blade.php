<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('pageTitle')</title>
@stack('metadata')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@stack('css')
<link rel="stylesheet" type="text/css" href="/css/library/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/library/font-awesome.min.css">
<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/css/user/master.css">
<link rel="stylesheet" type="text/css" href="/css/user/responsive.css">
</head>
<body>

<div class="super_container">
    <!-- Menu -->
    @include('user.layout.header')
    <!-- Content -->
    @yield('content')   
	<!-- Footer -->
    @include('user.layout.footer')
		
</div>
<script src="/js/library/jquery.min.js"></script>
<script src="/js/library/popper.js"></script>
<script src="/js/library/bootstrap.min.js"></script>
<script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/js/user/custom.js"></script>
@stack('scripts')
</body>
</html>