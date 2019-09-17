<h1>{{count($items)}}</h1>
@foreach ($items as $item)
    <a href="{{route('kategori.show', $item->name)}}">{{$item->name}}</a> <br/>
@endforeach