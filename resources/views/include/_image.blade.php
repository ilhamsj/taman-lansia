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
                    <input type="text" name="alt" id="alt" class="form-control @error('alt') is-invalid  @enderror" value="{{ old('alt') ? old('alt') : ''}}" placeholder="Title">

                    @error('alt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
                <div class="form-group"> 
                    <div class="custom-file">
                        <input type="file" name="url" id="inputGroupFile01" class="imgInp custom-file-input @error('url') is-invalid  @enderror" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        {{-- @error('url') --}}
                            <span class="invalid-feedback" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                eror
                            </span>
                        {{-- @enderror --}}
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
                                    <img class="img-fluid" src="{{url('storage/images/'.$item->url)}}" alt="{{$item->name}}" srcset="">
                                </td>
                                <td class="text-center">
                                    <a class="text-danger" href="{{ route('image.destroy', $item->id) }}" onclick="delete_kategori({{$item->id}})"> 
                                        <i data-feather="x-circle"></i>
                                    </a>
                                    <form id="{{$item->id}}" action="{{ route('image.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
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
        function delete_kategori(id)
        {
            event.preventDefault(); 
            if (confirm() == true) {
                document.getElementById(id).submit();
            }
        }
    </script>
@endpush