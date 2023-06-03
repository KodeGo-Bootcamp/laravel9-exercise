@extends('layouts.app')

@section('content')


<div class="container">
    <!-- <div class="row">
        <h1>Photo of Posts</h1>
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-4">
            <h3>{{$post->user->username}}</h3>
            <p>{{$post->caption}}</p>
        </div>
    </div> -->
     

    <div class="row">
        <div class="col-8">
             <img src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-4">
            <div>
                <div>
                    <div>
                        <img src="/storage/{{$post->user->profile->image}}" alt="" class="rounded-circle" style="width:20vw">
                    </div>
                    <div>
                        <h4>{{$post->user->username}}</h4>
                    </div>
                </div>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
