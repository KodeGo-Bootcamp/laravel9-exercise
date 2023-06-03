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
             <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="row__profile">
                <div class="d-flex gap-2">
                    <div>
                        <img src="/storage/{{$post->user->profile->image}}" alt="" class="rounded-circle" style="max-width:3rem">
                    </div>
                    <div class="d-flex align-items-center">
                        <h4><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h4>
                    </div>
                   
                </div> <!--End of d-flex gap-2-->
                <hr>
                <p><span class="font-weight-bold pr-3">{{$post->user->username}}</span>{{$post->caption}}</p>
            </div><!--End of row__profile -->
            
        </div><!--End of col-4 -->
    </div><!--End of row-->
</div>
@endsection
