<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href="{{ elixir('css/all.css') }}" rel="stylesheet">
	<link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
</head>
<body>
	@include('partials.nav')
	@include('partials.content')
	@include('partials.footer')
</body>
</html>