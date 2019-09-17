<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Taman Lansia An-Naba</title>
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

        .bg-ws {
            background: #F8F9FA;
        } 

        .navbar-expand-sm.scrolled{
            background:#0000;
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
                        <a class="nav-link" href="{{route('kegiatan')}}">KEGIATAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}">#AGENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
    

    <footer class="py-4 bg-ws border-top">
        <div class="container">
            <div class="row h-25 align-items-center">
                <div class="col">
                    <h6><a href="{{env('app_url')}}">{{env('app_name')}}</a> {{date('Y')}}</h6>
                    Mempersiapkan Insan “Utama Dan Cerdas Di Usia Senja”
                </div>
                <div class="col text-right">
                    <a href=""><i data-feather="facebook"></i></a>
                    <a href=""><i data-feather="twitter"></i></a>
                    <a href=""><i data-feather="instagram"></i></a>
                    <a href=""><i data-feather="linkedin"></i></a>
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

        $('#description').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 500
        });
    </script>
    @stack('scripts')
</body>
</html>s