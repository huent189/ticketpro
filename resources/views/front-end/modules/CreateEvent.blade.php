@section('pageTitle', 'TicketPro: CreateEvent1')
@section('content')
<div class="wrapper">
       <div class="side-left">
       <div class="side-top top-bar">
           <div class="logo"></div>
           <div class="acc">
               <div class="text"> <h5>Anh</h5></div>
               <div class="avatar"></div>
           </div>
       </div>
       <div class="toolbar">
            <ul class="list">
                    <li class="list-group" style=" background-color: white; color:black"><h5>1. Thông tin sự kiện</h5></li>
                    <li class="list-group"><h5>2. Thời gian và loại vé</h5></li>
                    <li class="list-group"><h5>3. Thông tin thanh toán</h5></li>
            </ul>
       </div>
       </div>
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