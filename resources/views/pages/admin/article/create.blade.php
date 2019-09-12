@extends('layouts.master')

@section('title', 'Tambah Artikel')
    
@section('content')

<div class="container">
    <form action="{{ route('article.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection