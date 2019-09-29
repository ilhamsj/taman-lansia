<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taman Lansia An-Naba | @yield('title')</title>
    

    <meta name="csrf_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
    <style>
        .display-6 {
            font-size: 1.5rem;
            font-weight: lighter;
        }

        .display-5 {
            font-size: 3rem;
            font-weight: lighter;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar, 
        .navbar a {
            font-family: roboto;
            font-size: 0.9rem;
            font-weight: 500
        }

        .h-100 {
            min-height: 100vh;
        }

        .h-50 {
            min-height: 50vh;
        }

        .h-25 {
            min-height: 25vh;
        }
        .h-5 {
            min-height: 15vh;
        }

        .bg-ws {
            background: #F8F9FA;
        }

        .bg-dark-sm {
            background: #181818;
            color: #959595;
        }

        .text-light-sm {
            color: #f9f9f9!important
        }

        .bg-dark-sm a {
            color: #959595;
        }

        img {
            max-width: 100%;
        }

        .welcome {
            background-image: linear-gradient(225deg,#0abac2,#b2de94)
        }

        .navbar-nav .dropdown-menu {
            border-radius: 0.9rem
        }
    </style>
    @stack('styles') 
</head>
<body>
    <nav class="navbar fixed-top navbar-default navbar-expand-lg bg-transparent" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{route('/')}}">An-Naba</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('article.index')}}">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.category')}}">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Agenda</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.index') }}">
                                    Dashboard Admin
                                </a>
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

    <main>
        @yield('content')
    </main>
    
    @php
        $tentang = ['Tujuan', 'Motto & Motivasi', 'Perkenalan', 'Sasaran', 'Standar Pengasuhan', 'Target', 'FAQs'];
        $contact = [
            'Contact' => 
            [
                'name' => 'Agung',
                'telp' => '081802612341',
            ],
            [
                'name' => 'Yadi',
                'telp' => '08129801782',
            ],
            [
                'name' => 'Anto',
                'telp' => '083869476737',
            ],
            [
                'name' => 'email',
                'telp' => 'tmlansia.annaba@gmail.com',
            ],
        ];
    @endphp

    <footer class="py-4 bg-ws border-top bg-dark-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    Taman Lansia An-Naba <br/>
                    Mempersiapkan Insan Utama dan Cerdas di Usia Senja
                </div>
                <div class="col-6 col-md mb-4">
                    <h5 class="text-light-sm">Tentang An-Naba</h5>
                    @foreach ($tentang as $key)
                        <h6><a href="">{{$key}}</a></h6>
                    @endforeach
                </div>
                <div class="col col-md mb-4 text-light-sm">
                    <h5>Contact Us</h5>
                    @foreach ($contact as $key => $value)
                        <h6>
                            <a href="">
                                {{$value['telp']}}
                            </a>
                        </h6>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
    
    <footer class="py-4 text-light" style="background-color:#181818ed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <small class="text-muted">Copyrights © {{date('Y')}} Taman Lansia An-Naba</small>
                </div>
                <div class="col text-right">
                    <a href="" class="text-light-sm"><i data-feather="facebook"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="twitter"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="instagram"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{secure_asset('js/app.js')}}"></script>
    <script>
        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });

        $(".col-md-4:last-child").attr('class', 'col-md-4');

        $(document).ready(function() {
            $('table').DataTable();
        });

        $(document).ready(function() {
            $('select').select2({
                theme: 'bootstrap4',
                tags: true
            });
        });

        $(window).scroll(function () { 
            if ($(document).scrollTop() > 100) {
                $('nav').first().addClass('bg-light shadow-sm').removeClass('bg-transparent');
            } else {
                $('nav').addClass('bg-transparent').removeClass('bg-light shadow-sm');
            }
        });

        $('.navbar-toggler').click(function (e) { 
            e.preventDefault();
            $('nav').addClass('bg-light shadow-sm').removeClass('bg-transparent');
        });
    </script>
    @stack('scripts')
</body>
</html>