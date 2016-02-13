<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>

@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>

	@include('admin.template.partials.footer')


	<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>