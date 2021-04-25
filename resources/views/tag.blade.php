<html>
    <head>
        <title>Tags</title>    
    </head>

    <body>
        <!-- {{dd($tag->articles)}} -->
        @foreach($tag->articles as $tags)
            {{$tags->name}}
        @endforeach
    </body>
</html>