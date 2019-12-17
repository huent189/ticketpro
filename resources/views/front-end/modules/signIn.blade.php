@extends('front-end.layout.master')
@push('css')
<link rel="stylesheet" href="/css/style-sign-in.css">
<link rel="stylesheet" href="/css/sign-in-res.css">
@endpush
@section('pageTitle', 'TicketPro: SignIn')
@section('content')
<div class="main main-sign-in">
                <form action="{{route("admin.auth.loginadmin")}}" method="post">
                    {{csrf_field()}}
                    <div class="title"><h1>LOG IN</h1></div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Admin Email</label>
                              <div class="col-sm-10">
                                    <input type="email" class="form-control" id="username" placeholder="Admin Email" name="email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                              </div>
                             
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                      </form>
                     
        </div>


@endsection('content')