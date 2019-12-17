@extends('front-end.layout.master')
@push('css')
<link rel="stylesheet" href="/css/payment.css">
@endpush
@push('metadata')
<meta name="expire-time" content="{{$expire_timestamp}}">
@endpush
@section('pageTitle', 'TicketPro: Payment')
@section('content')
<div class="main main-choose-tickets">
        <div class="wrapper">
            <div class="banner" style='background-image: url("{{asset($event->image)}}")'></div>
            <div class="title">
                <div class="media">
                    <img src="{{asset($event->organizer->profileImage)}}" style="height: 100px; width: 100px;"
                        class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">{{$event->name}}</h5>
                      <p>{{$event->startTime->isoFormat('dd, D-mm-YYYY')}} ({{$event->startTime->isoFormat('LT')}} - {{$event->endTime->isoFormat('LT')}})</p>
                      <p>{{$event->location->place}}</p>
                      <p>{{$event->location->fullAddress}}, {{$event->location->city}}</p>
                </div>
                </div>
            </div>
            <div class="toolbars">
                <div class="component-toolbar chon-ve"><span>CHỌN VÉ</span></div>
                <div class="component-toolbar thanh-toan"><span>THANH TOÁN</span></div>
                <div class="component-toolbar hoan-tat"><span>HOÀN TẤT</span></div>
            </div>
            <div class="ticket-type">
                <div class="ticket-type-content">
                    <div class="title-info-ticket">Thông tin nhận vé</div>
                    <form method="POST" action="{{route('validateOrder', [
                        'eventId'    => $event->id
                    ])}}" id = "form-info">
                        @csrf
                        <div class="form-group">
                            <label for="InputHo">Họ</label>
                            <input type="text" class="form-control" placeholder="Nhập họ" name="booking_last_name">
                        </div>
                        <div class="form-group">
                            <label for="InputTen">Tên</label>
                            <input type="text" class="form-control" placeholder="Nhập tên" name="booking_first_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" name="booking_email">
                        </div>
                        <div class="form-group">
                            <label for="InputEmailAgain">Email address</label>
                            <input type="email" class="form-control" id="InputEmailAgain" aria-describedby="emailHelp"
                                placeholder="Enter email again">
                        </div>
                        <div class="form-group">
                            <label for="InputTen">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="booking_phone">
                        </div>
                    </form>
                    <div class="vnpay">
                        <div class="title-info-ticket">Thanh Toán trực tuyến</div>
                        <div class="vnpay-content">
                            <div class="img-vnpay"></div>
                            <div class="text">Thanh toán bằng QR Vnpay</div>
                        </div>
    
                    </div>
                </div>
                <div class="space"></div>
                <div class="info-ticket">
                    <div class="card" style="width: 30rem;">
                    <div class="clock"><i class="fas fa-stopwatch"></i></div>   
                        <div class="show-clock">
                            <span id="m">Phút</span> :
                            <span id="s">Giây</span>
                        </div>
                        <div class="title-info-ticket">Thông tin đặt vé</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Loại vé</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($order_session['tickets']); $i++)
                                <tr>
                                <th scope="row">{{($i+1)}}</th>
                                    <td>{{$order_session['tickets'][$i]['type']}}</td>
                                    <td>{{$order_session['tickets'][$i]['quantity']}}</td>
                                    <td>@price_format($order_session['tickets'][$i]['total_price']) VND</td>
                                </tr>     
                                @endfor
                            </tbody>
                        </table>
                        <div class="total">
                            <div class="text">Tổng tiền</div>
                            <div class="money">@price_format($order_session['order_total']) VND</div>
                        </div>
                    </div>
                    <button type="submit" form="form-info" class="btn btn-primary btn-lg"
                        style="width: 30rem; background-color:  #e55b00; border: none; margin-top: 4%;">Thanh Toán</button>
                </div>
    
            </div>
        </div>
    </div>

@endsection('content')
@push('scripts')
<script src="/js/clock.js"></script>
@endpush