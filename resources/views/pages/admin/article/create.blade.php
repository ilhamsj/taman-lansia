@extends('layouts.master')

@section('title', 'Tambah Artikel')
    
@section('content')

<div class="container">
    <form action="{{ route('article.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid  @enderror" value="{{ old('user_id') ? old('user_id') : ''}}">

            @error('user_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" value="{{ old('title') ? old('title') : ''}}">

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid  @enderror" value="{{ old('description') ? old('description') : ''}}">

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Image Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" value="{{ old('name') ? old('name') : ''}}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" id="url" class="form-control @error('url') is-invalid  @enderror" value="{{ old('url') ? old('url') : ''}}">

            @error('url')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">category</label>
            <input type="text" name="category" id="category" class="form-control @error('category') is-invalid  @enderror" value="{{ old('category') ? old('category') : ''}}">

            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection