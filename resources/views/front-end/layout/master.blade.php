<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5279a6eae4.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/buyTicket.css">
    <link rel="stylesheet" href="/css/CreateEvent1.css">
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
    <link rel="stylesheet" href="/css/manager.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/public/js/chart_total.js"></script>
    <script src="/public/js/chart_all_ticket.js"></script>
    <script src="/public/js/clock.js"></script>
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

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="/js/jquery.min.js"></script>


</body>
</html>
