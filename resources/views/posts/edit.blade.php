<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{ isset($post->title) ? $post->title : '' }}">
    <input type="text" name="body" value="{{ isset($post->body) ? $post->body : '' }}">
    <button type="submit">Create</button>
</form>
