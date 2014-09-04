<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<style>
			body{
				padding-top: 40px;
			}
			a:hover{
				color: red;
			}
			footer{
				text-align: center;
				color: white;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Laravly</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<p class="navbar-text navbar-right">
							Created by <a href="http://github.com/sa7bi" class="navbar-link">Belgacem Sahbi</a>
						</p>
					</div>
				</div>
			</nav>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>URL Shortener</h4>
				</div>
				<div class="panel-body">
					@yield('container')		
				</div>
				
			</div>
			<footer>
				<small>
					<span class="glyphicon glyphicon-asterisk"></span>
					Built using <a href="http://laravel.com/">LARAVEL</a>
					<span class="glyphicon glyphicon-asterisk"></span>
				</small>					
			</footer>
			
		</div>
	</body>
</html>