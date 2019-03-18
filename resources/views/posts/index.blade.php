@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             
            <ul class="list-group">
                @foreach( $posts as $post)
                    <li class="list-group-item mb-2">
                        {{  $post->title}}
                    <a href="{{ route('posts.show',[ 'post' => $post])}}" class="btn btn-outline-secondary float-right"> View Post</a>
                    </li>
                 
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
