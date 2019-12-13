@extends('front-end.layout.master')
@section('pageTitle','TicketPro:sport')
@section('content')

<div class="main">
    <div class="container">
    <div class="category">
                    <div class="title">SPORT</div>
                    <div class="dash"></div>
                    <div class="content">
                        <table>
                            <tbody>
                            @for($i=0;$i<sizeof($eventList);$i+=2)
                                <tr>
                                    <td>
                                        <div class="component-ticket">
                                            <div class="img item-3"><img class="cover-image" src="{{$eventList[$i]->image}}" alt=""></div>
                                            <div class="text">
                                                <div class="price">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="padding-10">
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell event-title">
                                                                        <a href="{{url('ticket-detail/'.$eventList[$i]->id)}}"
                                                                           title="{{$eventList[$i]->name}}" target="_blank">
                                                                            {{$eventList[$i]->name}}
                                                                        </a>
                                                                    </div>
                                                                    <div class="table-cell card-right-block">
                                                                    </div>
                                                                </div>
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell">
                                                                        <div class="event-price w-100">
                                                                            <strong> {{$eventList[$i]->startTime}}</strong>
                                                                        </div>
                                                                        <div class="event-price w-100">
                                                                            <span class="color-6">Từ</span> <strong> {{$eventList[$i]->minPrice()}} VNĐ</strong>
                                                                        </div>
                                                                        <div class="event-tags w-100">
                                                                            <div class="tag-venues">
                                                                                <span class="tag-venue smooth-trans  uppercase">{{$eventList[$i]->location->place}} - {{$eventList[$i]->location->city}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    @if($i+1<sizeof($eventList))
                                        <td>
                                            <div class="component-ticket">
                                                <div class="img item-3"><img class="cover-image" src="{{$eventList[$i+1]->image}}" alt=""></div>
                                                <div class="text">
                                                    <div class="price">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="padding-10">
                                                                    <div class="table w-100 margin-bottom-0">
                                                                        <div class="table-cell event-title">
                                                                            <a href="{{url('ticket-detail/'.$eventList[$i+1]->id)}}"
                                                                               title="{{$eventList[$i+1]->name}}" target="_blank">
                                                                                {{$eventList[$i+1]->name}}
                                                                            </a>
                                                                        </div>
                                                                        <div class="table-cell card-right-block">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table w-100 margin-bottom-0">
                                                                        <div class="table-cell">
                                                                            <div class="event-price w-100">
                                                                                <strong> {{$eventList[$i+1]->startTime}}</strong>
                                                                            </div>
                                                                            <div class="event-price w-100">
                                                                                <span class="color-6">Từ</span> <strong> {{$eventList[$i+1]->minPrice()}} VNĐ</strong>
                                                                            </div>
                                                                            <div class="event-tags w-100">
                                                                                <div class="tag-venues">
                                                                                    <span class="tag-venue smooth-trans  uppercase">{{$eventList[$i+1]->location->place}} - {{$eventList[$i+1]->location->city}}</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>

  @endsection('content')
