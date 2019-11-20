@extends('front-end.layout.master')
@section('pageTitle', 'TICKETPRO:Home')
@section('content')
<div class="main">
            <div class="container">
                <div class="main-category">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach($slide as $event)
                                    <div class="carousel-item active">
                                        <img class="d-block " src={{$event->image }} width="1100" height="300" alt="First slide">
                                    </div>


                                @endforeach
{{--                              <div class="carousel-item active">--}}
{{--                                <img class="d-block " src="./Image/Ticket/542AB8.jpg" width="1100" height="300" alt="First slide">--}}
{{--                              </div>--}}
{{--                              <div class="carousel-item">--}}
{{--                                <img class="d-block " src="/Image/Ticket/8D0882.jpg" width="1100" height="300" alt="Second slide">--}}
{{--                              </div>--}}
{{--                              <div class="carousel-item">--}}
{{--                                <img class="d-block " src="/Image/Ticket/AA0610.jpg" width="1100" height="300" alt="Third slide">--}}
{{--                              </div>--}}
{{--                              <div class="carousel-item">--}}
{{--                                <img class="d-block " src="/Image/Ticket/E84534.jpg" width="1100" height="300" alt="Third slide">--}}
{{--                              </div>--}}
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                </div>
                <div class="category">
                    <div  class="title"><a href={{url('sport')}}>SPORT</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @foreach($sportListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-1"><img src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="https://ticketbox.vn/event/chay-vi-trai-tim-run-for-the-heart-2019-77019?source=home_hot_1"
                                                            title="CHẠY VÌ TRÁI TIM / RUN FOR THE HEART 2019" target="_blank">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->ticketClasses->first()->price}} VNĐ</strong>
                                                        </div>
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->location->city}}</span>
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
                    </div>
                </div>
                <div class="category">
                    <div class="title"><a href={{url('conference')}}>MUSIC</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @foreach($musicListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-3"><img src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="https://ticketbox.vn/event/chay-vi-trai-tim-run-for-the-heart-2019-77019?source=home_hot_1"
                                                            title="CHẠY VÌ TRÁI TIM / RUN FOR THE HEART 2019" target="_blank">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->price}} VNĐ</strong>
                                                        </div>
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->place}}</span>
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
                    </div>
{{--                    <div class="row">{{$musicListEvent->links()}}</div>--}}
                </div>
                <div class="category">
                    <div class="title"><a href={{url('conference')}}>CONFERENCE</a></div>
                    <div class="dash"></div>
                    <div class="content">
                    @foreach($conferenceListEvent as $event)
                    <div class="component-ticket">
                            <div class="img item-5"><img src={{$event->image}} alt=""></div>
                            <div class="text">
                                <div class="price">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="padding-10">
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell event-title">
                                                        <a href="https://ticketbox.vn/event/chay-vi-trai-tim-run-for-the-heart-2019-77019?source=home_hot_1"
                                                            title="CHẠY VÌ TRÁI TIM / RUN FOR THE HEART 2019" target="_blank">
                                                            {{$event->name}}
                                                        </a>
                                                    </div>
                                                    <div class="table-cell card-right-block">
                                                    </div>
                                                </div>
                                                <div class="table w-100 margin-bottom-0">
                                                    <div class="table-cell">
                                                        <div class="event-price w-100">
                                                            <span class="color-6">Từ</span> <strong> {{$event->price}} VNĐ</strong>
                                                        </div>
                                                        <div class="event-tags w-100">
                                                            <div class="tag-venues">
                                                                <span class="tag-venue smooth-trans  uppercase">{{$event->place}}</span>
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

                    </div>
{{--                    <div class="row">{{$conferenceListEvent->links()}}</div>--}}
                </div>
            </div>
        </div>

@endsection('content')
