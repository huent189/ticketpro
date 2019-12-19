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
    <table class="table table-bordered" style = "width:96%;"> 
    <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Loại vé</th>
      <th scope="col">Giá vé</th>
      <th scope="col">Số lượng đã bán ra</th>
      <th scope="col">Số lượng còn lại</th>
      <th scope="col">Tổng số tiền thu được</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Hòa âm ánh sáng</td>
      <td>400.000 VND</td>
      <td>12</td>
      <td>50</td>
      <td>5.000.000 VND</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hòa âm ánh sáng</td>
      <td>400.000 VND</td>
      <td>12</td>
      <td>50</td>
      <td>5.000.000 VND</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Hòa âm ánh sáng</td>
      <td>400.000 VND</td>
      <td>12</td>
      <td>50</td>
      <td>5.000.000 VND</td>
    </tr>
  </tbody>
    </table>
    </div>
</div>
@endsection