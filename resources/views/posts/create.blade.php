<h1>Create new Post</h1>

{{--<form action="{{url('posts/store')}}">--}}
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="enter title">
    <input type="text" name="body" placeholder="enter body">
    <button type="submit">Create</button>
</form>
