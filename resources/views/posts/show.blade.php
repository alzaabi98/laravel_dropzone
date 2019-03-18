@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{$post->title}}
            <hr>
            

            @if( $post->images()->count() > 0)

            @else
                <p> No images for this post</p>
            @endif
                
            
             
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
        <form action="{{ route('posts.upload', [ 'post' => $post])}}" class="dropzone" id="myDropzoneForm">
            @csrf
        </form>
        
        </div>
        
    </div>
</div>
@endsection
