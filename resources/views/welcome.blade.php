<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel Template</title>
	@vite('resources/js/app.js')

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<style>
		.welcome {
			display: flex;
			flex-direction: column;
			width: 100%;
			height: 100vh;
			justify-content: start;
			align-items: center;
			background-color: rgb(30, 30, 30);
		}

		img {
			max-width: 150px;
			margin: 6rem 0;
		}

		h1 {
			color: rgb(200, 0, 0) !important;
			font-size: 4.5rem !important;
		}
	</style>
</head>

<body>
	<div class="welcome">
		<div class="logo">
			<img src="{{ Vite::asset('resources/img/welcome/laravel.png') }}" alt="Logo Laravel">
			<img src="{{ Vite::asset('resources/img/welcome/vite-logo.png') }}" alt="Logo Vite">
		</div>
		<h1>Laravel-Vite Template</h1>
	</div>
</body>

</html>
