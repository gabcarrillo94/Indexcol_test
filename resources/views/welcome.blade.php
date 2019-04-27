<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Indexcol | Prueba de Desarrollo</title>

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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                              {{ Auth::user()->name }} <span class="caret"></span>
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

          <!-- Start Banner Area -->
            <section class="banner-area relative">
              <div class="overlay overlay-bg"></div>
              <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                  <div class="col-lg-8">
                    <div class="banner-content text-center">
                      <p class="text-uppercase text-white">Powered by Laravel & Ajax</p>
                      <h1 class="text-uppercase text-white">Design and Implementation of Publication-Reading System</h1>
                      <a href="{{ route('login') }}" class="primary-btn banner-btn">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- End Banner Area -->

          <!-- Start About Area -->
        		<section class="section-full gray-bg">
        			<div class="container">
        				<div class="row justify-content-center">
        					<div class="col-lg-10">
        						<div class="section-title text-center">
                      <h2>
                        PRUEBA DE DESARROLLO
                      </h2>
        							<p class="text-uppercase">
                        Para esta prueba contará con un tiempo de 24 horas a partir de la entrega. <br>
                        Evaluaremos su habilidad para desarrollar un sistema sencillo usando algún framework PHP. <br>
                        Los siguientes son los requerimientos que debe cumplir dicho desarrollo:
                      </p>
                      <p class="text-uppercase text-middle">
                        a. Inicio de sesión con usuario y contraseña. <br>
                        b. Creación de dos usuarios, uno público y un administrador. <br>
                        c. El usuario administrador debe almacenar un texto en base de datos con la respectiva
                        fecha de registro. <br>
                        d. El usuario público debe mostrar una vista que consulte vía Ajax, el texto y la fecha
                        almacenado por el administrador, y mostrar el resultado en un contenedor. <br>
                        e. El usuario administrador puede acceder a la página de usuario público, pero el usuario
                        público no puede acceder a la vista del administrador.
                      </p>
                      <p class="text-uppercase">
                        Se calificará la documentación del código, uso de CSS3 y la optimización en líneas de código escritas.
                      </p>
        						</div>
        					</div>
        				</div>
        				<div class="row">
        				</div>
        			</div>
        		</section>
        		<!-- End About Area -->

        </div>
    </body>
</html>
