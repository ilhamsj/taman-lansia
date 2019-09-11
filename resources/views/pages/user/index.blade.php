@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

<ul>

    @forelse ($items as $item)
    <li>
        {{$item->name}}
        @forelse ($item->blog as $blog)
            <h3>{{$blog->article->title}}</h3>
        @empty
            <u>Tidak ada blog</u>
        @endforelse
    </li>
    @empty
</ul>
    
@endforelse

@endsection