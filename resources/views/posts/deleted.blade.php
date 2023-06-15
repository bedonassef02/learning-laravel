<h1>Deleted Posts</h1>

@foreach ($posts as $post)
    <div class="card">
        <h5 class="card-header">
            {{ $post->title }}
            <form action="{{ route('posts.restore', $post->id) }}" method="post" class="d-inline float-right">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Restore</button>
            </form>
        </h5>
        <div class="card-body">
            {{ $post->content }}
        </div>
    </div>
@endforeach
