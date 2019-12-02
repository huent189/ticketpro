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
                    <li class="list-group" style=" background-color: white; color:black">
                        <h5>2. Thời gian và loại vé</h5>
                    </li>
                    <li class="list-group">
                        <h5>3. Thông tin thanh toán</h5>
                    </li>
                </ul>
            </div>
        </div>
        <div class="side-right">

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
                <div class="save-continue">
                        <div class="btn-group" role="group">
                                <button type="button" class="btn">Lưu lại</button>
                                <button type="button" class="btn">Tiếp tục</button>
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