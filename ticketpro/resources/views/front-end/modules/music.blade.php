@extends('front-end.layout.master')
@section('pageTitle', 'BKSTORE:Shop')
@section('content')
<div class="main">
    <div class="container">
    <div class="category">
                    <div class="title">MUSIC</div>
                    <div class="dash"></div>
                    <div class="content">

                    @foreach ($eventList as $event)
                    <div class="component-ticket">
                            <div class="img item-3">{{$event->image}}</div>
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
                                                            <span class="color-6">Từ</span> <strong> {{$event->ticketClasses->first->price}} VNĐ</strong>
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
                    </div>
                </div>
    </div>
</div>
@endsection('content')
