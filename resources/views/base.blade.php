<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- <link rel="stylesheet" href="/css/app.css" media="screen"> -->
	<link rel="stylesheet" href="/css/material.min.css" media="screen" title="no title">
	<script src="/js/material.min.js" charset="utf-8"></script>
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript"></script>
	@yield('head')
	@yield('scripts')
</head>
<body>
	@yield('body')
</body>
</html>
