<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{env('app_name')}}</title>
    <meta name="csrf_token" content="{{csrf_token()}}">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    @stack('styles')
</head>
<body>

    <nav>
        <a href="{{route('/')}}">Home</a>
        <a href="{{route('blog.index')}}">Blog</a>
        <a href="{{route('user.index')}}">User</a>
    </nav>

    @if (session('status'))
        {{ session('status') }}
    @endif

    <header>
        <h1>{{env('app_name')}}</h1>
        <h2>{{Str::title('mempersiapkan insan utama dan cerdas di usia senja')}}</h2>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        {{env('app_name')}} {{date('Y m D')}} 
    </footer>

    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    @stack('scripts')
</body>
</html>