<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add New</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Post</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm">Show</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>