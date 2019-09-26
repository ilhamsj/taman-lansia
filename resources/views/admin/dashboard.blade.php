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

        @foreach ($items as $key => $value)
        <div class="col-12 col-sm mb-3">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="text-primary">Data {{$key}}</strong>
                </div>
                <div class="card-body">
                    <h4>
                        {{$value}}
                        <span class="text-muted">{{$key}}</span>
                    </h4>
                </div>
            </div>
        </div>
        @endforeach
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