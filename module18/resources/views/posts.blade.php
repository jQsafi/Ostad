<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <p>Category: {{ $post->category->name }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
