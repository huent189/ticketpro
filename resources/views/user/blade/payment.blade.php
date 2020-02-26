@extends('user.layout.master')
@section('pageTitle', 'Payment')
@push('metadata')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
@endpush
@push('css')
    <link href="/css/user/event-detail/payment.css" rel="stylesheet"/>
    <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">  
@endpush
@push('scripts')
    <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
@endpush
@section('content')
<div class="container mgt140 mh673">
    <div class="booking-infor">
        <h3>Thông tin đơn hàng</h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Loại vé</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                </tr>
                <tr>
                <td>Tổng tiền</td>
                <td></td>
                <td></td>
                <td>500000000 VNĐ</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h3>Thông tin thanh toán và nhận vé</h3>
    <div class="table-responsive">
        <form action="/vnpay_php/vnpay_create_payment.php" id="create_form" method="post">       
            <div class="form-group">
                <label for="InputTen">Họ Tên</label>
                <input type="text" class="form-control" placeholder="Nhập tên" name="booking_first_name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Vé sẽ được chuyển về mail này. Vui lòng viết đúng Email" name="booking_email">
            </div>
            <div class="form-group">
                <label for="InputTen">Số điện thoại</label>
                <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="booking_phone">
            </div>
            <div class="form-group">
                <label for="bank_code">Ngân hàng</label>
                <select name="bank_code" id="bank_code" class="form-control">
                    <option value="">Không chọn</option>
                    <option value="NCB"> Ngan hang NCB</option>
                    <option value="AGRIBANK"> Ngan hang Agribank</option>
                    <option value="SCB"> Ngan hang SCB</option>
                    <option value="SACOMBANK">Ngan hang SacomBank</option>
                    <option value="EXIMBANK"> Ngan hang EximBank</option>
                    <option value="MSBANK"> Ngan hang MSBANK</option>
                    <option value="NAMABANK"> Ngan hang NamABank</option>
                    <option value="VNMART"> Vi dien tu VnMart</option>
                    <option value="VIETINBANK">Ngan hang Vietinbank</option>
                    <option value="VIETCOMBANK"> Ngan hang VCB</option>
                    <option value="HDBANK">Ngan hang HDBank</option>
                    <option value="DONGABANK"> Ngan hang Dong A</option>
                    <option value="TPBANK"> Ngân hàng TPBank</option>
                    <option value="OJB"> Ngân hàng OceanBank</option>
                    <option value="BIDV"> Ngân hàng BIDV</option>
                    <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                    <option value="VPBANK"> Ngan hang VPBank</option>
                    <option value="MBBANK"> Ngan hang MBBank</option>
                    <option value="ACB"> Ngan hang ACB</option>
                    <option value="OCB"> Ngan hang OCB</option>
                    <option value="IVB"> Ngan hang IVB</option>
                    <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Popup</button>
            <button type="submit" class="btn btn-default">Thanh toán Redirect</button>
        </form>
    </div>
    <p>
        &nbsp;
    </p>
</div>  
<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
<script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
<script type="text/javascript">
    $("#btnPopup").click(function () {
        var postData = $("#create_form").serialize();
        var submitUrl = $("#create_form").attr("action");
        $.ajax({
            type: "POST",
            url: submitUrl,
            data: postData,
            dataType: 'JSON',
            success: function (x) {
                if (x.code === '00') {
                    if (window.vnpay) {
                        vnpay.open({width: 768, height: 600, url: x.data});
                    } else {
                        location.href = x.data;
                    }
                    return false;
                } else {
                    alert(x.Message);
                }
            }
        });
        return false;
    });
</script>
@endsection