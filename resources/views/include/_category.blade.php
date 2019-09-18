<div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('kategori.create') }}">
                Jumlah Kategori
                <span class="badge badge-light">
                        {{count($categories)}}
                </span>
            </a>
        </div>
        <div class="card-body collapse">
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
                                    <a href="{{ route('user.show', $item->id) }}">{{$item->name}}</a>
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