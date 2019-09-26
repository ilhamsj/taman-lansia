<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .left {min-height: 100vh}
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-lg border-bottom shadow-sm">
        <div class="container">
        <a class="navbar-brand" href="{{route('/')}}">
            <img src="{{ secure_asset('images/apple-touch-icon.png') }}" width="30" height="30" alt="" srcset="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.article') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.user') }}">User</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tambah
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('article.create') }}">Artikel</a>
                        <a class="dropdown-item" href="{{ route('user.create') }}">User</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('article.create') }}">Item</a>
                        <a class="dropdown-item" href="{{ route('article.create') }}">Item</a>
                        <a class="dropdown-item" href="{{ route('article.create') }}">Item</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });

        $(".alert").alert();
        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });
    </script>
    @stack('scripts')
</body>
</html>