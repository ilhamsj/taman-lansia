@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row h-100 align-items-center">
        @foreach ($items as $key => $value)
        <div class="col-12 col-sm mb-3">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="text-primary">Data {{$key}}</strong>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$value}} <span class="text-muted">{{$key}}</span></h4>
                    <a href="{{route('admin.'.$key)}}" class="card-link">Detail</a>
                    <a href="{{route($key.'.create')}}" class="card-link">Tambah</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
    
    <script>
        $('nav').addClass('fixed-top');
        $('main').removeClass('py-4');
    </script>
@endpush