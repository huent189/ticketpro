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
                    <li class="list-group">
                        <h5>1. Thông tin sự kiện</h5>
                    </li>
                    <li class="list-group" >
                        <h5>2. Thời gian và loại vé</h5>
                    </li>
                    <li class="list-group" style=" background-color: white; color:black">
                        <h5>3. Thông tin thanh toán</h5>
                    </li>
                </ul>
            </div>
        </div>
        <div class="side-right">
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
                                      <button type="submit" >Lưu vào tài khoản</button>
                            </form>
                        
                        </div>
                        <div class="save-continue">
                                <div class="btn-group" role="group">
                                        <button type="button" class="btn">Lưu lại</button>
                                        <button type="button" class="btn">Hoàn tất</button>
                                </div>
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
@endsection('content')