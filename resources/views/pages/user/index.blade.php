@extends('layouts.master')

@section('title', 'Blog')
    
@section('content')

    @forelse ($items as $item)
        <h3>
            <a href="{{ route('user.show', $item->id) }}">{{$item->name}}</a>
        </h3>
        @forelse ($item->blog as $blog)
            {{$blog->article->title}} <br/>
        @empty
            <u>Tidak punya post</u>
        @endforelse
    </li>
    @empty
    
@endforelse

@endsection