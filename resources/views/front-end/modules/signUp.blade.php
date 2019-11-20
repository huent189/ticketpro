@extends('front-end.layout.master')
@section('pageTitle', 'TicketPro: SignUp')
@section('content')
<div class="main main-sign-up">
                <form>
                    <div class="title"><h1>SIGN UP</h1></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First name</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Last name</label>
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputPassword4">Confirm Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone..">
                                  </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                      </form>
        </div>

@endsection('content')