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
        <div class="col-12 col-sm-8 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="text-primary">Edit</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.update', $item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <div class="alert collapse"></div>
                            <img class="img-fluid rounded" id="preview" src="{{ secure_asset('storage/images/'.$item->image) }}" alt="image" title=''>
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
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid  @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <input type="text" name="category" id="category" class="form-control @error('category') is-invalid  @enderror" value="{{ old('category') ? old('category') : $item->category }}">
                            
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
    // $('#preview').hide();
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
        });
    </script>
@endpush