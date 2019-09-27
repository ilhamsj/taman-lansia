@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($items as $key => $value)
        <div class="col-12 col-sm mb-3">
            <div class="card shadow bg-light">
                <div class="card-header">
                    Data {{$key}}
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$value}} <span class="text-muted">{{$key}}</span></h4>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.'.$key)}}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="{{route($key.'.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
    
    <script>
        
    </script>
@endpush