@extends('layouts.app')

@section('page-title',$post->title)

@section('content')
<section class='container'>
    <div class='row'>
        <div class='col-12'>
            <h1 class='text-center'>
                Post
            </h1>
        </div>
        <div class='row d-flex justify-content-center'>
            <div class='col-6 m-3 p-3 d-flex flex-column align-items-center'>
                <div class='card-body text-center d-flex flex-column justify-content-end mt-2'>
                    <p>
                         <strong>{{$post->title}}</strong>
                    </p>
                    <p>
                       {{$post->user_id}}
                    </p>

                    <p>
                        {{$post->date}}
                    </p>

                    <p>
                        {{$post->description}}
                    </p>

                    <p>
                        {{$post->content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
