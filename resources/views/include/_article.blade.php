<div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('article.create') }}">
                Jumlah Artikel
                <span class="badge badge-light">
                        {{count($items)}}
                </span>
            </a>
        </div>
        <div class="card-body collapse">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Foto</th>
                            <th>Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <a href="{{ route('user.show', $item->user->id) }}">{{$item->user->name}}</a>
                                </td>
                                <td>
                                    <a href="{{route('article.show', $item->id)}}">{{$item->title}}</a>
                                </td>
                                <td>
                                    <img class="img-thumbnail" data-src="{{$item->image->url}}" alt="{{$item->image->name}}" srcset="">
                                </td>
                                <td>
                                    @foreach ($item->blog as $blog)
                                        <a href="{{route('kategori.show', $blog->category->name)}}">{{$blog->category->name}}</a>
                                    @endforeach
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