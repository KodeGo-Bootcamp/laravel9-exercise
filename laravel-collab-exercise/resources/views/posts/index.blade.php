@extends('layouts.app')

@section('content')


<div class="container">
   @foreach ($posts as $post)

   <div class="row">
        <div class="col-8">
             <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="row__profile">
                <div class="d-flex gap-2">
                    <div>
                        <img src="/storage/{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle" style="max-width:3rem">
                    </div>
                    <div class="d-flex align-items-center">
                        <h3 style="padding-right:2%;"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h3> | 

                        <a href="#" style="padding-left:3%; font-weight:bold;"> Follow</a>
                    </div>
                   
                </div> <!--End of d-flex gap-2-->
                <hr>
                <p><span style="font-weight:bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span> | {{$post->caption}}</p>
            </div><!--End of row__profile -->
            
        </div><!--End of col-4 -->
    </div><!--End of row-->
    @endforeach
</div>

     

    @endsection
