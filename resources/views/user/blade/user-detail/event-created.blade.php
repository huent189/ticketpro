@extends('user.blade.user-detail.layout.master')
@section('pageTitle', 'TicketPro:Ticket bought')
@push('css')
<link href="css/user/user-detail/ticket-bought.css" rel="stylesheet">
<link href="css/user/user-detail/event-created.css" rel="stylesheet">
@endpush

@push('scripts')

@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Các sự kiện đang bán vé: 0
                </div>
            </div>  
            <div class="mb-2 mr-2 btn btn-info">
                <i class="fas fa-plus"></i>
            </div>
        </div>
    </div> 
    <div class="main-events-bought">
        <div class="selling-events">
            <div class="title">
                Sự kiện đang bán
            </div>
            <div class="ticket-detail">
                <span class= 'r-date'>Tháng 2 07</span>
                <span class= 'r-line'></span>
                <div class="event-detail">
                    <div class="logo-left">
                        <a href="#">
                            <img src="https://static.ticketbox.vn/Upload/eventlogo/2019/07/11/8B5840.jpg" alt="" class="logo">
                        </a>
                    </div>
                    <div class="event-info">
                        <div class="event-title">
                            Tường leo núi Vertical Adventures | DaLat SufferFest™ 2020
                        </div>
                        <div class="event-time">
                            <i class="fas fa-clock"></i>
                            T6, 28 Tháng 2 2020 8:00 AM
                        </div>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Cầu Đất Farm - Truong Tho Village, Tram Hanh Commune, Da Lat City, Lam Dong Province., Thành Phố Đà Lạt, Tỉnh Lâm Đồng
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="awaiting-approval-events">
        <div class="title">
                Sự kiện đang chờ xét duyệt
            </div>
            <div class="ticket-detail">
                <span class= 'r-date'>Tháng 2 07</span>
                <span class= 'r-line'></span>
                <div class="event-detail">
                    <div class="logo-left">
                        <a href="#">
                            <img src="https://static.ticketbox.vn/Upload/eventlogo/2019/07/11/8B5840.jpg" alt="" class="logo">
                        </a>
                    </div>
                    <div class="event-info">
                        <div class="event-title">
                            Tường leo núi Vertical Adventures | DaLat SufferFest™ 2020
                        </div>
                        <div class="event-time">
                            <i class="fas fa-clock"></i>
                            T6, 28 Tháng 2 2020 8:00 AM
                        </div>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Cầu Đất Farm - Truong Tho Village, Tram Hanh Commune, Da Lat City, Lam Dong Province., Thành Phố Đà Lạt, Tỉnh Lâm Đồng
                        </div>
                    </div>
                    <div class="action">
                        <div class=" action delete-action">
                            <a href="#"><i class="fas fa-trash-alt"></i></a>                                
                        </div>                          
                        <div class="action edit-action">
                            <a href="#"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection