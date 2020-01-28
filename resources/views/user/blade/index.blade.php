@extends('user.layout.master')
@section('pageTitle', 'TicketPro')
@push('css')
<link rel="stylesheet" href="/css/user/main_styles.css">
<link rel="stylesheet" href="/css/user/custom_index.css">
<link rel="stylesheet" href="/css/user/responsive.css">
@endpush
@push('scripts')
<script src="js/user/custom.js"></script>
@endpush
@section('content')
<div class="container">
	<div class="hot-event">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100" src="/images/CP_Street_Food_Festival.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="/images/CP_Street_Food_Festival.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="/images/CP_Street_Food_Festival.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
</div>
<!-- Intro -->

<div class="intro">
		<h1>Sự kiện nổi bật</h1>
		<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>
			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="/images/CP_Street_Food_Festival.jpg" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="#">The Speakers</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ 1 000 000 VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>Hà Nội</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng 12</div>
							<div class="calendar_content">20</div>
						</div>	
					</div>
									
				</div>
			</div>
		</div>
	</div>
	<!-- All event -->
	<div class="all-event">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="button cta_button"><a href="#">Tất cả sự kiện</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Call to action -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="cta_title">Tham gia cùng chúng tôi ngay!</div>
						<div class="button cta_button"><a href="#">Tạo sự kiện ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection