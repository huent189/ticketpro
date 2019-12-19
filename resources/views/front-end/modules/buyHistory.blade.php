@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: buyHistory')
@push('css')
<link rel="stylesheet" href="/css/CreateEvent1.css">
<link rel="stylesheet" href="/css/buyHistory.css">
@endpush

@section('content')
<div class="wrapper">
    @include('front-end.layout.menu-left-create-event')
    <div class="right">
    <h1>Sự kiện bạn đã mua vé</h1>
    <table class="table table-bordered" style = "width:96%;"> 
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Sự kiện</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <th scope="row">{{++$i}}</th>
               
                <td>
                    <li class="media">
                        <img class="d-flex mr-3 ava" src='{{asset($event->image)}}'
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <a href="{{route('buyEventDetails',['eventId' => $event->id])}}">
                                <h5 class="mt-0 mb-2 font-weight-bold">{{$event->name}}</h5>
                            </a>
                            <p>{{$event->description}}</p>
                        </div>
                    </li>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection