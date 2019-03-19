@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{$post->title}}
            <hr>
            @if( Session::has('success'))
                <div class="alert alert-success">
                    {{Session('success')}}
                </div>
            @endif

            @if( $post->images()->count() > 0)
                <div class="row">
                    @foreach ($post->images as $image)
                        <div class="col-md-4">
                            <div class="card">
                                <a href="{{ asset('storage/images') . '/' . $image->path}}" data-lity>
                                    <img src="{{ asset('storage/images') . '/' . $image->path}}"  height="150px" width="150px" class="card-img-top mb-3">
                                </a>
                                
                                <div class="card-body">

                                </div>
                                <div class="card-footer">
                                <form action="{{ route('images.destroy', [ 'image' => $image])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
