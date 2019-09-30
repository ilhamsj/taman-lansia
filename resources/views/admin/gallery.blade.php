@extends('layouts.master-admin')
@section('title', 'Data User')

@section('content')

<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </div>
        @endif
        <div class="col-12 col-sm mb-3">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="text-primary">Data User</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img class="img-fluid" src="../images/{{$item->getFilename()}}" alt="" srcset="">
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-secondary btn-sm" href="">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="{{route('admin.deleteImage', $item->getFilename())}}">
                                                <i data-feather="trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .btn {
            border-radius: 0;
        }
    </style>
@endpush