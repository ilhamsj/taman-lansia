@extends('layouts.master')

@section('title', 'User')
    
@section('content')
<div class="container">
    @forelse ($items as $item)

        <h4><a href="{{ route('user.show', $item->id) }}">{{$item->name}}</a></h4>
        @foreach ($item->article as $article)
            {{$article->title}}
        @endforeach
    @empty
</div>  
    
@endforelse

@endsection