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
        <form action="{{route('event.search')}}" method = "POST" >
            {{csrf_field()}}
            <div class=" menu-search col-sm-12">
                    <div class="row cs1-inp-group">
                        <div class="col-sm-3 filter-selector">
                            <div class="custome-select cs1-inp-select w-100">
                                <div class="icon"><img class='icon-image' src="/Images/icon/location.svg" alt=""></div>
                                <select name= 'location' data-location="true" tabindex="94">
                                        <option value=""@if($data['request']['location']==null) selected @endif>Tất cả địa điểm</option>
                                        <option value="Hồ Chí Minh"@if($data['request']['location']=='Hồ Chí Minh') selected @endif>Hồ Chí Minh</option>
                                        <option value="Hà Nội"@if($data['request']['location']=='Hà Nội') selected @endif>Hà Nội</option>
                                        <option value="3"@if($data['request']['location']=='3') selected @endif>Các địa điểm khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-5 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        
                                        <div class="icon"><img class='icon-image' src="/Images/icon/menu.svg" alt=""></div>
                                        <select name = "eventType" data-location="true" tabindex="94">
                                                <option value="" @if($data['request']['eventType']==null) selected @endif>Mọi sự kiện</option>
                                                <option value="music" @if($data['request']['eventType']=='music') selected @endif>Âm nhạc</option>
                                                <option value="sport" @if($data['request']['eventType']=='sport') selected @endif>Thể thao</option>
                                                <option value="conference"@if($data['request']['eventType']=='conference') selected @endif>Hội nghị</option>
                                        </select>
                                    </div>                   
                                </div>
                                <div class="col-sm-4 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        <div class="icon"><img class='icon-image' src="/Images/icon/clock.svg" alt=""></div>
                                        <select name="timeStart" data-location="true" tabindex="94">
                                                <option value="" @if($data['request']['timeStart']==null) selected @endif>Tất cả thời gian</option>
                                                <option value="0" @if($data['request']['timeStart']=='0') selected @endif>Hôm nay</option>
                                                <option value="7" @if($data['request']['timeStart']=='7') selected @endif>Trong vòng 7 ngày</option>
                                                <option value="30" @if($data['request']['timeStart']=='30') selected @endif>Trong vòng 30 ngày</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 filter-selector">
                                    <div class="custome-select cs1-inp-select w-100">
                                        <div class="icon"><img class='icon-image' src="/Images/icon/money.svg" alt=""></div>
                                        <select name="price" data-location="true" tabindex="94">
                                                <option value="" @if($data['request']['price']==null) selected @endif>Mọi giá</option>
                                                <option value="0" @if($data['request']['price']=='0') selected @endif>Miễn Phí</option>
                                                <option value="1" @if($data['request']['price']=='1') selected @endif>Có phí</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row search-contain">
                        <button type="submit" class="btn-search" onclick="loading()">
                            <img id="btn-search-image" src="/Images/icon/search.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container" >
        <div id="event-list" class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
            @if(count($data['event'])>0)
                @foreach($data['event'] as $event)
                    <!-- Intro Item -->
                    <div class=" intro_item_all intro_item ">
                        <div class="intro_image"><img src="{{$event->coverImage}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="{{Route('event.detail',['eventId' => $event->id])}}">{{$event->name}}</a></div>
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
            @else
                <div class="text">Không có sự kiện nào phù hợp được tìm thấy</div>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection