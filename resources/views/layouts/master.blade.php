<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Taman Lansia An-Naba</title>
    <meta name="csrf_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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

    </style>
    @stack('styles') 
</head>
<body>
    <nav class="navbar navbar-default fixed-top navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('/')}}">AN-NABA</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('article.index')}}">BLOG <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('kategori.show', 'kegiatan')}}">KEGIATAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('kategori.show', 'agenda')}}">#AGENDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ACCOUNT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @guest
                                <a class="dropdown-item" href="#">LOGIN</a>
                                <a class="dropdown-item" href="#">REGISTER</a>
                            @else
                                <a class="dropdown-item" href="#">PROFILE</a>
                                <a class="dropdown-item" href="#">DASHBOARD</a>
                            @endguest
                        </div>
                    </li>
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
                <div class="col-md mb-4">
                    <h5 class="text-light-sm">Tentang An-Naba</h5>
                    @foreach ($tentang as $key)
                        <h6><a href="">{{$key}}</a></h6>
                    @endforeach
                </div>
                <div class="col-md mb-4 text-light-sm">
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
    
    <footer class="py-2 text-light" style="background-color:#181818ed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md" style="font-size:small">
                    Copyrights © {{date('Y')}} Taman Lansia An-Naba
                </div>
                <div class="col-md text-right">
                    <a href="" class="text-light-sm"><i data-feather="facebook"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="twitter"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="instagram"></i></a>
                    <a href="" class="text-light-sm"><i data-feather="linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="{{asset('js/app.js')}}"></script>
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

        $('#description').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 500
        });

        $(window).scroll(function () { 
            var x = $(this).scrollTop();
            if (x > 100) {
                $("nav").first().attr("class", "navbar navbar-default fixed-top navbar-expand-sm navbar-light bg-ws");
            } else {
                $("nav").first().attr("class", "navbar navbar-default fixed-top navbar-expand-sm navbar-light");                
            }

        });

        $(".navbar-toggler").click(function (e) { 
            e.preventDefault();
            $("nav").first().attr("class", "navbar navbar-default fixed-top navbar-expand-sm navbar-light bg-ws");

        });
    </script>
    @stack('scripts')
</body>
</html>