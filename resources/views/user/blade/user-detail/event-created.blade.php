@extends('user.blade.user-detail.layout.master')
@section('pageTitle', 'TicketPro:Ticket bought')
@push('css')
<link href="/css/user/user-detail/ticket-bought.css" rel="stylesheet">
<link href="/css/user/user-detail/event-created.css" rel="stylesheet">
@endpush

@push('scripts')

@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Các sự kiện trên website: {{count($data['eventList'])}}
                </div>
            </div>  
            <div class="mb-2 mr-2 btn btn-info">
                <a href="{{Route('get_create_event')}}"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div> 
    @if(count($data['eventList'])<=0)
    <div class="title">
        Bạn chưa tạo sự kiện nào trên webside.
    </div>
    @else
    <div class="main-events-bought">
        <div class="selling-events"> 
            @foreach($data['eventList'] as $event)
            <div class="ticket-detail">
                <span class= 'r-date'>Ngày {{date_format($event->startTime, "d")}} Tháng {{date_format($event->startTime, "m")}} </span>
                <span class= 'r-line'></span>
                <div class="event-detail">
                    <div class="logo-left">
                        <a href="#">
                            <img src="{{$event->organizer()->first()->profileImage}}" alt="" class="logo">
                        </a>
                    </div>
                    <div class="event-info">
                        <div class="event-title">
                            {{$event->name}}
                        </div>
                        <div class="event-time">
                            <i class="fas fa-clock"></i>
                            {{$event->startTime}}
                        </div>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            {{($event->location()->get()->first()->fullAddress)}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> 
    </div>
    @endif
    

@endsection