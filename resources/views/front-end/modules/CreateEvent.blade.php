@section('pageTitle', 'TicketPro: CreateEvent1')
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
        <div class="side-right">
            <div class="banner-right">
                <form>
                    <div class="form-group">
                        <a href="">
                            <div class="noti"> Tải ảnh bìa lên <br> kích thước tối ưu:<br>1560 x 600px (không quá 1MB)
                            </div>
                        </a>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
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
                                        <input type="email" class="form-control"
                                            placeholder="Cập nhật thông tin sự kiện tại đây!">
    
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
    
                                    <div class="form-group row">
                                        <label for="inputPassword" style="width: 100px;" class="col-sm-5 col-form-label">Số
                                            điện
                                            thoại</label>
                                        <div class="col-sm-10">
                                            <input type="password" style="width:400px" class="form-control"
                                                id="inputPassword" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-5 col-form-label">Thư điện tử</label>
                                        <div class="col-sm-10">
                                            <input type="password" style="width:440px" class="form-control"
                                                id="inputPassword" placeholder="Thư điện tử">
                                        </div>
                                    </div>
                                </form>
    
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
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <span>&nbsp; Giờ &nbsp;</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group">
                                <span>&nbsp; Đến &nbsp;</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <span> &nbsp; Giờ &nbsp;</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
    
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
    
    
                <div class="side-right-3">
                    <div class="info-customer">
                        <h2>3. Thông tin thanh toán</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thông tin tài khoản của bạn</h5>
                            <h6 class="card-subtitle mb-2 text-muted">TickPro sẽ chuyển tiền về tài khoản của bạn</h6>
                            <form>
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
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Lấy hóa đơn đỏ</label>
                                </div>
    
                            </form>
    
                        </div>
                    </div>
    
                </div>
                <div class="save-continue">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn">Lưu lại</button>
                        <button type="button" class="btn">Hoàn tất</button>
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
    
    </div>
@endsection('content')