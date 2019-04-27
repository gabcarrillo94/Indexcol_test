<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Publication-Reading System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
</head>
<body>
    <div id="app">
        <!-- Start Header Area -->
    		<header class="default-header">
    			<div class="sticky-header">
    				<div class="container">
    					<div class="header-content d-flex justify-content-between align-items-center">
    						<div class="logo">
    							<a href="{{ route('home') }}" class="smooth"><img src="{{ asset('imgs/logo.png') }}" alt=""></a>
    						</div>
    						<div class="right-bar d-flex align-items-center">
    							<nav class="d-flex align-items-center">
    								<ul class="main-menu">
    									<li><a href="{{ url('/home') }}">Home</a></li>
    								</ul>
    								<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
    							</nav>
    							<div class="header-social d-flex align-items-center">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="lnr lnr-chevron-down"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</header>
    		<!-- End Header Area -->

        <main class="py-4">
            <section class="section-full gray-bg">
              @yield('content')
            </section>
        </main>
    </div>
</body>
</html>
