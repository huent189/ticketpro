<!-- menu top  - menu phia tren cung-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!!url('/admin/home')!!}"><span>Trang Quản Trị</span> Organizer </a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							@if (isset(Auth::guard('organizer')->user()->name) )
                                {!!Auth::guard('organizer')->user()->name!!}
                            @else

                            @endif <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Thông tin</a></li>
                            <li><form action="{{ route('organizers.auth.logout') }}" method="post"><i class="fa fa-btn fa-sign-out"></i>
                                    <input type="submit" value="Đăng Xuất">
                                    @csrf
                                </form></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>
<!-- /menu top  - menu phia tren cung-->
