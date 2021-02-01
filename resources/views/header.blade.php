<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'RedCapital')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script type="text/javascript" src="/js/app.js" defer></script>
	<style type="text/css">

	</style>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between sticky-footer-wrapper min-vh-100">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-withe text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>