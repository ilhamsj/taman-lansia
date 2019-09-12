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

    <nav>
        <div class="container">
            <a href="{{route('/')}}">Home</a>
            <a href="{{route('blog.index')}}">Blog</a>
            <a href="{{route('user.index')}}">User</a>
            <a href="{{route('admin.index')}}">Admin</a>
        </div>
    </nav>

    @if (session('status'))
        {{ session('status') }}
    @endif

    <header>
        <div class="container">
            <h1>{{env('app_name')}}</h1>
            <h2>{{Str::title('mempersiapkan insan utama dan cerdas di usia senja')}}</h2>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <div class="container">
            {{env('app_name')}} {{date('Y m D')}} 
        </div>
    </footer>

    <script src="{{asset('js/app.js')}}"></script>
    @stack('scripts')
</body>
</html>