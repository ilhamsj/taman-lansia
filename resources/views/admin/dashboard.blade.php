@extends('layouts.master-admin')

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
                    <strong class="text-primary">Data Article</strong>
                    <button id="new-button" class="btn btn-success btn-sm">
                        <i data-feather="plus-square"></i>
                    </button>
                </div>
                <div class="card-body">
                    <h4>{{ count($articles)}} <span class="text-muted">Artikel</span></h4>
                </div>
                <div class="card-body collapse">
                    <form action="{{ route('article.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group collapse">
                            <label for="user_id">User</label>
                            <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid  @enderror" value="{{ old('user_id') ? old('user_id') : '1'}}">

                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col">
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
                                    <label for="category">Kategori</label>
                                    <input type="text" name="category" id="category" class="form-control @error('category') is-invalid  @enderror" value="{{ old('category') ? old('category') : \Faker\Factory::create()->word()}}">
                                    
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            
                                <div class="form-group">
                                    <div class="alert collapse"></div>
                                    <img class="img-fluid" id="preview" src="" alt="image" title=''>
                                </div>
                            
                                <div class="form-group"> 
                                    <div class="custom-file">
                                        <input type="file" name="image" id="inputGroupFile01" class="imgInp custom-file-input @error('image') is-invalid  @enderror" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid  @enderror">{{ old('description') ? old('description') : \Faker\Factory::create()->realText($maxNbChars=1000)}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
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
                                        <td>
                                            <a class="text-secondary" href=""><i data-feather="edit"></i></a>
                                            <a class="text-danger" href=""><i data-feather="x-circle"></i></a>
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