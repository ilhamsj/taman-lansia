<div class="card mb-4 shadow">
    <div class="card-header">
        Search
    </div>
    <div class="card-body">
        <div class="form-group">
          <input type="search" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="category">Kategori</label>
            <select class="form-control" name="category" id="">
                @foreach ($items as $item)
                <option>
                    {{$item->category}}
                </option>
                @endforeach
            </select>
        </div>
        <button type="button" name="" id="" class="btn btn-success btn-block">Search</button>
    </div>

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