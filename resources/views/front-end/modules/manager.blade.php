@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: manager')
@section('content')
<div class="wrapper">
        <div class="header">
            <div class="container-header">
                <div class="logo"></div>
                <div class="title">
                    <div class="component-title"><h2>TicketPro management</h2></div>  
                </div>
                <div class="search-form">
                    <input type="text" placeholder="Search..">
                    <div class="icon-search"></div>
                </div>
            </div>
        </div>
       <div class="main">
            <div id="chart-all-ticket" ></div>
            <div id="chart-all-total"></div>
        <div class="Ticket-seller">
            <div class="title" >
                <h3>Thông tin người bán trên trang Ticket Pro</h3>
            </div>
            <div class="Ticket-seller-content">
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Vé sự kiện đang bán</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Thế Anh</td>
                                <td>KPOP SUPER CONCERT IN HANOI 2020</td>
                               
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Chào mừng Mùa Lễ hội - Holiday Celebration</td>
                                
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Concert: "HOLY NIGHT" by Saigon Classical</td>
                               
                              </tr>
                            </tbody>
                          </table>
            </div>
           
        </div>
    </div>
    @endsection('content')