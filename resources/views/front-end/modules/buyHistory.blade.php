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
    <h1>Sự kiện bạn đã mua vé</h1>
    <table class="table table-bordered" style = "width:96%;"> 
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Sự kiện</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
               
                <td>
                    <li class="media">
                        <img class="d-flex mr-3 ava" src="/uploads/eventcovers/ABL_10_Saigon_Heat_2019.jpg"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus
                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                vulputate fringilla.
                                Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </li>
                </td>
             
            </tr>
            <tr>
                <th scope="row">2</th>
               
                <td>
                    <li class="media">
                        <img class="d-flex mr-3 ava" src="/uploads/eventcovers/ABL_10_Saigon_Heat_2019.jpg"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus
                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                vulputate fringilla.
                                Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </li>
                </td>
             
            </tr>
            <tr>
                <th scope="row">3</th>
                
                <td>
                    <li class="media">
                        <img class="d-flex mr-3 ava" src="/uploads/eventcovers/ABL_10_Saigon_Heat_2019.jpg"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus
                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                vulputate fringilla.
                                Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </li>
                </td>
           
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection