<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    @foreach($posts as $post)
        <article>
            <h1>{{ $post->title }}</h1>
            <div class="body">
                {{ $post->body }}
            </div>
        </article>
    @endforeach
</body>
</html>