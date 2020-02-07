@extends('user.blade.user-detail.layout.master')
@section('pageTitle', 'TicketPro:Create Event')
@push('css')
<link href="/css/user/user-detail/create-event.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="/js/user/user-detail/create-event.js"></script>
@endpush
@section('content')
<div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Tạo sự kiện mới
                </div>
            </div>  
        </div>
    </div> 
<form action="{{Route('event.store')}}" method="post" class="tab-content" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="main-card mb-3 card">
            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Thông tin tạo sự kiện mới
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">1. Thông tin sự kiện</h5>
                                <div class="image_event">
                                    <div class="position-relative form-group col-12-md flex_image">
                                        <img id="cover_image" src="http://placehold.it/300x300" height="300" width="300" alt="Ảnh bìa sự kiện" />
                                        <div class="">Tải ảnh bìa lên</div>
                                        <input name="coverImage" id="input_cover_image" type="file" class="form-control-file" >
                                    </div>
                                    <div class="position-relative form-group col-12-md flex_image">
                                        <img id="ticket_map" src="http://placehold.it/300x300" height="300" width='300' alt="Sơ đồ chỗ ngồi" />
                                        <div class="">Tải sơ đồ chỗ ngồi lên</div>
                                        <input name="ticketMap" id="input_ticket_map" type="file" class="form-control-file" >
                                    </div>
                                </div>
                                <div class="position-relative form-group"><label for="exampleEmail" class="">Tên sự kiện</label><input name="eventName" placeholder="eg: Hòa Âm Ánh Sáng" type="text" class="form-control" ></div>
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Thành phố</label><select name="city" class="form-control">
                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
                                    <option value="Hà Nội">Tp.Hà Nội</option>
                                    <option value="Hồ Chí Minh">TP HCM</option>    
                                    <option value="An Giang">An Giang</option>
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                    <option value="Đắk Nông">Đắk Nông</option>
                                    <option value="Điện Biên">Điện Biên</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Hòa Bình">Hòa Bình</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                    <option value="Phú Yên">Phú Yên</option>
                                </select>
                                </div>
                                <div class="position-relative form-group"><label for="examplePassword" class="">Địa điểm</label><input name="place" placeholder="eg: Trung tâm hội nghị quốc gia" type="text" class="form-control" ></div>
                                <div class="position-relative form-group"><label for="examplePassword" class="">Địa chỉ chi tiết</label><input name="fullAddress" placeholder="eg: Phạm Hùng, Mễ Trì, Nam Từ Liêm, Hà Nội 129408" type="text" class="form-control" ></div>
                                <div class="position-relative form-group"><label for="exampleSelectMulti" class="">Loại sự kiện</label><select name="eventType" class="form-control">
                                    <option value = "music">Âm nhạc</option>
                                    <option value = "sport">Thể thao</option>
                                    <option value = "conference">Hội nghị</option>
                                </select></div>
                                <div class="position-relative form-group"><label for="exampleText" class="">Mô tả sự kiện</label><textarea name="eventDescription"  class="form-control" placeholder="Sử dụng <br> để xuống dòng"></textarea></div>
                            </div>
                            <div class="card-body"><h5 class="card-title">** Thông tin nhà tổ chức sự kiện</h5>

                                <div class="position-relative form-group col-12-md flex_image">
                                    <img id="organizer_image" src="http://placehold.it/300x300" height="150" width="150" alt="Ảnh bìa sự kiện" />
                                    <div class="">Ảnh đại diện</div>
                                    <input name="organizerAvatar" id="input_organizer_avatar" type="file" class="form-control-file" >
                                </div>
                                <div class="position-relative form-group"><label for="exampleFile" class="">Tên nhà tổ chức</label><input name="organizerName"  type="text" class="form-control-file" ></div>
                                <div class="position-relative form-group"><label class="">Website</label><input name="organizerWeb" id="organizer_website" type="text" class="form-control-file" ></div>
                                <div class="position-relative form-group"><label for="exampleText" class="">Giới thiệu</label><textarea name="organizerDescription"  class="form-control" placeholder="Sử dụng <br> để xuống dòng"></textarea></div>
                                <h5 class="card-title"><sub>**Thông tin liên hệ</sub></h5>
                                <div class="position-relative form-group"><label  class="">Số điện thoại</label><input name="organizerPhone"  type="phone" class="form-control-file" ></div>
                                <div class="position-relative form-group"><label  class="">Email</label><input name="organizerEmail"  type="email" class="form-control-file" ></div>



                            </div>
                            <div class="card-body"><h5 class="card-title">** Thông tin thanh toán <div><sub>Tiền bán vé sẽ được chuyển sau khi sự kiện kết thúc</sub></div></h5>
                                <div class="position-relative form-group"><label class="">Chủ tài khoản</label><input name="organizerBankAccName"  type="text" class="form-control-file" ></div>
                                <div class="position-relative form-group"><label class="">Số tài khoản</label><input name="organizerBankAccNum"  type="text" class="form-control-file" ></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            
                            <div class="card-body ">
                                <div class="title">
                                    <h5 class="card-title event-time-title">2. Thời gian</h5>
                                </div>
                                <h5 class="card-title ">*** Thời gian sự kiện</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label  class="">Từ</label><input name="timeStart"  type="time" class="form-control" ></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label  class="">Ngày</label><input name="dateStart"   type="date" class="form-control" ></div>
                                    </div>                            
                                </div>
                                <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label class="">Đến</label><input name="timeEnd"   type="time" class="form-control" ></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label class="">Ngày</label><input name="dateEnd"   type="date" class="form-control" ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title ">*** Thời gian bán vé</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label  class="">Từ</label><input name="timeStartSelling"  type="time" class="form-control" ></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label  class="">Ngày</label><input name="dateStartSelling"   type="date" class="form-control" ></div>
                                    </div>                            
                                </div>
                                <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Đến</label><input name="timeEndSelling"   type="time" class="form-control" ></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Ngày</label><input name="dateEndSelling"   type="date" class="form-control" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="title">
                                    <h5 class="card-title event-time-title">3. Các loại vé</h5>
                                    <span id="btn-add-ticket" class="btn"><i class="fas fa-plus"></i></span>
                                </div>
                                <div  id="tickets-container">
                                    <div class="card-shadow-primary border mb-3 card card-body border-primary ticket-body">
                                        <div class="row-header">
                                            <div class="title-ticket"><h6> Vé sự kiện</h6></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label  class="">Tên vé</label><input name="ticketName[]"  type="text" class="form-control" ></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group"><label  class="">Giá vé</label><input name="ticketPrice[]" placeholder="(VNĐ)" type="text" class="form-control" ></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group"><label  class="">Số vé</label><input name="ticketNum[]"   type="number" class="form-control" ></div>
                                            </div> 
                                            <div class="position-relative form-group col-md-12"><label class="">Lợi ích</label><textarea name="benefit[]"  class="form-control" placeholder="Mỗi lợi ích trong một cặp <li> </li>" ></textarea></div>
                                            </div>                           
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="d-block text-right card-footer">
                            <input type="submit" class="btn-wide btn btn-success" value="Tạo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

