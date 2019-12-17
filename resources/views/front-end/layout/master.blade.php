<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metadata')
    <title>@yield('pageTitle')</title>



    <!-- Google Fonts -->
    <link href='fonts\Titillium.css' rel='stylesheet' type='text/css'>
    <link href='fonts\Roboto.css' rel='stylesheet' type='text/css'>
    <link href='fonts\Titillium.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="\css\w3.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="/css/font-awesome.min.css>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/CreateEvent1.css">
    <link rel="stylesheet" href="/css/buyTicket.css">
    <link rel="stylesheet" href="/css/CreateEvent2.css">
    <link rel="stylesheet" href="/css/CreateEvent3.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/main-home.css">
    <link rel="stylesheet" href="/css/style-sign-up.css">
    <link rel="stylesheet" href="/css/style-sign-in.css">
    <link rel="stylesheet" href="/css/chooseTickets.css">
    <link rel="stylesheet" href="/css/complete.css">
    <link rel="stylesheet" href="/css/payment.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/sign-in-res.css">
    <link rel="stylesheet" href="/css/sign-up-res.css">
    <link rel="stylesheet" href="/css/buyTicket.css">
    <link rel="stylesheet" href="/css/CreateEvent1.css">
    <link rel="stylesheet" href="/css/CreateEvent2.css">
    <link rel="stylesheet" href="/css/CreateEvent3.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/public/js/chart_total.js"></script>
    <script src="/public/js/chart_all_ticket.js"></script>
    <script src="/public/js/clock.js"></script>
    <script src="/public/js/buyticket.js"></script>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <style>
        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
        }

    </style>
</head>
<body>

@include('front-end.layout.header')
<div class="rev-slider">
    @yield('content')
</div> <!-- .container -->
@include('front-end.layout.footer')



<!-- include js files -->
<!-- Latest jQuery form server -->

<script src="js/jquery.min.js"></script>
<script src="/js/jquery.min.js"></script>

{{-- <script src="/js/bootstrap-slider.js"></script> --}}

{{-- <!-- Bootstrap JS form CDN -->

<!-- jQuery sticky menu -->
<script src="{{ asset("js/owl.carousel.min.js")}}"></script>
<script src="{{ asset("js/jquery.sticky.js")}}"></script>

<!-- jQuery easing -->
<script src="{{ asset("js/jquery.easing.1.3.min.js")}}"></script>

<!-- Main Script -->
<script src="{{ asset("js/main.js")}}"></script> --}}

<!-- Slider -->
{{-- <script type="text/javascript" src={{ asset('js/bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset("js/script.slider.js")}}"></script> --}}
@stack('scripts')
<script src="jquery\jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap\css\bootstrap.min.css"></script>
<link rel="stylesheet" href="/css/bootstrap.min.css">


<script src="js/html5shiv.min.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
<script src="js/respond.min.js"></script>
<script src="/js/chart_total.js"></script>
<script src="/js/chart_all_ticket.js"></script>
<script src="/js/clock.js"></script>


<script src="js/5279a6eae4.js"></script>
<script src="jquery/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
