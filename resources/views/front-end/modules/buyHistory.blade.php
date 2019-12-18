@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: buyHistory')
@push('css')
    <link rel="stylesheet" href="/css/CreateEvent1.css">
    <link rel="stylesheet" href="/css/buyHistory.css">
@endpush

@section('content')
    <div class="wrapper">
        @include('front-end.layout.menu-left-create-event')
        <ul class="list-unstyled">
            <h2>Các vé đã mua: </h2>
            <li class="media">
                <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min1.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                    <!--Review-->
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                        Donec lacinia congue felis in faucibus.</p>
                </div>
            </li>
            <li class="media my-4">
                <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min2.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-2 font-weight-bold">Tom Brown</h5>
                    <!--Review-->
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star grey-text"> </i>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                        Donec lacinia congue felis in faucibus.</p>
                </div>
            </li>
            <li class="media">
                <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min3.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-2 font-weight-bold">Natalie Doe</h5>
                    <!--Review-->
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star blue-text"> </i>
                    <i class="fas fa-star grey-text"> </i>
                    <i class="fas fa-star grey-text"> </i>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                        Donec lacinia congue felis in faucibus.</p>
                </div>
            </li>
        </ul>
    </div>
@endsection