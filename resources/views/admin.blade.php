@extends('layouts.master')

@section('title', 'Admin')
    
@section('content')

<section class="h-5"></section>
<div class="container py-4">
    <div class="row justify-content-center align-items-between flex-row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-4">
            @include('include._article')
        </div>
        <div class="col-md-6 mb-4">
            @include('include._category')
        </div>
        <div class="col-md-6 mb-4">
            @include('include._image')
        </div>
        <div class="col-md-6 mb-4">
            @include('include._user')
        </div>
    </div>
</div>

<section class="h-5"></section>

@endsection

@push('scripts')
    <script>
        $('.card-header').click(function (e) { 
            e.preventDefault();
            $(this).next().slideToggle('100');
        });

    </script>
@endpush