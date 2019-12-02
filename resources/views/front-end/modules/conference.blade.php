@extends('front-end.layout.master')
@section('pageTitle','TicketPro: Conference')
@section('content')

<div class="main">
    <div class="container">
        <div class="category">
                        <div class="title">CONFERENCE</div>
                        <div class="dash"></div>
                        <div class="content">
                            <table>
                                <tbody>
                                @for($i=0;$i<sizeof($eventList);$i+=2)
                                    <tr>
                                        <td>
                                            <div class="component-ticket">
                                                <div class="img item-3"><img src="{{$eventList[$i]->image}}" alt=""></div>
                                                <div class="text">
                                                    <div class="price">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="padding-10">
                                                                    <div class="table w-100 margin-bottom-0">
                                                                        <div class="table-cell event-title">
                                                                            <a href="{{url('ticket-detail/'.$event->id)}}"
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
                                                                                <span class="color-6">Từ</span> <strong> {{$eventList[$i]->ticketClasses->first()->price}} VNĐ</strong>
                                                                            </div>
                                                                            <div class="event-tags w-100">
                                                                                <div class="tag-venues">
                                                                                    <span class="tag-venue smooth-trans  uppercase">{{$eventList[$i]->location->place}} - {{$eventList[$i]->location->city}}</span>
                                                                                </div>
                    <div class="title">CONFERENCE</div>
                    <div class="dash"></div>
                    <div class="content">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="component-ticket">
                                            <div class="img item-1"></div>
                                            <div class="text">
                                                <div class="price">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="padding-10">
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell event-title">
                                                                        <a href="https://ticketbox.vn/event/chay-vi-trai-tim-run-for-the-heart-2019-77019?source=home_hot_1"
                                                                            title="CHẠY VÌ TRÁI TIM / RUN FOR THE HEART 2019"
                                                                            target="_blank">
                                                                            Pocari Sweat Run 2019
                                                                        </a>
                                                                    </div>
                                                                    <div class="table-cell card-right-block">
                                                                    </div>
                                                                </div>
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell">
                                                                        <div class="event-price w-100">
                                                                            <span class="color-6">Từ</span> <strong>
                                                                                100,000 VNĐ</strong>
                                                                        </div>
                                                                        <div class="event-tags w-100">
                                                                            <div class="tag-venues">
                                                                                <span
                                                                                    class="tag-venue smooth-trans label-default uppercase">Hồ
                                                                                    Chí Minh</span>
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
                                    <td>
                                        <div class="component-ticket">
                                            <div class="img item-1"></div>
                                            <div class="text">
                                                <div class="price">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="padding-10">
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell event-title">
                                                                        <a href="https://ticketbox.vn/event/chay-vi-trai-tim-run-for-the-heart-2019-77019?source=home_hot_1"
                                                                            title="CHẠY VÌ TRÁI TIM / RUN FOR THE HEART 2019"
                                                                            target="_blank">
                                                                            Pocari Sweat Run 2019
                                                                        </a>
                                                                    </div>
                                                                    <div class="table-cell card-right-block">
                                                                    </div>
                                                                </div>
                                                                <div class="table w-100 margin-bottom-0">
                                                                    <div class="table-cell">
                                                                        <div class="event-price w-100">
                                                                            <span class="color-6">Từ</span> <strong>
                                                                                100,000 VNĐ</strong>
                                                                        </div>
                                                                        <div class="event-tags w-100">
                                                                            <div class="tag-venues">
                                                                                <span
                                                                                    class="tag-venue smooth-trans label-default uppercase">Hồ
                                                                                    Chí Minh</span>
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
</div>

  @endsection('content')
