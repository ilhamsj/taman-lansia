@extends('layouts.master')

@section('title', 'Admin')
    
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Title</th>
                <th>Foto</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        @foreach ($item->blog as $blog)
                            {{$blog->category->name}},
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection