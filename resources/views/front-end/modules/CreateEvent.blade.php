@section('pageTitle', 'TicketPro: CreateEvent1')
@push('css')
<link rel="stylesheet" href="/css/CreateEvent1.css">
<link rel="stylesheet" href="/css/CreateEvent2.css">
<link rel="stylesheet" href="/css/CreateEvent3.css">
@endpush
@section('content')
<div class="wrapper">
        <div class="side-left">
            <div class="side-top top-bar">
                <div class="logo"></div>
                <div class="acc">
                    <div class="text">
                        <h5>Anh</h5>
                    </div>
                    <div class="avatar"></div>
                </div>
            </div>
            <div class="toolbar">
                <ul class="list">
                    <li class="list-group" style=" background-color: white; color:black">
                        <h5>Tạo sự kiện</h5>
                    </li>
                </ul>
            </div>
        </div>
        <form action="" method="post">
               <div class="side-right">
                <div class="banner-right">
                    <div class="form-group">
                        <a href="">
                            <div class="noti"> Tải ảnh bìa lên <br> kích thước tối ưu:<br>1560 x 600px (không quá 1MB)
                            </div>
                        </a>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
                                <input class="form-control form-control-lg" type="text" placeholder="TÊN SỰ KIỆN" name="event-name">

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
                                        <label>Địa chỉ chi tiết</label>
                                        <input type="email" class="form-control" placeholder="Địa chỉ chi tiết" name="place">
                                        <small id="emailHelp" class="form-text text-muted">Bạn nhập lần lượt từ số nhà, ngõ,
                                            phường, quận/huyện, thành phố (Cách nhau bởi dấu ",")</small>
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
                                        <input type="email" class="form-control" placeholder="Loại sự kiện" name="category-name">

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
                                        <input type="email" class="form-control"
                                               placeholder="Cập nhật thông tin sự kiện tại đây!" name="event-description">

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
                                            <label for="inputPassword" style="width: 100px;" class="col-sm-5 col-form-label">Số
                                                điện
                                                thoại</label>
                                            <div class="col-sm-10">
                                                <input type="password" style="width:400px" class="form-control"
                                                       id="inputPassword" placeholder="Số điện thoại" name="phone-number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-5 col-form-label">Thư điện tử</label>
                                            <div class="col-sm-10">
                                                <input type="password" style="width:440px" class="form-control"
                                                       id="inputPassword" placeholder="Thư điện tử" name="email" >
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
                                <div class="Title" style="margin-top: 20px;">
                                    <h4>Loại vé</h4>
                                </div>
                                <div class="media" style="margin-bottom: 10px">
                                    <div class="media-body">
                                        <p class="mt-0">Tên vé</p>
                                        <div class="space"></div>
                                        <input class="form-control form-control-lg" type="text" placeholder="&nbsp;Tên loại vé">
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Giá vé (VND) <span><br><br></span> <input type="text" placeholder="0"></td>
                                        <td>Tổng số lượng vé <span><br><br></span> <input type="text" placeholder="0"></td>
                                        <td>Số vé tối thiểu trong một đơn hàng <span><br></span> <input type="text"
                                                                                                        placeholder="0"></td>
                                        <td>Số vé tối đa trong một đơn hàng <span><br></span> <input type="text"
                                                                                                     placeholder="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày bắt đầu bán</td>
                                        <td><input type="text" placeholder="&nbsp;ngày bắt đầu"></td>
                                        <td><input type="text" placeholder="&nbsp;giờ bắt đầu"></td>

                                    </tr>
                                    <tr>
                                        <td> Ngày kết thúc bán</td>
                                        <td><input type="text" placeholder="&nbsp;ngày bắt đầu"></td>
                                        <td><input type="text" placeholder="&nbsp;giờ kết thúc"></td>
                                    </tr>
                                    <tr>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Thêm mô tả vé</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="btn-group" style="width:140px; margin-top: 2%;" role="group">
                        <button type="button" class="btn" onclick="duplicated()" style=" background-color: #e55b00; color: white;">Thêm loại vé</button>
                    </div>
                </div>
    
    
                <div class="side-right-3">
                    <div class="info-customer">
                        <h2>3. Thông tin thanh toán</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thông tin tài khoản của bạn</h5>
                            <h6 class="card-subtitle mb-2 text-muted">TickPro sẽ chuyển tiền về tài khoản của bạn</h6>
                            <form>
=======


                    <div class="side-right-3">
                        <div class="info-customer">
                            <h2>3. Thông tin thanh toán</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Thông tin tài khoản của bạn</h5>
                                <h6 class="card-subtitle mb-2 text-muted">TickPro sẽ chuyển tiền về tài khoản của bạn</h6>
>>>>>>> 3d9e6dfb244d209a2002364029b2a556872ffaa1
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Chủ tài khoản</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Chủ tài khoản">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Số tài khoản</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Số tài khoản">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Tên ngân hàng">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Chi nhánh</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Chi nhánh">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="save-continue">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn">Lưu lại</button>
                            <button type="submit" class="btn">Hoàn tất</button>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="logo-footer"></div>
                        <div class="community" style="margin-left: 30%;">
                            <div class="columns-icon">
                                <div class="rows-icon">
                                    <div class="icons item-1"></div>
                                    <div class="icons item-2"></div>
                                </div>
                                <div class="rows-icon">
                                    <div class="icons item-3"></div>
                                    <div class="icons item-4"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    
    </div>
@endsection('content')