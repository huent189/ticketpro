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
    <h1>Chi tiết từng loại vé bạn đã mua cho sự kiện {{$event->name}}</h1>
        <h1> Tổng chi phí: {{$totalMoney}} VNĐ</h1>
    <table class="table table-bordered" style = "width:96%;"> 
    <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Loại vé</th>
      <th scope="col">Giá vé / 1 vé</th>
      <th scope="col">Số lượng</th>
      <th scope="col">chi phí</th>
    </tr>
  </thead>
  <tbody>
  @foreach($ticket as $ticketClasses)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$ticketClasses->type}}</td>
        <td>{{$ticketClasses->price}} đồng</td>
      <td>{{$ticketClasses->totalTicket}}</td>
      <td>{{ $ticketClasses->price * $ticketClasses->totalTicket }} đồng</td>
    </tr>
    @endforeach
  </tbody>
    </table>
    </div>
</div>
@endsection