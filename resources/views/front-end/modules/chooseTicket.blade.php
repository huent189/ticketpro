@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: chooseTickets')
@section('content')
<div class="main main-choose-tickets">
           <div class="wrapper">
            <div class="banner" style='background-image: url("{{asset($event->image)}}")'></div>
               <div class="title"><div class="media">
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
                                  @for ($i = 0; $i < count($event->ticketClasses); $i++)
                                  <tr>
                                    <th scope="row">{{$i + 1}}</th>
                                    <td>{{$event->ticketClasses[$i]->type}}</td>
                                    <td>@price_format($event->ticketClasses[$i]->price) VND</td>
                                    @if ($event->ticketClasses[$i]->is_sold_out)
                                    <td>Hết vé</td>
                                    @else
                                    <td id="giatri"><input type="number" style="width:40px;"></td>
                                    @endif
                                  </tr>
                                  @endfor
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
                                    {{-- <tr>
                                        <th scope="row">1</th>
                                        <td>Vé miễn phí</td>
                                        <td>2</td>
                                        <td>0 VND</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="total">
                                <div class="text">Tổng tiền</div>
                                <div class="money">0 VND</div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg"
                            style="width: 30rem; background-color:  #e55b00; border: none; margin-top: 4%;">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>

@endsection('content')