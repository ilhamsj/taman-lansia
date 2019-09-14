@extends('layouts.master')

@section('title', 'Admin')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route('article.create') }}">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Title</th>
                                    <th>Foto</th>
                                    <th>ِAlbum</th>
                                    <th>Kategori</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a>
                                        </td>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            <img class="img-fluid" data-src="{{$item->image->url}}" alt="{{$item->image->name}}" srcset="">
                                        </td>
                                        <td>
                                            @foreach ($item->blog as $blog)
                                                <img class="img-fluid" data-src="{{$blog->image->url}}" alt="{{$blog->image->name}}" srcset="">
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($item->blog as $blog)
                                                {{$blog->category->name}},
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-warning btn-sm" href="{{ route('article.edit', $item->id) }}">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-sm" href="{{ route('article.create') }}">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection