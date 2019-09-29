@extends('layouts.master-admin')
@section('title', 'Blog')

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
                <div class="card-header text-right d-flex justify-content-between">
                    <span>
                        {{count($articles)}} Artikel
                    </span>
                    <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm">
                        Tambah Artikel
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $item)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ route('article.show', $item->slug) }}">{{$item->title}}</td></a>
                                        <td>{{ $item->category  }}</td>
                                        <td>
                                            <img class="img-fluid img-thumbnail" src="{{ secure_asset('storage/images/'.$item->image)}}" alt="" srcset="">
                                        </td>
                                        <td>
                                            {{\Carbon\Carbon::parse($item->created_at)->format('d M Y h:i:s')}}
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-secondary btn-sm" href="{{ route('article.edit', $item->id) }}">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <form id="delete-form" action="{{ route('article.destroy', $item->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i data-feather="trash"></i>
                                                </button>
                                            </form>
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

@push('scripts')
    <script>
    $('#preview').hide();
    $("#inputGroupFile01").change(function(event) {  
        RecurFadeIn();
        readURL(this);
    });
    $("#inputGroupFile01").on('click',function(event) {
        RecurFadeIn();
    });
    function readURL(input) {    
        if (input.files && input.files[0]) {   
            var reader = new FileReader();
            var filename = $("#inputGroupFile01").val();
            filename = filename.substring(filename.lastIndexOf('\\')+1);
            reader.onload = function(e) {
                debugger;
                $('#preview').attr('src', e.target.result);
                $('#preview').hide();
                $('#preview').fadeIn(500);      
                $('.custom-file-label').text(filename);
            }
            reader.readAsDataURL(input.files[0]);    
        } 
        $(".alert").removeClass("loading").hide();
    }
    function RecurFadeIn(){ 
        FadeInAlert("Wait for it...");  
    }
    function FadeInAlert(text){
        $(".alert").show();
        $(".alert").text(text).addClass("loading");  
    }
    </script>
    
    <script>
        $('#description').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 500
        });

        $('#new-button').click(function (e) { 
            e.preventDefault();
            $('.card-body:nth-child(3)').slideToggle();
        });
    </script>
@endpush

@push('styles')
    <style>
        .btn {
            border-radius: 0;
        }
    </style>
@endpush