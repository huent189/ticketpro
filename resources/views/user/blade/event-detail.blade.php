@extends('user.layout.master')
@section('pageTitle','TicketPro: Detail')
@push('metadata')
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@endpush
@push('css')
<link href="/css/library/et-line.css" rel="stylesheet">
<link href="/css/library/ionicons.min.css" rel="stylesheet">
<link href="/css/user/event-detail/main.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="/js/library/waypoints.min.js"></script>
<!--Counter up -->
<script src="/js/library/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="/js/library/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="/js/library/wow.min.js"></script>
<!-- Custom js -->
<script src="/js/user/event-detail/main.js"></script>

@endpush
@section('content')
<div class="container">
        <!--cover section slider -->
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Tham gia ngay
                                </h2>
                                <strong class="cover-xl-text">{{$data['event']->name}}</strong>
                                <p class="cover-date">
                                    {{$data['event']->startTime}}   -   {{$data['event']->location()->get()->first()->city}}.
                                </p>
                                <a href="#pricingTable" class=" btn btn-primary btn-rounded" >
                                    Mua vé ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('{{$data['event']->coverImage}}');">
            </div>
            <div class="cover_item" style="background: url('{{$data['event']->ticketMap}}');">
            </div>
        </div>
        <div class="cover_nav">
            <ul class="cover_dots">
                <li class="active" data="0"><span>1</span></li>
                <li  data="1"><span>2</span></li>
                <li  data="2"><span>3</span></li>
            </ul>
        </div>
    </section>
    <!--cover section slider end -->
</div>
<!--about the event -->
<section class="pt30">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                Giới thiệu sự kiện
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p>
                    {{$data['event']->description}}
                </p>
            </div>
        </div>
    </div>
</section>
<!--about the event end -->
<!--event info -->
<section class="pt50 pb50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Thời gian
                        </h5>
                        <p>
                            {{$data['event']->startTime}}                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Địa điểm
                        </h5>
                        <p>
                            {{$data['event']->location()->get()->first()->city}}                        
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Nhà tổ chức
                        </h5>
                        <a href="{{'//'.$data['event']->organizer()->first()->website}}">
                            <p>
                                {{$data['event']->organizer()->first()->name}}
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Giá Vé
                        </h5>
                        <p>
                            Từ {{$data['event']->minPrice()}} VNĐ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->

<!--Price section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 id="buynow" class="title">
                Bảng giá vé
            </h3>
        </div>
        <div class="row justify-content-center">
        @foreach($data['ticketClasses'] as $ticket)
            <div class="col-md-3 col-12">
                <div class="price_box active">
                @if($ticket->numberAvailable < 1)
                    <div class="price_highlight">
                        Hết vé
                    </div>
                @endif
                   <div class="price_header">
                       <h4 class="box_title">
                           {{$ticket->type}}
                       </h4>
                       <h6>
                           {{$ticket->location}}
                       </h6>
                   </div>
                    <div class="price_tag">
                        {{number_format($ticket->price,0, ' ', ' ')}} <sup>VNĐ</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            {{$ticket->benefit}}
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="{{Route('booking',['eventId'=>$data['event']->id])}}" class="btn btn-primary btn-rounded">Mua vé</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--price section end -->
@endsection