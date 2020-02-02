<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
						<div class="logo_content">
							<div class="logo_text logo_text_not_ie">TicketPro</div>
							<div class="logo_sub">Booking now!!!</div>
						</div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="{{Route('home')}}">Trang chủ</a></li>
				<li class="menu_item"><a href="#">Âm nhạc</a></li>
				<li class="menu_item"><a href="#">Thể thao</a></li>
				<li class="menu_item"><a href="#">Hội nghị</a></li>
				<li class="menu_item"><a href="news.html">Về chúng tôi</a></li>
			</ul>
        </div>
		<div class="menu_social"> 
			<div class="menu_social_title">Follow uf on Social Media</div>
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <ul>
                <div class="button header_hidden_button"><a href="#">Đăng nhập ngay</a></div>
            </ul>
		</div>
    </div>
    <header class="header" id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col">
						<div id="header1" class="header_top_content d-flex flex-row align-items-center justify-content-start">
							<div>
								<a href="{{Route('home')}}">
									<div class="logo_container d-flex flex-row align-items-start justify-content-start">
										<div class="logo_image"><div><img src="/Images/271-2715869_ticket-svg-two-tickets-icon-png-transparent-png.png" alt=""></div></div>
										<div class="logo_content">
											<div id="logo_text" class="logo_text logo_text_not_ie">TicketPro</div>
											<div class="logo_sub">Booking now!!!</div>
										</div>
									</div>
								</a>	
							</div>
							<div class="header_social ml-auto">
								@if(Auth::check())
								<div class="header-btn-lg pr-0">
									<div class="widget-content p-0">
										<div class="widget-content-wrapper">
											<div class="widget-content-left">
												<div class="btn-group">
													<a aria-haspopup="true" href="{{route('get_profile')}}" aria-expanded="false" class="p-0 btn">
														<img width="42" class="rounded-circle" src="{{Auth::user()->avata}}" alt="">
													</a>
												</div>
											</div>
											<div class="widget-content-left  ml-3 header-user-info">
												<div class="widget-heading">
													{{Auth::user()->name}}
												</div>
												<div class="widget-subheading">
												</div>
											</div>
										</div>
									</div>
                    			</div>
								@else
								<div class="button header_button_login"><a href="{{ url('/auth/redirect/google') }}">Đăng nhập ngay</a></div>
								@endif
							</div>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_nav" id="header_nav_pin">
			<div class="header_nav_inner">
				<div class="header_nav_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
									<nav class="main_nav">
										<ul>
											<li><a href="{{Route('home')}}">Trang chủ</a></li>
											<li><a href="#">Âm nhạc</a></li>
											<li><a href="speakers.html">Thể thao</a></li>
											<li class=""><a href="#">Hội nghị</a></li>
											<li><a href="#">Về chúng tôi</a></li>
										</ul>
									</nav>
									<div class="header_extra ml-auto">
										<div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>
										<div class="button header_button"><a href="#buynow">Đặt vé ngay!</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="search_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="search_content d-flex flex-row align-items-center justify-content-end">
									<form action="#" id="search_container_form" class="search_container_form">
										<input type="text" class="search_container_input" placeholder="Search" required="required">
										<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
    </header>
	
