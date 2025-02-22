<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center">{{ $post->title }}</h1>
        <p><strong>User ID:</strong> {{ $post->user_id }}</p>
        <p><strong>Slug:</strong> {{ $post->slug }}</p>
        <p><strong>Konten:</strong> {{ $post->content }}</p>
        <p><strong>Status:</strong> {{ $post->status }}</p>
        <p><strong>Dibuat Pada:</strong> {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
        <p><strong>Hits:</strong> {{ $post->hits }}</p>
        <img src="{{ asset('path/to/images/' . $post->image) }}" alt="{{ $post->title }}" width="200">

        <div class="text-center mt-4">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali ke Daftar Postingan</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
