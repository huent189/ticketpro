@extends('admin.layout.master')
@section('pageTitle', 'TicketPro:Selling events')
@push('css')

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
            <div>Các sự  kiện đang được bán: 
            </div>
        </div>  
    </div>
</div> 
<div class="main-card mb-3 card">
        <table class="mb-0 table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên sự kiện</th>
                <th>Ban tổ chức</th>
                <th>Thời gian bắt đầu</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <a href="#">Mark</a>    
                </td>
                <td>
                    <a href="#">Hà Nội Event</a>    
                </td>
                <td>Otto</td>
                <td>
                    <span class="btn"><i class="fas fa-trash-alt"></i></span>                                                          
                    <span class="btn"><i class="fas fa-check-circle"></i></span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection