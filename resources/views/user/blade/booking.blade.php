@extends('user.layout.master')
@section('pageTitle','TicketPro: Booking')
@push('metadata')
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@endpush
@push('css')
<link href="/css/user/event-detail/main.css" rel="stylesheet">
<link href="/css/user/event-detail/booking.css" rel="stylesheet">

@endpush

@push('scripts')
<!-- Custom js -->
<script src="/js/user/event-detail/booking.js"></script>
<script src="/js/user/event-detail/main.js"></script>
@endpush
@section('content')
<div class="row">
    <div class="event_infor">
        <div class="event_name">{{$data['event']->name}}</div>
        <div class="event_location"> {{$data['event']->location()->first()->fullAddress}}</div>
        <div class="event_time"> {{$data['event']->startTime}}</div>
    </div>
</div>
<div class="container-fluid flex" id = "contain_stick">
    <div class="ticket_infor">
        <div class="ticket_map">
            <div class="title">
                Sơ đồ chỗ ngồi
            </div>
            <div class="map">
                <img src="{{$data['event']->ticketMap}}" alt="">
            </div>
        </div>
        <div class="pricing_table">
            <div class="title">
                Bảng giá vé
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Loại vé</th>
                    <th scope="col">Giá vé</th>
                    <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=0 ; $i < count($data['event']->ticketClasses()->get()); $i++ )
                    <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td id="{{'class_'.$data['event']->ticketClasses()->get()[$i]->id.'_type'}}">{{$data['event']->ticketClasses()->get()[$i]->type}}</td>
                    <td id="{{'class_'.$data['event']->ticketClasses()->get()[$i]->id.'_price'}}">{{number_format($data['event']->ticketClasses()->get()[$i]->price,0, ' ', ' ')}} vnđ</td>
                    <td>
                        @if($data['event']->ticketClasses()->get()[$i]->numberAvailable<=0)
                            Hết vé
                        @else
                        <button id = "{{'btn_minus_'.$data['event']->ticketClasses()->get()[$i]->id}}" class = "btn_change" onclick="changeTicket(this,'{{$data['event']->ticketClasses()->get()[$i]->id}}', -1)">
                            <i class="fa fa-minus"></i>
                        </button>
                        <span class="text_change_number" type="text" min="0" max="{{$data['event']->ticketClasses()->get()[$i]->getMaxPerPerson()}}" value="0" id= "{{'class_'.$data['event']->ticketClasses()->get()[$i]->id. '_val'}}" price="{{$data['event']->ticketClasses()->get()[$i]->price}}">0</span>
                        <button id = "{{'btn_plus_'.$data['event']->ticketClasses()->get()[$i]->id}}" class = "btn_change" onclick="changeTicket(this,'{{$data['event']->ticketClasses()->get()[$i]->id}}', 1)">
                            <i class="fa fa-plus"></i>
                        </button>
                        @endif
                    </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>	
    <div id="booking_detailx" class="booking">
        <div class="booking_infor">
            <div class="booking_detail">
                <div class="title">Thông tin đặt vé</div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Loại vé</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody id='ticket_info'>
                       
                    </tbody>
                    </table>
                <div id="total_price">Tổng tiền: <span id="sum_all"> 0 VNĐ</span></div>
            </div>
        </div>       
        <div id = "btn_submit" class=" submit button" disabled>
            <a href="#">Tiếp tục</a>
        </div>
    </div>
</div>
@endsection