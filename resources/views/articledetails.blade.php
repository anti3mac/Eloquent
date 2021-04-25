<html>
    <head>
        <title>Article Details</title>
    </head>

    <body>
        <input type="button" value="{{$article->id}}">
        <input type="button" value="{{$article->title}}">
        <input type="button" value="{{$article->body}}"><br>

        {{-- {{dd($article->tags)}} --}}
        @foreach ($article->tags as $item)
            <a href="/article/tag/{{$item->id}}">{{$item->name}}</a>
        @endforeach
    </body>
</html>