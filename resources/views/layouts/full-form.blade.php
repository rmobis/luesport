<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="full-form">
	<head>
		@include('layouts.partials.head')
	</head>
	<body>
		<nav class="navbar navbar-transparent">
			<div class="container">
				<a class="navbar-brand" href="/">
					Liga Universitária de eSports
				</a>
			</div>
		</nav>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="footer">
			<div class="container">
				<div class="copyright float-right">
					Made with <i class="fas fa-heart heart text-primary"></i> by <a href="https://fb.com/r.mobis" target="_blank">Phapha</a>
				</div>
			</div>
		</footer>

	</body>
</html>
