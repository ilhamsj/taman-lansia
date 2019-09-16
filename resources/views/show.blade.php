@extends('layouts.master')

@section('title', 'Blog Show')
    
@section('content')
 
<div class="h-100">
    <div class="bg-ws">
        <div class="container">
            <div class="row text-center h-50 justify-content-center align-items-center flex-row">
                <div class="col">
                    <h1>{{$item->title}}</h1>
                    Oleh : <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a> |
                    
                Kategori :
                @foreach ($item->blog as $blog)
                    <a href="">{{$blog->category->name}},</a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p class="lead">
                {!! $item->description !!}
            </p>
            <img src="{{$item->image->url}}" alt="" srcset="" class="img-fluid">
        </div>
    </div>
</div>

</div>
@endsection