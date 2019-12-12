@extends('front-end.layout.master')
@push('metadata')
<meta name="csrf-token" content="{{csrf_token()}}">
<meta name="event-id" content="{{$event->id}}">
@endpush
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
                                    <td id="{{$event->ticketClasses[$i]->type."_price"}}">@price_format($event->ticketClasses[$i]->price) VND</td>
                                    @if ($event->ticketClasses[$i]->is_sold_out)
                                    <td>Hết vé</td>
                                    @else
                                  <td><button><i class="fas fa-minus" onclick="changeTicket(this,'{{$event->ticketClasses[$i]->type}}', -1)"
                                    ></i></button>
                                    <span type="text" min="{{$event->ticketClasses[$i]->minPerPerson}}" max="{{$event->ticketClasses[$i]->maxTicket}}" value="0" id= "{{$event->ticketClasses[$i]->type. "_val"}}" price="{{$event->ticketClasses[$i]->price}}">0</span>
                                    <button><i class="fas fa-plus" onclick="changeTicket(this,'{{$event->ticketClasses[$i]->type}}', 1)"></i></button></td>
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
                                <tbody id="ticket_info">
                                    {{-- <tr>
                                        <th scope="row">1</th>
                                        <td>Vé miễn phí</td>
                                        <td id="info_class">2</td>
                                        <td>0 VND</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="total">
                                <div class="text">Tổng tiền</div>
                                <div class="money" id="sum_all">0 VND</div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg"
                            style="width: 30rem; background-color:  #e55b00; border: none; margin-top: 4%;" onclick="submitTicket()">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
@endsection('content')
@push('scripts')
      <script src="{{asset('js/ticket_booking.js')}}"></script>
@endpush