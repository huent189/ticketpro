<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <h1><a href="/"><img src="/Image/icon/logo.png" class="img-reponsive" style="width:100px; height: 100px;"></a></h1>
                </div>
            </div>

            <div class="col-sm-10">
            <div class="toolbar">
                    <div class="component-toolbar"><a href="/sport">SPORT</a></div>
                    <div class="component-toolbar"><a href="/music">MUSIC</a></div>
                    <div class="component-toolbar"><a href="/conference">CONFERENCE</a></div>
                </div>
                <form role="search" action="{{route('search')}}" method="get">
                    <div class="search-form">
                        <input type="text" placeholder="Search.." name="key">
                        <button  class="icon-search"></button>
                    </div>
                </form>

                @if(Auth::check())
                    <div class="sign-up-in">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle text-bold" style = "background-color: rgb(229, 91, 0); border: none;"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 150px;">
                                <a class="dropdown-item" href="{{route('create-event')}}">Tài khoản của tôi</a>
                                <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="sign-up-in">
                        <a class="text-bold" href="{{ url('/auth/redirect/google') }}">GOOGLE SIGN IN</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

