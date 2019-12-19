@push('css')
<link rel="stylesheet" href="/css/TicketPdf.css">
@endpush
@section('content')
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
@endsection