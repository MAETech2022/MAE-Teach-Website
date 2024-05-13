<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="{{ config('app.name', 'MAE Tech') }}">
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer">
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>{{ config('app.name', 'MAE Tech') }}</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('assets/frontend/assets/img/favicon1.png')}}">
	@include('layouts.frontend.css') 
</head>

<body>
	@include('layouts.frontend.header')

	@yield('content')
	
	@include('layouts.frontend.footer')
	@include('layouts.frontend.js')
	@yield('jsfile')
</body>
</html>