@push('css')
<link rel="stylesheet" href="/css/main-left.css">
@endpush
<div class="side-left">
    <div class="toolbar">
        <ul class="list">
            <li class="list-group" ><a href="{{route('profile')}}"><h4 style ="font-size: 18px;" >Thông tin cá nhân</h4></a></li>
            <li class="list-group" ><a href="{{route('create-event')}}"><h4 style ="font-size: 18px;">Tạo sự kiện mới</h4></a></li>
            <li class="list-group" ><a href="{{route('buyHistory')}}"><h4 style ="font-size: 18px;">Sự kiện đã mua vé</h4></a></li>
            <li class="list-group"><a href="{{route('eventList')}}"><h4 style ="font-size: 18px;">Sự kiện của tôi</h4></a></li>
        </ul>
    </div>
</div>
