@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: CreateEvent1')
@section('content')
    <div class="wrapper">
        @include('front-end.layout.menu-left-create-event')
        <div class="side-right">
            <div class="banner-right">
                <form>
                    <div class="form-group">
                        <a href="">
                            <div class="noti"> Tải ảnh bìa lên <br> kích thước tối ưu:<br>1560 x 600px (không quá 1MB) </div>
                        </a>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
            </div>
            <div class="info-event">
                <div class="event-name">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mt-0">Tên sự kiện</h3>
                            <div class="space"></div>
                            <input class="form-control form-control-lg" type="text" placeholder="TÊN SỰ KIỆN">

                        </div>
                    </div>
                </div>
                <div class="location">
                    <div class="event-name">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">Tên địa điểm</h3>
                                <div class="space"></div>
                                <form>
                                    <div class="form-group">
                                        <label>Địa chỉ chi tiết</label>
                                        <input type="email" class="form-control" placeholder="Địa chỉ chi tiết">
                                        <small id="emailHelp" class="form-text text-muted">Bạn nhập lần lượt từ số nhà, ngõ,
                                            phường, quận/huyện, thành phố (Cách nhau bởi dấu ",")</small>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-category">
                    <div class="event-name">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">Chọn loại sự kiện</h3>
                                <div class="space"></div>
                                <form>
                                    <div class="form-group">
                                        <label>Nhập loại sự kiện muốn tổ chức</label>
                                        <input type="email" class="form-control" placeholder="Loại sự kiện">

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-event">
                    <div class="event-name">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">Thông tin sự kiện</h3>
                                <div class="space"></div>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Cập nhật thông tin sự kiện tại đây!">

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="event-name">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">Thông tin liên lạc</h3>
                                <div class="space"></div>
                                <form style="display:flex;">

                                    <div class="form-group row" style="width: 500px;">
                                        <label for="inputPassword" style="width: 100px;" class="col-sm-5 col-form-label">Số điện
                                            thoại</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="width: 500px;">
                                        <label for="inputPassword" class="col-sm-5 col-form-label">Thư điện tử</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Thư điện tử">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="save-continue">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn">Lưu lại</button>
                        <button type="button" class="btn">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('content')
