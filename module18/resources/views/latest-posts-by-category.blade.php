<html>
<head>
    <title>Latest Posts by Category</title>
</head>
<body>
    <h1>Latest Posts by Category</h1>

    <ul>
        @foreach (Category::all() as $category)
            <li>
                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                <p>Latest Post: {{ $category->getLatestPost()->title }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
