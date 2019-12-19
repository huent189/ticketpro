{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
.wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  
  .wrapper .content-ticket {
    width: 1000px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    border-radius: 5px;
    border: 1px solid #141212;
  }
  
  .wrapper .content-ticket .right {
    margin-top: 2%;
    width: 200px;
    margin-left: -10%;
  }
  
  .wrapper .content-ticket .right .title {
    color: #d1cfcf;
    font-size: 14px;
  }
  
  .wrapper .content-ticket .right .text h2 {
    width: 260px;
    margin-top: 6px;
  }
  
  .wrapper .content-ticket .left {
    width: 200px;
    margin-right: -10%;
  }
  
  .wrapper .content-ticket .left .QRcode {
    background-image: url("/Image/icon/qr-code-2d-code-barcode-information-png-favpng-29frTA2GAPJZCGYKWHvsnED9g.jpg");
    background-size: cover;
    height: 200px;
    margin-top: 22%;
  }    
</style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="content-ticket">
            <div class="right">
                <span class="title" for="event">Tên sự kiện</span>
                <div class="text"><h2>Hòa âm ánh sáng</h2></div>
                <span  class="title" for="event">Địa điểm</span>
                <div class="text"><h2>Thành phố HCM</h2></div>
                <span  class="title" for="event">Thời gian</span>
                <div class="text"><h2> 10:30 ngày 20/11/2019 </h2></div>
                <span  class="title" for="event">Thể loại vé</span>
                <div class="text"><h2>vip</h2></div>
            </div>
            <div class="left">
                <div class="QRcode"></div>
            </div>
        </div>
    </div>
</body>
</html> --}}
<p> Chúc mừng bạn đã đăng ký thành công sự kiện: {{$event->name}} </p>
<p>Sự kiện sẽ được diễn ra tại <b>{{$event->location->place}}</b> vào <b>{{$event->startTime->isoFormat('LLLL')}}</b></p>
<p>Dưới đây là thông tin vé của bạn</p>
@foreach ($attendees as $i => $attendee)
<p>{{$i+1}}. Vé {{$attendee->ticketClass->type}} - Code vé <b>{{$attendee->ticketCode}}</b></p>    
@endforeach