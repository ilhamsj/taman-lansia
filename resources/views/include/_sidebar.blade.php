<div class="card mb-4 shadow">


    <div class="card-body">
        Update Terbaru
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($items as $item)
            <li class="list-group-item">
                <a href="{{route('article.show', $item->slug)}}">{{$item->title}}</a>
            </li>
        @endforeach
    </ul>
</div>