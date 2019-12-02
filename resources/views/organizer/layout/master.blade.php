@include('admin.layout.header')
<body>
@include('admin.modules.top-nav')
@include('admin.modules.left-nav')
	@yield('content')
@include('admin.layout.footer')
