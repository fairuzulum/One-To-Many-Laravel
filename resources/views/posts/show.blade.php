<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm mb-2">back</a>
        <div class="card">

            <div class="card-body">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>

                <hr>
                <h2>Comments: </h2>
                <form action="{{ route('comments.create') }}" method="POST" class="mb-3">
                    @csrf
                    <input type="text" hidden name="postid" value="{{ $post->id }}" id="">
                    <textarea rows="4" class="form-control" type="text" name="comment" id="comment" placeholder="add comment"></textarea>
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Comment</button>
                </form>
                @foreach ($post->comments()->get() as $comment)
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <i class="fa fa-comments"></i> {{ $comment->comment }}
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
