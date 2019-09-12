@extends('layouts.master')

@section('title', $item->name)
    
@section('content')

<div class="container">

    <h4><a href="{{ route('user.show', $item->id) }}">{{$item->name}}</a></h4>
    
    @foreach ($item->article as $article)
        <h5>{{$article->title}}</h5>
    @endforeach
    
</div> 
@endsection