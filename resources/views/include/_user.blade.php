<div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('image.create') }}">
                Pengguna
                <span class="badge badge-light">
                        {{count($users)}}
                </span>
            </a>
        </div>
        <div class="card-body collapse">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('user.show', $item->id) }}">{{$item->name}}</a>
                                </td>
                                <td>
                                    {{$item->email}}
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