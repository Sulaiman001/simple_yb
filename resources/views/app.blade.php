<html>
<head>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="{!!asset('css/materialize/css/materialize.min.css') !!}">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified JavaScript -->
 <script src="{!! asset('js/materialize.min.js') !!}"></script>
 <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 <title>@yield('title')</title>
</head>
<body>
<nav>
 <div class="nav">
	<div class="navbar-wrapper">
	 <a href="#" class="brand-logo">YearBook</a>
	 <ul id="nav-mobile" class="right ">
		<li><a href="/register">Sign Up</a> </li>
	 </ul>
	</div>
 </div>
</nav>
<div class="container">
 @yield('content')
</div>
</body>
</html>
