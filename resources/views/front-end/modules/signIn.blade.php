@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: SignIn')
@section('content')
<div class="main main-sign-in">
                <form>
                    <div class="title"><h1>LOG IN</h1></div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">User name</label>
                              <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="User name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                              </div>
                             
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                            <div class="title"><h1>Or</h1></div>
                            <div class="login-f-g">
                                    <div class="facebook"></div>
                                    <div class="google"></div>
                                </div>
                      </form>
                     
        </div>


@endsection('content')