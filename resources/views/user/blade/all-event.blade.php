@extends('user.layout.master')
@section('pageTitle','TicketPro: Search Event')
@push('metadata')
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@endpush
@push('css')
<link href="/css/user/all-event.css" rel="stylesheet">
<link href="/css/library/et-line.css" rel="stylesheet">
<link href="/css/library/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/user/main_styles.css">
<link rel="stylesheet" href="/css/user/custom_index.css">
<link rel="stylesheet" href="/css/user/responsive.css">
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
<script src="/js/user/all-event.js"></script>

@endpush
@section('content')
<div class="container-fluid mgt-103 mgbt-20">
    <div class="container">
        <form action="" method = "POST" >
            <div class=" menu-search col-sm-12">
                    <div class="row cs1-inp-group">
                        <div class="col-sm-3 filter-selector">
                            <div class="custome-select cs1-inp-select w-100">
                                <div class="icon"><img class='icon-image' src="/Images/icon/location.svg" alt=""></div>
                                <select name= 'location' data-location="true" tabindex="94">
                                        <option value="">Tất cả địa điểm</option>
                                        <option value="ho-chi-minh">Hồ Chí Minh</option>
                                        <option value="ha-noi">Hà Nội</option>
                                        <option value="other-locations">Các địa điểm khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-5 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        
                                        <div class="icon"><img class='icon-image' src="/Images/icon/menu.svg" alt=""></div>
                                        <select name = "eventType" data-location="true" tabindex="94">
                                                <option value="" selected>Mọi sự kiện</option>
                                                <option value="1">Âm nhạc</option>
                                                <option value="2">Thể thao</option>
                                                <option value="3">Hội nghị</option>
                                        </select>
                                    </div>                   
                                </div>
                                <div class="col-sm-4 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        <div class="icon"><img class='icon-image' src="/Images/icon/clock.svg" alt=""></div>
                                        <select name="timeStart" data-location="true" tabindex="94">
                                                <option value="">Tất cả thời gian</option>
                                                <option value="{{date('Y-m-d h:i:sa')}}">Hôm nay</option>
                                                <option value="{{date('Y-m-d h:i:sa')}}">Tuần này</option>
                                                <option value="{{date('Y-m-d h:i:sa')}}">Tháng này</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        <div class="icon"><img class='icon-image' src="/Images/icon/money.svg" alt=""></div>
                                        <select name="price" data-location="true" tabindex="94">
                                                <option value="">Mọi giá</option>
                                                <option value="0">Miễn Phí</option>
                                                <option value="1">Có phí</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row search-contain">
                        <button class="btn-search" onclick="loading()">
                            <img id="btn-search-image" src="/Images/icon/search.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container" >
        <div id="event-list" class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
            @foreach($data['event'] as $event)
                <!-- Intro Item -->
                <div class=" intro_item_all intro_item ">
                    <div class="intro_image"><img src="{{$event->coverImage}}" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="{{Route('event_detail',['eventId' => $event->id])}}">{{$event->name}}</a></div>
                        <div class="description">
                            <div class="des-left">
                                <div class="intro_subtitle">
                                    <div class="price">
                                        <span><i class="fas fa-money-bill-wave"></i></span>
                                        <span>Từ {{$event->minPrice()}} VNĐ</span>
                                    </div>
                                    <div class="location">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>{{$event->location()->get()->first()->city}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="des_calendar">
                                <div class="calendar_month">Tháng {{number_format(date_format($event->startTime,'m'))}}</div>
                                <div class="calendar_content">{{number_format(date_format($event->startTime,'d'))}}</div>
                            </div>	
                        </div>
                                        
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection