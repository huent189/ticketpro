@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: chooseTickets')
@section('content')
    <div class="main main-choose-tickets">
        <div class="wrapper">
            <div class="banner"></div>
            <div class="title"><div class="media">
                    <img src="{{asset($event[0]->image)}}" class="align-self-start mr-3" alt="...">
                    <div class="media-body">


                        <h5 class="mt-0">{{$event[0]->name}}</h5>
                        <p>{{$event[0]->startTime ." - ". $event[0]->endTime}}</p>
                        <p>{{$event[0]->location->place}}</p>
                        <p>{{$event[0]->location->city}}</p>
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
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Loại vé</th>
                            <th scope="col">Giá vé</th>
                            <th scope="col">Số lượng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hook A</td>
                            <td>400.000 VND</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Hook B</td>
                            <td>500.000 VND</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Gold</td>
                            <td>10.000.000 VND</td>
                            <td>1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="space"></div>
                <div class="info-ticket">
                    <div class="card" style="width: 30rem;">
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
                            style="width: 30rem; background-color:  #e55b00; border: none; margin-top: 4%;">Tiếp tục</button>
                </div>
            </div>
        </div>
    </div>

@endsection('content')
