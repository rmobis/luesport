<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.partials.head')
</head>
<body>
	<div class="t">
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<a class="navbar-brand" href="{{ route('home') }}">
					Liga Universitária de eSports
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
							<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
							<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>

		</nav>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="footer">
			<div class="container">
				<nav class="float-left">
					<ul>
						<li>
							<a href="http://www.creative-tim.com">
								Creative Tim
							</a>
						</li>
						<li>
							<a href="http://presentation.creative-tim.com">
								About Us
							</a>
						</li>
						<li>
							<a href="http://blog.creative-tim.com">
								Blog
							</a>
						</li>
						<li>
							<a href="http://www.creative-tim.com/license">
								Licenses
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright float-right">
					©
					<script>
						document.write(new Date().getFullYear())
					</script>2018, made with <i class="fas fa-heart heart"></i> by
					<a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
