@extends("layouts.app")

@section("page-title", "Posts")

@section("content")
<section class="container">
    <div>
        <div>
            <h1 class="text-center">
                POSTS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <a href="{{route('posts.create')}}" class="btn btn-success rounded-5">ADD NEW POST</a>
            </div>
            @foreach ($posts as $index => $post)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center  border rounded">
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <a><strong>{{$post->user_id}}</strong></a>
                    <p>{{$post->title}}</p>
                    <p>{{$post->date}}</p>
                    <p>{{$post->description}}</p>
                    <a href='{{route('posts.show', $post->id)}}' class='btn btn-light'><strong>MORE INFO</strong></a>
                    <a href='{{route('posts.edit', $post->id)}}' class='btn btn-light'><strong>EDIT POST</strong></a>
                    <form action="{{ route("posts.destroy", $post->id) }}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-sm btn-warning" value='DELETE'>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
