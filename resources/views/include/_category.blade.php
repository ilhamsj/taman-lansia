<div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('kategori.create') }}">
                Jumlah Kategori
                <span class="badge badge-light">
                        {{count($categories)}}
                </span>
            </a>
        </div>

        <div class="">
            <div class="card-body">
                <form action="{{ route('kategori.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Kategori</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" value="{{ old('name') ? old('name') : ''}}">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>
                                        <a href="{{ route('kategori.show', $item->name) }}">{{$item->name}}</a>
                                    </td>
                                    <td class="text-center action">
                                        <a class="text-secondary" href="" 
                                            onclick="edit_kategori(
                                                '{{$item->name}}',
                                                '{{route('kategori.update', $item->id)}}',
                                                )">
                                                <i data-feather="edit"></i>
                                        </a>
                                        <a class="text-danger" href="{{ route('kategori.destroy', $item->id) }}" onclick="delete_kategori({{$item->id}})"> 
                                            <i data-feather="x-circle"></i>
                                        </a>
                                        <form id="{{$item->id}}" action="{{ route('kategori.destroy', $item->id) }}" method="post">
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
            function edit_kategori(name, url) {
                event.preventDefault();
                $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");
                $("form").attr("action", url);
                $("#name").val(name);
            }
            function delete_kategori(id)
            {
                event.preventDefault(); 
                if (confirm() == true) {
                    document.getElementById(id).submit();
                }
            }
        </script>
    @endpush