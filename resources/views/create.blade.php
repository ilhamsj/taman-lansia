@extends('layouts.master')

@section('title', 'Tambah Artikel')
    
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid  @enderror" value="{{ old('user_id') ? old('user_id') : '1'}}">

                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" value="{{ old('title') ? old('title') : \Faker\Factory::create()->realText($maxNbChars=50)}}">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid  @enderror">{{ old('description') ? old('description') : \Faker\Factory::create()->realText($maxNbChars=1000)}}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alt">Image alt</label>
                            <input type="text" name="alt" id="alt" class="form-control @error('alt') is-invalid  @enderror" value="{{ old('alt') ? old('alt') : \Faker\Factory::create()->word()}}">

                            @error('alt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" id="url" class="form-control @error('url') is-invalid  @enderror" value="{{ old('url') ? old('url') : 'holder.js/1280x960?auto=yes&textmode=exact&random=yes'}}">

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">name</label>

                            <select multiple name="name[]" id="name" class="form-control @error('name') is-invalid  @enderror" >
                                @foreach ($category as $item)
                                    <option value="{{$item->name}}">
                                        {{$item->name}}
                                    </option>
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
    </script>
@endpush