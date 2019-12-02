@include('back-end.layouts.header')
<body>
@include('admin.modules.top-nav')
@include('admin.modules.left-nav')
	@yield('content')
@include('back-end.layouts.footer')
