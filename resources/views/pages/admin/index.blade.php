@extends('layouts.master')

@section('title', 'Admin')
    
@section('content')
<div class="container">

    <a href="{{ route('article.create') }}">Tambah</a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
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
                        <td>
                            <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a>
                        </td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->image->url}}</td>
                        <td>
                            @foreach ($item->blog as $blog)
                                {{$blog->image->url}},
                            @endforeach
                        </td>
                        <td>
                            @foreach ($item->blog as $blog)
                                {{$blog->category->name}},
                            @endforeach
                        </td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection