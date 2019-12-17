@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: CreateEvent')
@push('css')
    <link rel="stylesheet" href="/css/CreateEvent1.css">
    <link rel="stylesheet" href="/css/CreateEvent2.css">
    <link rel="stylesheet" href="/css/CreateEvent3.css">
@section('content')
    <?php
    $message = Session::get('message');
    if($message)
        {
            echo $message;
            Session::put('message',null);
        }
    ?>
    <div class="wrapper">
        @include('front-end.layout.menu-left-create-event')
        <form action="{{route('store-event')}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="side-right">
                <div class="banner-right">
                    <div class="form-group">
                        <a href="">
                            <div class="noti"> Tải ảnh bìa lên <br> kích thước tối ưu:<br>1560 x 600px (không quá 1MB)
                            </div>
                        </a>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                    </div>
                </div>
                <div class="info-event">
                    <div class="information-Event">
                        <h2>1. Thông tin sự kiện</h2>
                    </div>
                    <div class="event-name">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">Tên sự kiện</h3>
                                <div class="space"></div>
                                <input class="form-control form-control-lg" type="text" placeholder="TÊN SỰ KIỆN" name="eventName" required>

                            </div>
                        </div>
                    </div>
                    <div class="location">
                        <div class="event-name">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0">Tên địa điểm</h3>
                                    <div class="space"></div>
                                    <div class="form-group">
                                        <label>Thành Phố</label>
                                        <input type="text" class="form-control" placeholder="eg: Hà Nội" name="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa Điểm</label>
                                        <input type="text" class="form-control" placeholder="eg: Trường đại học Công Nghệ" name="place" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ chi tiết</label>
                                        <input type="text" class="form-control" placeholder="eg: 144 Xuân Thủy, Cầu Giấy, Hà Nội" name="fullAddress" required>
                                    </div>
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
                                    <div class="form-group">
                                        <label>Nhập loại sự kiện muốn tổ chức</label>
                                        <select name="categoryName" class="form-control">
                                            <option value="sport">Sport</option>
                                            <option value="music">Music</option>
                                            <option value="conference">Conference</option>
                                        </select>
{{--                                        <input type="text" class="form-control" placeholder="Loại sự kiện" name="categoryName">--}}

                                    </div>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               placeholder="Cập nhật thông tin sự kiện tại đây!" name="eventDescription" required>

                                    </div>
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
                                    <div style="display:flex;">
                                        <div class="form-group row">
                                            <label for="inputPassword" style="width: 100px;" class="col-sm-5 col-form-label">Số điện thoại</label>
                                            <div class="col-sm-10">
                                                <input type="text" style="width:400px" class="form-control"
                                                       id="inputPassword" placeholder="Số điện thoại" name="phoneNumber" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-5 col-form-label">Thư điện tử</label>
                                            <div class="col-sm-10">
                                                <input type="email" style="width:440px" class="form-control"
                                                       id="inputPassword" placeholder="Thư điện tử" name="email" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-2">
                        <div class="time-typeTicket">
                            <h2>2. Thời gian và loại vé</h2>
                        </div>
                        <div class="card" style="width: 55rem;">
                            <div class="card-body">
                                <div class="Title">
                                    <h4>Thời gian</h4>
                                </div>
                                <label for="basic-url">Ngày sự kiện</label>
                                <div class="input-group " style="margin-bottom: 10px;">
                                    <span style="margin-right: 10px;">&nbsp; Từ &nbsp;</span>
                                    <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="startTime" required>
                                </div>
                                <div class="input-group">
                                    <span>&nbsp; Đến &nbsp;</span>
                                    <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="endTime" required>
                                </div>
                                <div class="Title" id="title-ticket" style="margin-top: 20px;">
                                    <h4>Loại vé</h4>
                                </div>
                                <div class="media" style="margin-bottom: 10px">
                                    <div class="media-body">
                                        <p class="mt-0">Tên vé</p>
                                        <div class="space"></div>
                                        <input class="form-control form-control-lg" type="text" placeholder="&nbsp;Tên loại vé" required>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Giá vé (VND) <span><br><br></span> <input type="number" placeholder="0" name="price" required></td>
                                        <td>Tổng số lượng vé <span><br><br></span> <input type="number" placeholder="0" name="numOfTicket"required></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày bắt đầu bán</td>
                                        <td>
                                            <div class="input-group " style="margin-bottom: 10px;">
                                                <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="timeStartSell"required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Ngày kết thúc bán</td>
                                        <td>
                                            <div class="input-group " style="margin-bottom: 10px;">
                                                <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="timeEndSell" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Thêm mô tả vé</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                                        </div>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="btn" id="add-ticket-class">Thêm</div>
                            </div>
                        </div>
                    </div>

                    @if(!$existOrganizers)
                    <div class="side-right-3">
                        <div class="info-customer">
                            <h2>3. Thông tin thanh toán</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Thông tin tài khoản của bạn</h5>
                                <h6 class="card-subtitle mb-2 text-muted">TicketPro sẽ chuyển tiền về tài khoản của bạn</h6>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Chủ tài khoản</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Chủ tài khoản" name="bankAccountName"required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Số tài khoản</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Số tài khoản" name="bankAccountNumber" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Tên ngân hàng" name="bankName" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Chi nhánh</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Chi nhánh" name="bankBranch" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endif
                    <div class="save-continue">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn">Hoàn tất</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
    <script href="js/create-event.js">

    </script>
@endsection('content')