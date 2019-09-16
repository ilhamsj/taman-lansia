@extends('layouts.master')

@section('title', 'Tambah Artikel')
    
@section('content')

<div class="h-100">
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

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.update',  $item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid  @enderror" value="{{ old('user_id') ? old('user_id') : $item->id}}">

                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" value="{{ old('title') ? old('title') : $item->title}}">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid  @enderror">{{ old('description') ? old('description') : $item->description}}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alt">Image Name</label>
                            <input type="text" name="alt" id="alt" class="form-control @error('alt') is-invalid  @enderror" value="{{ old('alt') ? old('alt') : $item->image->alt}}">

                            @error('alt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url">Image URL</label>
                            <input type="text" name="url" id="url" class="form-control @error('url') is-invalid  @enderror" value="{{ old('url') ? old('url') : $item->image->url}}">

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Category</label>

                            <select multiple name="name[]" id="name" class="form-control @error('name') is-invalid  @enderror" >
                                @foreach ($item->blog as $blog)
                                    <option selected value="{{$blog->category->name}}">{{$blog->category->name}}</option>
                                @endforeach
                            </select>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <div class="card-footer">
                    Helo
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $("form .form-group").first().hide();
        $('#title').keyup(function (e) { 
            $("h1").html($('#title').val());
        });
    </script>
@endpush