@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: buyHistory')
@push('css')
<link rel="stylesheet" href="/css/CreateEvent1.css">
<link rel="stylesheet" href="/css/buyHistory.css">
@endpush

@section('content')
<div class="wrapper">
    @include('front-end.layout.menu-left-create-event')
    <div class="right">
    <h1>Chi tiết sự kiện của bạn</h1>
        @if($totalMoney==0)
            <h1>Sự kiện chưa có doanh thu</h1>
        @else
            <h1>Tổng Doanh Thu: {{$totalMoney}} VNĐ</h1>
        @endif

    <table class="table table-bordered" style = "width:96%;"> 
    <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Loại vé</th>
      <th scope="col">Giá vé / 1 vé</th>
      <th scope="col">Số lượng đã bán ra</th>
      <th scope="col">Số lượng còn lại</th>
      <th scope="col">Tổng số tiền thu được</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tickets as $ticket)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$ticket->type}}</td>
      <td>{{$ticket->price}} đồng</td>
      <td>{{$ticket->total - $ticket->numberAvailable}}</td>
      <td>{{$ticket->numberAvailable}}</td>
      <td>{{($ticket->total - $ticket->numberAvailable)*$ticket->price}} đồng</td>
    </tr>
    @endforeach
  </tbody>
    </table>

    </div>
</div>
@endsection