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
                    <div class="component-toolbar"><a href="#">CREATE EVENT</a></div>
                </div>
                <div class="search-form">
                    <input type="text" placeholder="Search..">
                    <div class="icon-search"></div>
                    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" style = "background-color: rgb(229, 91, 0); border: none;"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 150px;">
                              <a class="dropdown-item" href="#">Quản lý trang</a>
                              <a class="dropdown-item" href="#">Nhật ký hoạt động</a>
                              <a class="dropdown-item" href="#">Cài đặt</a>
                              <a class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                    </div>     
                </div>
                @if(Auth::check())
                    <div class="sign-up-in">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle text-bold" style = "background-color: rgb(229, 91, 0); border: none;"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 150px;">
                                <a class="dropdown-item" href="#">Quản lý trang</a>
                                <a class="dropdown-item" href="#">Nhật ký hoạt động</a>
                                <a class="dropdown-item" href="#">Cài đặt</a>
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

<!-- <div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse hmenu">
                <ul class="nav navbar-nav ">
                    <li id="homepage123"><a href="/">Trang chủ</a></li>
                    <li id="shop"><a href="{{url('products/all')}}">Cửa hàng</a></li>
                    <li id="cart"><a href="/gio-hang">Giỏ hàng</a></li>
                    <li id="payment"><a href="/dat-hang">Thanh toán</a></li>
                    <li id="blog"><a href="/blog">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> End mainmenu area -->
