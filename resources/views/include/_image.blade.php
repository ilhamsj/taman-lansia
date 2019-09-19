<div class="card">
    <div class="card-header">
        <a class="btn btn-primary btn-sm" href="{{ route('image.create') }}">
            Album
            <span class="badge badge-light">
                    {{count($images)}}
            </span>
        </a>
    </div>
    <div class="">
        <div class="card-body">
            <form  method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="alert"></div>
                    <img class="img-fluid" id="preview" src="" alt="image" title=''>
                </div>
                <div class="form-group"> 
                    <div class="custom-file">
                        <input type="file" name="image" id="inputGroupFile01" class="imgInp custom-file-input" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('user.show', $item->id) }}">{{$item->alt}}</a>
                                </td>
                                <td>
                                    <img class="img-fluid" data-src="{{$item->url}}" alt="{{$item->name}}" srcset="">
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm" href="{{ route('article.edit', $item->id) }}">
                                        Edit
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

@push('scripts')
    <script>
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
@endpush