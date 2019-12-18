@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro:Home')
@section('content')
<div class="main">
            <div class="container">
                @if(count($slide)!=0)
                <div class="main-category">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="d-block" href="{{route('event-detail', ['eventId' => $slide[0]->id])}}">
                                <img class="d-block w-100" src="{{$slide[0]->image }}">
                                </a>
                            </div>
                            @for($i=1;$i<sizeof($slide);$i++)
                                <div class="carousel-item ">
                                    <a class="d-block" href="{{route('event-detail', ['eventId' => $slide[$i]->id])}}">
                                    <img class="d-block w-100" src={{$slide[$i]->image }}>
                                    </a>
                                </div>

                            @endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


{{--                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--                            <ol class="carousel-indicators">--}}
{{--                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>--}}
{{--                            </ol>--}}

{{--                            <div class="carousel-inner">--}}

{{--                                <div class="carousel-item active">--}}
{{--                                    <a class="d-block" href="{{route('event-detail', ['eventId' => $slide[0]->id])}}">--}}
{{--                                    <img class="d-block" src={{$slide[0]->image }} width="1100" height="300" alt="First slide">--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                @for($i=1;$i<sizeof($slide);$i++)--}}
{{--                                <div class="carousel-item ">--}}
{{--                                    <a class="d-block" href="{{route('event-detail', ['eventId' => $slide[$i]->id])}}">--}}
{{--                                    <img class="d-block" src={{$slide[$i]->image }} width="1100" height="300" alt="First slide">--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                @endfor--}}
{{--                            </div>--}}
{{--                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                              <span class="sr-only">Previous</span>--}}
{{--                            </a>--}}
{{--                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--                              <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                              <span class="sr-only">Next</span>--}}
{{--                            </a>--}}
{{--                          </div>--}}
                </div>
                @endif
                <div class="category">
                    <div  class="title"><a href="{{url('sport')}}">SPORT</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @if(count($sportListEvent)>0)
                    @foreach($sportListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-1"><img class="cover-image" src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="{{route('event-detail', ['eventId' => $event->id])}}"
                                                            title="{{$event->name}}">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <strong> {{$event->startTime}}</strong>
                                                        </div>
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->minPrice()}} VNĐ</strong>
                                                        </div>
                                                        
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->location->place}} - {{$event->location->city}}</span>
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
                    @endforeach
                    @endif
                    </div>

                </div>
                <div class="category">
                    <div class="title"><a href="{{url('conference')}}">MUSIC</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @if(count($musicListEvent)>0)
                    @foreach($musicListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-3"><img class="cover-image" src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="{{route('event-detail', ['eventId' => $event->id])}}"
                                                            title="{{$event->name}}">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <strong> {{$event->startTime}}</strong>
                                                        </div>
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->minPrice()}} VNĐ</strong>
                                                        </div>
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->location->place}} - {{$event->location->city}}</span>
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
                    @endforeach
                    @endif
                    </div>
{{--                    <div class="row">{{$musicListEvent->links()}}</div>--}}
                </div>
                <div class="category">
                    <div class="title"><a href="{{url('conference')}}">CONFERENCE</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @if(count($conferenceListEvent)>0)
                    @foreach($conferenceListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-5 "><img class="cover-image" src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="{{route('event-detail', ['eventId' => $event->id])}}"
                                                            title="{{$event->name}}">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <strong> {{$event->startTime}}</strong>
                                                        </div>
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->minPrice()}} VNĐ</strong>
                                                        </div>
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->location->place}} - {{$event->location->city}}</span>
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
                    @endforeach
                    @endif
                    </div>
{{--                    <div class="row">{{$conferenceListEvent->links()}}</div>--}}
                </div>
            </div>
        </div>

@endsection('content')
