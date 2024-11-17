<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex vh-100">
        <div class="container d-flex justify-content-center align-items-center">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="p-4 bg-white rounded shadow"
                style="width: 100%; max-width: 700px;">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ $post->title }}" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Enter title">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea rows="3" value="{{ $post->content }}" type="text" class="form-control  @error('content') is-invalid @enderror" id="content"
                        name="content" placeholder="Enter content">{{ $post->content }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
