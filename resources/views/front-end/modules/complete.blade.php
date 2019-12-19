@extends('front-end.layout.master')
@push('css')
<link rel="stylesheet" href="/css/complete.css">
@endpush
@section('pageTitle', 'TicketPro: Complete')
@section('content')
<div class="main main-choose-tickets">
        <div class="wrapper">
            <div class="title">
                <div class="media">
                    <img src="{{asset($event->organizer->profileImage)}}" style="height: 100px; width: 100px;" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">{{$event->name}}</h5>
                        <p>{{$event->startTime->isoFormat('dd, D-mm-YYYY')}} ({{$event->startTime->isoFormat('LT')}} - {{$event->endTime->isoFormat('LT')}})</p>
                        <p>{{$event->location->place}}</p>
                        <p>{{$event->location->fullAddress}}</p>
                    </div>
                </div>
            </div>
            <div class="toolbars">
                <div class="component-toolbar chon-ve"><span>CHỌN VÉ</span></div>
                <div class="component-toolbar thanh-toan"><span>THANH TOÁN</span></div>
                <div class="component-toolbar hoan-tat"><span>HOÀN TẤT</span></div>
            </div>
        </div>
    </div>
    <div class="complete-content">
        <div class="card" style="width: 70rem; margin-left: 11%;">
            <div class="title"> Đặt vé thành công</div>
            <div class="img-ticket"></div>
            <div class="thank-you"> Cảm ơn bạn đã đặt vé tại TicketPro</div>
            <div class="info">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" colspan="2">Thông tin đơn hàng</th>
                            <th></th>
    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" width="250px">Mã đơn hàng</th>
                        <td>{{strtoupper($booking->transactionId)}}</td>
    
                        </tr>
                        <tr>
                            <th scope="row">Ngày đặt vé</th>
                        <td>{{$booking->created_at->isoFormat('D-mm-YYYY')}}</td>
    
                        </tr>
                        <tr>
                            <th scope="row">Thông tin đặt vé</th>
                            <td>{{$booking->totalQuantity}} x Vé tham dự</td>
    
                        </tr>
                        <tr>
                            <th scope="row">Hình thức thanh toán</th>
                            <td>MOMO</td>
                        </tr>
                        <tr>
                            <th scope="row">Hình thức nhận vé</th>
                            <td>Nhận vé qua email <br>
                                    Vé điện tử sẽ được gửi đến địa chỉ email: {{$booking->email}}
        
                                    Vui lòng in vé và đem theo đến sự kiện hoặc xuất trình mã vé (barcode/QR code) trên smart
                                    phone.
        
                                    Trong trường hợp bạn không nhận được email xác nhận từ chúng tôi, vui lòng kiểm tra thư mục
                                    Spam của bạn.
        
                                    Nếu có, hãy đánh dấu email đó là "Không phải Spam", để bạn có thể nhận được các thông tin
                                    khác từ TicketPro.</td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
        </div>
        <div class="back-home">
        <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg"
                style="width: 25rem; background-color:  #e55b00; border: none; margin-top: 4%;">Quay lại trang chủ</button>
        </div>
    </div>
@endsection('content')