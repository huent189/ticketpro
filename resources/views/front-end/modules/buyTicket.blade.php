@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: buyTicket')
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
                        <p>{{$event->startTime->dayOfWeek === 0 ? "Chủ nhật" : "Thứ ". strval($event->startTime->dayOfWeek + 1)}} 
                            Ngày {{$event->startTime->day}} tháng {{$event->startTime->month}} 
                            năm {{$event->startTime->year}} ({{$event->startTime->hour}}h{{$event->startTime->minute}}p - {{$event->endTime->hour}}h{{$event->endTime->minute}}p)</p>
                        <p>{{$event->location->place}}</p>
                        <p>{{$event->location->fullAddress}}, {{$event->location->city}}</p>
                    </div>
                </div>
                @if ($event->status == 4)
            <form action='{{route('choose-ticket',['eventId' => $event->id])}}' class="btn-buyTicket">
                    <button type="submit" style="height: 60px; background-color:  #e55b00; border: 1px solid #e55b00 ; " 
                            class="btn btn-primary" h>MUA VÉ</button>
                </form> 
                @endif
            </div>
            <div class="introduction">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mt-0">Giới thiệu</h3>
                        <div class="space"></div>
                        {{$event->description}}
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mt-0">Thông tin vé</h3>
                        <div class="space"></div>
                        <div class="img-location" style="background-image: url({{asset($event->ticketMap)}})"></div>
                        <div class="ticket">
                                <table class="table">
                                    <tbody>
                                        @for ($i = 0; $i < count($event->ticketClasses); $i++)
                                        <tr>
                                        <th scope="row">{{$i + 1}}</th>
                                            <td>
                                            <h5>{{$event->ticketClasses[$i]->type}}</h5>
                                            @if ($event->ticketClasses[$i]->location)
                                            <p>Vị trí: {{$event->ticketClasses[$i]->location}}</p>    
                                            @endif
                                            @if ($event->ticketClasses[$i]->benefit)
                                            <p>Quyền lợi: {{$event->ticketClasses[$i]->benefit}}</p>
                                            @endif
                                            </td>
                                            <td>
                                            <h5>{{$event->ticketClasses[$i]->price}}VND</h5>
                                            </td>
                                
                                        </tr>    
                                        @endfor
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection('content')