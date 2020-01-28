@extends('user.layout.master')
@section('pageTitle','TicketPro: Detail')
@push('metadata')
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@endpush
@push('css')
<link href="css/library/et-line.css" rel="stylesheet">
<link href="css/library/ionicons.min.css" rel="stylesheet">
<link href="css/user/event-detail/main.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="js/library/waypoints.min.js"></script>
<!--Counter up -->
<script src="js/library/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="js/library/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="js/library/wow.min.js"></script>
<!-- Custom js -->
<script src="js/user/event-detail/main.js"></script>

@endpush
@section('content')
<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for the
                            </h2>
                            <strong class="cover-xl-text">conference</strong>
                            <p class="cover-date">
                                12-14 February 2018  - Los Angeles, CA.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('images/CP_Street_Food_Festival.jpg');">
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATE
                        </h5>
                        <p>
                            12-14 february 2018
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            location
                        </h5>
                        <p>
                            Los Angeles, CA.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            orgzation
                        </h5>
                        <p>
                            Natalie James
                            + guests
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            tikets
                        </h5>
                        <p>
                            $65 early bird
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->

<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the event
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    In rhoncus massa nec  sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                </p>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-mic"></i>
                    <div class="content">
                        <h4>9 Speakers</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-rocket"></i>
                    <div class="content">
                        <h4>8 hrs Marathon</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-bullhorn"></i>
                    <div class="content">
                        <h4>Live Broadcast</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-clock"></i>
                    <div class="content">
                        <h4>Early Bird</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->

<!--Price section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Pricing table
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight">
                        recommended
                    </div>
                   <div class="price_header">
                       <h4>
                           Early Bird
                       </h4>
                       <h6>
                           For the fast ones
                       </h6>
                   </div>
                    <div class="price_tag">
                        65 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box">
                    <div class="price_header">
                        <h4>
                            Start up
                        </h4>
                        <h6>
                            For the begginers
                        </h6>
                    </div>
                    <div class="price_tag">
                        85 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box">
                    <div class="price_header">
                        <h4>
                            Corporate
                        </h4>
                        <h6>
                            For the business
                        </h6>
                    </div>
                    <div class="price_tag">
                        95 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box">
                    <div class="price_header">
                        <h4>
                            Corporate
                        </h4>
                        <h6>
                            For the business
                        </h6>
                    </div>
                    <div class="price_tag">
                        95 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--price section end -->
@endsection