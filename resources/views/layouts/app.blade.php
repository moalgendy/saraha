<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://rawgit.com/mervick/emojionearea/master/dist/emojionearea.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://rawgit.com/mervick/emojionearea/master/dist/emojionearea.js"></script>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


{{-- profile --}}

    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
        </style>

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('profile/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('profile/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('profile/css/bootstrap.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('profile/css/style.css') }}">

	<!-- Modernizr JS -->
	{{-- <script src="js/modernizr-2.6.2.min.js"></script> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="margin-bottom: 0;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li  style="padding-right: 15px" class="nav-item">
                                    <a style="font-weight: bold" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li  style="padding-right: 15px" class="nav-item">
                                    <a style="font-weight: bold" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        

                        {{-- <li class="nav-item ">
                            <a class="dropdown-item" style="color: rgba(0,0,0,.55);font-size: var(--bs-body-font-size);
                            font-weight: var(--bs-body-font-weight);
                            line-height: var(--bs-body-line-height);    padding: .5rem 1rem; " href="{{ route('last-ten-visits-date') }}" >
                                {{ __('Last ten visits date') }}
                            </a>
                        </li> --}}


                        {{-- <li class="nav-item ">
                            <a class="dropdown-item" style="color: rgba(0,0,0,.55);font-size: var(--bs-body-font-size);
                            font-weight: var(--bs-body-font-weight);
                            line-height: var(--bs-body-line-height);    padding: .5rem 1rem; " href="/profile" >
                                {{ __('Profile') }}
                            </a>
                        </li> --}}

                        <li class="nav-item" style="padding-right: 15px">
                            <a style="font-weight: bold" class="nav-link" href="{{ route('home') }}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                Home
                            </a></li>

                        <li class="nav-item" style="padding-right: 15px">
                            <a style="font-weight: bold" class="nav-link" href="{{ url('/') }}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                About
                            </a>
                        </li>


                            <li class="nav-item dropdown">
                                <a style="font-weight: bold" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                                    {{-- <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Profile') }}
                                    </a> --}}

                                </div>
                                
                            </li>
                            
                        @endguest
                        
                    </ul>
                    <form style="padding-left: 40px" class="d-flex" method="get" action="{{ route('users') }}">
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button style="background-color: rgba(255, 144, 0, 0.9);" class="btn btn-dark" type="submit">Search</button>
                      </form>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <div id="fh5co-footer">
		<div class="container">
<hr>

			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2022 Saraha. All Rights Reserved. <br> by <a href="#" target="_blank">Mohamed Algendy</a>. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

<!-- Back to Top -->
{{-- <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> --}}

    
    <!-- jQuery -->
{{-- <script src="{{ asset('profile/js/jquery.min.js') }}"></script> --}}
<!-- jQuery Easing -->
<script src="{{ asset('profile/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('profile/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('profile/js/jquery.waypoints.min.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('profile/js/jquery.stellar.min.js') }}"></script>
<!-- Easy PieChart -->
<script src="{{ asset('profile/js/jquery.easypiechart.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
{{-- <script src="{{ asset('profile/s/google_map.js') }}"></script> --}}

<!-- Main -->
<script src="{{ asset('profile/js/main.js') }}"></script>
<script src="{{ asset('profile/js/sjb.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>






    
</body>
</html>
