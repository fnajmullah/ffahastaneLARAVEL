<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FFAHastane') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('ffahastanelogo.png') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" alt="logo" src="{{asset('logo.png') }}" />
                    {{ config('app.name', 'FFAHastane') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            @if(Auth::check())
                            <a class="nav-link homelink active" aria-current="page" href="/dashboard"><i class="bi bi-house-heart-fill"></i>{{__('messages.header.home')}}</a>
                            @else
                            <a class="nav-link homelink active" aria-current="page" href="/"><i class="bi bi-house-heart-fill"></i>{{__('messages.header.home')}}</a>
                            @endif
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('messages.header.products')}} 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('producta') }}">{{__('messages.header.products.producta')}}</a></li>
                                <li><a class="dropdown-item" href="#">Product B</a></li>
                                <li><a class="dropdown-item" href="#">Product C</a></li>
                                <li><a class="dropdown-item" href="#">Product D</a></li>
                                <li><a class="dropdown-item" href="#">Product E</a></li>
                                <li><a class="dropdown-item" href="#">Product F</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('messages.header.services')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('transportation') }}">Transportation</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Accommodation</a></li>
                                <li><a class="dropdown-item" href="#">Translator/Interpretor</a></li>
                                <li><a class="dropdown-item" href="#">Personal Guide</a></li>
                                <li><a class="dropdown-item" href="#">City Tour</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('messages.header.solutions')}} 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('solutiona') }}">Solutions A</a></li>
                                <li><a class="dropdown-item" href="#">Solutions B</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('messages.header.abouts')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('foundation') }}">Foundation</a></li>
                                <li><a class="dropdown-item" href="{{ route('collaboration') }}">Collaborations with prestigious institutions(Cordination)</a></li>
                                <li><a class="dropdown-item" href="{{ route('mission') }}">Mission/Purpose</a></li>
                                <li><a class="dropdown-item" href="{{ route('aim') }}">Aim</a></li>
                            </ul>
                        </li>
                        
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Languages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">EN <img class="img-fluid flag-lang" src="{{asset('/images/flag-english.png')}}" /></a></li>
                                <li><a class="dropdown-item" href="#">TR <img class="img-fluid flag-lang" src="{{asset('/images/flag-turkish.png')}}" /></a></li>
                                <li><a class="dropdown-item" href="#">Arabic <img class="img-fluid flag-lang" src="{{asset('/images/flag-sa.png')}}" /></a></li>
                                <li><a class="dropdown-item" href="#">Russian <img class="img-fluid flag-lang" src="{{asset('/images/flag-russia.png')}}" /></a></li>
                                <li><a class="dropdown-item" href="#">Frennch <img class="img-fluid flag-lang" src="{{asset('/images/flag-france.png')}}" /></a></li>
                                <li><a class="dropdown-item" href="#">Persian <img class="img-fluid flag-lang" src="{{asset('/images/flag-iran.png')}}" /></a></li>
                            </ul>
                        </li> -->
                        
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-squared flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                    @endif
                                @endforeach
                                </div>
                        </li>


                    <!-- <li class="nav-item"><a class="nav-link" href="#">Link</a></li> -->
                    </ul>
                    <form class="d-flex btn-search-field">
                        <input class="form-control me-2" type="search" placeholder="{{__('messages.header.search')}}" aria-label="Search">
                        <button class="btn-search btn btn-outline-success" type="submit">{{__('messages.header.search')}}</button>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                        </li>
                        @endif
                        @else
                        @if(auth()->user()->role->name === 'patient')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('messages.header.appointments')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('homepage') }}">{{__('messages.header.bookingbydate')}}</a></li>
                                <li><a class="dropdown-item" href="#"><a class="dropdown-item" href="{{ route('bookappointmentbydoctor') }}">{{ __('Booking By Doctor') }}</a></a></li>
                                <li><a class="dropdown-item" href="#"><a class="dropdown-item" href="{{ route('bookappointmentbydepartment') }}">{{ __('Booking By Clinik') }}</a></a></li>
                                <li><a class="dropdown-item" href="#"><a class="dropdown-item" href="{{ route('bookappointmentbylocation') }}">{{ __('Booking By Location') }}</a></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('patienthistory.create') }}">{{ __('Create History') }}</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if(auth()->user()->role->name === 'patient')
                                <a class="dropdown-item" href="{{url('user-profile')}}">{{ __('messages.profile') }}</a>
                                <a class="dropdown-item" href="{{ route('my.booking') }}">{{ __('My Booking') }}</a>
                                <a class="dropdown-item" href="{{ route('my.prescription') }}">{{ __('My Prescriptions') }}</a>
                                <a class="dropdown-item" href="{{ route('patienthistory.index') }}">{{ __('My History') }}</a>
                                @else
                                <a class="dropdown-item" href="{{url('dashboard')}}">{{ __('messages.dashboard') }}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('messages.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
        <footer class="py-3 my-4">

            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="{{ route('feedback') }}" class="nav-link px-2 text-muted">{{__('messages.footer.feedback')}}</a></li>
                <li class="nav-item"><a href="{{ route('investment') }}" class="nav-link px-2 text-muted">{{__('messages.footer.investment')}}</a></li>
                <li class="nav-item"><a href="{{ route('franchising') }}" class="nav-link px-2 text-muted">{{__('messages.footer.franchising')}}</a></li>
                <li class="nav-item"><a href="{{ route('career') }}" class="nav-link px-2 text-muted">{{__('messages.footer.career')}}</a></li>
                <li class="nav-item"><a href="{{ route('privacypolicy') }}" class="nav-link px-2 text-muted">{{__('messages.footer.privacy')}}</a></li>
            </ul>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>&copy; {{ __('messages.footer.note') }}</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="https://twitter.com/fnajmullah"><i class="bi bi-twitter"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/fnajmullah/"><i class="bi bi-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/fnajmullah"><i class="bi bi-facebook"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.tiktok.com/@intel"><i class="bi bi-tiktok"></i></a></li>
                </ul>
            </div>
        </footer>

    </div>
    <script>
        var dateToday = new Date();
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd",
                showButtonPanel: true,
                numberOfMonths: 2,
                minDate: dateToday,
            });
        });
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: false
        })
    </script>
    <style>
        ul {
            padding: 0;
            margin: 0;
        }

        label.btn {
            padding: 0;
        }

        label.btn input {
            opacity: 0;
            position: absolute;
        }

        label.btn span {
            text-align: center;
            padding: 6px 12px;
            display: block;
            min-width: 80px;
        }

        label.btn input:checked+span {
            background-color: rgb(80, 110, 228);
            color: #fff;
        }

        .navbar {
            color: #fff !important;
        }

        .navbar-brand .logo {
            height: 50px;
            width: auto;
        }

        .btn-search-field {
            align-items: center;
        }

        .btn-search {
            height: 40px;
        }

        .carousel-item {
            height: 400px;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            background-color: gray;
        }

        .carousel-indicators [data-bs-target] {
            background-color: gray;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: black;
            font-weight: 600;
            font-size: 16px;
        }

        .carousel-caption h5 {
            font-size: 24px;
        }

        /* .socials {
            display: flex;
            list-style: none;
        }

        .social-item {
            margin-right: 10px;
        }

        .social-item .social-link i {
            color: blue;
            font-size: 30px;

        } */
        .nav-item {
            display: flex;
            align-items: center;
        }

        .book {
            width: 10px;
        }

        .flag-lang {
            max-width: 20%;
            height: auto;
            border-radius: 50%;
        }
        .dropdown-item{
            display: flex;
            align-items: center;
        }
        .flag-icon{
            border-radius: 50%;
            width: 20px !important;
            height: 20px !important;
            margin-right: 5px;
        }
        .homelink{
            display: flex;
            flex-direction: row;
        }
    </style>
</body>

</html>