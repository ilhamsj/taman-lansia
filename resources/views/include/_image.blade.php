<div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('image.create') }}">
                Jumlah Gambar
                <span class="badge badge-light">
                        {{count($images)}}
                </span>
            </a>
        </div>
        <div class="card-body collapse">
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