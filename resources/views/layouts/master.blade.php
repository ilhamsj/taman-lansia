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

        .navbar-toggler {
            border: none;
        }

        .navbar, 
        .navbar a {
            font-family: roboto;
            font-size: 0.9rem;
            font-weight: 500
        }
    </style>
    @stack('styles') 
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-sm navbar-light">
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
                        <a class="nav-link" href="{{route('admin.index')}}">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @if (session('status'))
        <div class="container">
            <div class="alert alert-primary" role="alert">
                {{ session('status') }}
            </div>
        </div>
        @endif
        @yield('content')
    </main>
    
    <footer class="py-4 border-top bg-dark text-muted">
        <div class="container">
            <div class="row jusitfy-content-between  align-items-center">
                <div class="col">
                    <h5 class="text-white"><a class="text-white" href="{{env('app_url')}}">{{env('app_name')}}</a> {{date('Y')}}</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam et ipsum facere dolores modi maxime minima necessitatibus
                </div>
                <div class="col text-right">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
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

        $(".card").hover(
            function () {
                $(this).attr("class", "card shadow");
                $(this).children().last().show('100');
            },
            function () {
                $(this).attr("class", "card");
                $(this).children().last().hide('100');
            }
        );

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
</html>