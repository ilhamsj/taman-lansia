<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{env('app_name')}}</title>
    <meta name="csrf_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('/')}}">{{ENV('APP_NAME')}}</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if (session('status'))
    <div class="container">        
        <div class="alert alert-primary" role="alert">
            <strong>
                {{ session('status') }}
            </strong>
        </div>
    </div>
    @endif

    <main class="py-4">
        @yield('content')
    </main>
    
    <footer class="py-4 bg-light border-top">
        <div class="container">
            <a href="{{env('app_url')}}" class="ml-auto">{{env('app_name')}}</a>
            {{date('Y')}} 
        </div>
    </footer>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });

        $(".col-md-4:last-child").attr('class', 'col-md-4');
    </script>
    @stack('scripts')
</body>
</html>