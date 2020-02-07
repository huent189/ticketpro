@extends('user.layout.master')
@section('pageTitle', 'TicketPro')
@push('css')
<link href="/css/library/et-line.css" rel="stylesheet">
<link href="/css/library/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/user/main_styles.css">
<link rel="stylesheet" href="/css/user/custom_index.css">
<link rel="stylesheet" href="/css/user/responsive.css">
@endpush
@push('scripts')
<script src="/js/library/waypoints.min.js"></script>
<!--Counter up -->
<script src="/js/library/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="/js/library/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="/js/library/wow.min.js"></script>
<!-- Custom js -->
<script src="/js/user/custom.js"></script>
<script src="/js/user/event-detail/main.js"></script>
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

<div class="intro" id="buynow">
		<h2 class = "title_intro" >Sự kiện nổi bật</h2>
		<div class="container intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
		@foreach($data['popularEvent'] as $event)
			<!-- Intro Item -->
			<div class="intro_item ">
				<div class="intro_image"><img src="{{$event->coverImage}}" alt=""></div>
				<div class="intro_body">
					<div class="intro_title"><a href="{{Route('event.detail',['eventId' => $event->id])}}">{{$event->name}}</a></div>
					<div class="description">
						<div class="des-left">
							<div class="intro_subtitle">
								<div class="price">
									<span><i class="fas fa-money-bill-wave"></i></span>
									<span>Từ {{$event->minPrice()}} VNĐ</span>
								</div>
								<div class="location">
									<span><i class="fas fa-map-marker-alt"></i></span>
									<span>{{$event->location()->get()->first()->city}}</span>
								</div>
							</div>
						</div>
						<div class="des_calendar">
							<div class="calendar_month">Tháng {{number_format(date_format($event->startTime,'m'))}}</div>
							<div class="calendar_content">{{number_format(date_format($event->startTime,'d'))}}</div>
						</div>	
					</div>
									
				</div>
			</div>
		@endforeach
		</div>
	</div>
	<!-- All event -->
	<div class="all-event">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="button cta_button"><a href="{{Route('event.all')}}">Tất cả sự kiện</a></div>
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
						<div class="button cta_button"><a href="{{Route('event.create')}}">Tạo sự kiện ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection