@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: Payment')
@section('content')
<div class="main main-choose-tickets">
        <div class="wrapper">
            <div class="banner"></div>
            <div class="title">
                <div class="media">
                    <img src="https://picsum.photos/80/80" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Show của Thế Anh</h5>
                        <p>Thứ 7 Ngày 09 tháng 11 năm 2019 (08:00 PM - 11:00 PM)</p>
                        <p>Đại học Công nghệ - Đại học Quốc gia Hà Nội</p>
                        <p>144 Xuân Thủy,Dịch Vọng Hậu, Cầu Giấy, Hà Nội</p>
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
                    <form>
                        <div class="form-group">
                            <label for="InputHo">Họ</label>
                            <input type="text" class="form-control" placeholder="Nhập họ" onclick="start()">
                        </div>
                        <div class="form-group">
                            <label for="InputTen">Tên</label>
                            <input type="text" class="form-control" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputEmailAgain">Email address</label>
                            <input type="email" class="form-control" id="InputEmailAgain" aria-describedby="emailHelp"
                                placeholder="Enter email again">
                        </div>
                        <div class="form-group">
                            <label for="InputTen">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại">
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
                            <span id="h">Giờ</span> :
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Vé miễn phí</td>
                                    <td>2</td>
                                    <td>0 VND</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Vé Gold</td>
                                    <td>1</td>
                                    <td>10.000.000 VND</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="total">
                            <div class="text">Tổng tiền</div>
                            <div class="money">10.000.000 VND</div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg"
                        style="width: 30rem; background-color:  #e55b00; border: none; margin-top: 4%;">Thanh Toán</button>
                </div>
    
            </div>
        </div>
    </div>

@endsection('content')
@section('scripts')
<script src="{{asset("js/clock.js")}}"></script>
@endsection