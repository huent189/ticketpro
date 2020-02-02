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
<form  class="tab-content">
    <div class="main-card mb-3 card">
            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Thông tin tạo sự kiện mới
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm nav btn-group">
                        <a data-toggle="tab" href="#tab-eg1-0" class="btn-shadow btn btn-primary active show">1. Thông tin sự kiện</a>
                        <a data-toggle="tab" href="#tab-eg1-1" class="btn-shadow btn btn-primary show">2. Thời gian sự kiện</a>
                        <a data-toggle="tab" href="#tab-eg1-2" class="btn-shadow btn btn-primary ">3. Các loại vé</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-eg1-0" role="tabpanel">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">1. Thông tin sự kiện</h5>
                                    <div class="position-relative form-group"><label for="exampleFile" class="">Tải ảnh bìa lên</label><input name="file" id="exampleFile" type="file" class="form-control-file"></div>
                                    <div class="position-relative form-group"><label for="exampleFile" class="">Tải sơ đồ chỗ ngồi lên</label><input name="file" id="exampleFile" type="file" class="form-control-file"></div>
                                    <div class="position-relative form-group"><label for="exampleEmail" class="">Tên sự kiện</label><input name="event-name" placeholder="eg: Hòa Âm Ánh Sáng" type="text" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="examplePassword" class="">Địa chỉ</label><input name="location" placeholder="eg: Trung tâm hội nghị quốc gia" type="text" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Thành phố</label><select name="select" class="form-control">
                                        <option>Hà Nội</option>
                                        <option>Đà Nẵng</option>
                                        <option>TP Hồ Chí Minh</option>
                                        <option>Huế</option>
                                        <option>Hưng Yên</option>
                                    </select></div>
                                    <div class="position-relative form-group"><label for="exampleSelectMulti" class="">Loại sự kiện</label><select name="selectMulti" class="form-control">
                                        <option>Âm nhạc</option>
                                        <option>Thể thao</option>
                                        <option>Hội nghị</option>
                                    </select></div>
                                    <div class="position-relative form-group"><label for="exampleText" class="">Mô tả sự kiện</label><textarea name="text"  class="form-control" placeholder="Sử dụng <br> để xuống dòng"></textarea></div>
                                </div>
                                <div class="card-body"><h5 class="card-title">** Thông nhà tổ chức sự kiện</h5>
                                    <div class="position-relative form-group"><label for="exampleFile" class="">Ảnh đại diện</label><input name="organizer_avata"  type="file" class="form-control-file"></div>
                                    <div class="position-relative form-group"><label for="exampleFile" class="">Tên nhà tổ chức</label><input name="organizer_name"  type="text" class="form-control-file"></div>
                                    <div class="position-relative form-group"><label class="">Website</label><input name="file" id="organizer_website" type="text" class="form-control-file"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show" id="tab-eg1-1" role="tabpanel">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body ">
                                    <h5 class="card-title ">*** Thời gian sự kiện</h5>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label  class="">Từ</label><input name="time_start"  type="time" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label  class="">Ngày</label><input name="date_start"   type="date" class="form-control"></div>
                                        </div>                            
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Đến</label><input name="time_end"   type="time" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Ngày</label><input name="date_end"   type="date" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title ">*** Thời gian bán vé</h5>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label  class="">Từ</label><input name="time_start_selling"  type="time" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label  class="">Ngày</label><input name="date_start_selling"   type="date" class="form-control"></div>
                                        </div>                            
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Đến</label><input name="time_end_selling"   type="time" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Ngày</label><input name="date_end_selling"   type="date" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show" id="tab-eg1-2" role="tabpanel">
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
                                                    <div class="position-relative form-group"><label  class="">Tên vé</label><input name="ticket-name[]"  type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label  class="">Giá vé</label><input name="ticket-price[]" placeholder="(VNĐ)" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label  class="">Số vé</label><input name="ticket-sum[]"   type="number" class="form-control"></div>
                                                </div> 
                                                <div class="position-relative form-group col-md-12"><label for="exampleText" class="">Lợi ích</label><textarea name="benefit[]"  class="form-control" placeholder="Mỗi lợi ích trong một cặp <li> </li>"></textarea></div>
                                                </div>                           
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="d-block text-right card-footer">
                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Tạo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

