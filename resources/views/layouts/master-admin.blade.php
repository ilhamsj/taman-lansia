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
    <nav class="navbar navbar-default navbar-expand-lg border-bottom">
        <a class="navbar-brand" href="{{route('/')}}">
            <img src="{{ secure_asset('images/apple-touch-icon.png') }}" width="30" height="30" alt="" srcset="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('article.index')}}">Blog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('kategori.show', 'kegiatan')}}">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('kategori.show', 'agenda')}}">Agenda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Register</a>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('admin.index') }}">Admin</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
        
    <div class="d-flex">
        <div class="left col-3 col-sm-2 p-0 bg-warning border-right">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action disabled">Active item</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
            </div>
        </div>
        <div class="right col p-3 bg-light">
            <div>
                <button id="menu-toggle" class="btn btn-success btn-sm">Menu</button>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $('#menu-toggle').click(function (e) { 
            e.preventDefault();
            $('.left').toggle(500);
        });
    </script>
</body>
</html>