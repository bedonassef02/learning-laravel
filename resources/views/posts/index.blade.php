<h1>All Posts</h1>

@foreach ($posts as $post)
    <div class="card">
        <h5 class="card-header">
            {{ $post->title }}
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary float-right">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </h5>
        <div class="card-body">
            {{ $post->content }}
        </div>
    </div>
@endforeach
