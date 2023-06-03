@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
<div class="row d-flex">
            <div class="col-3">
                <img
                src="{{$user->profile->profileImage()}}"
                alt="profile"
                class="rounded-circle" style="width:20vw"/>
            </div>

            <div class="col-9 pt-5">
                <!-- <h1 class="username text-uppercase">TestUser1</h1> -->
                <div class="d-flex mb-3">
                <h2 class="user align-items-center">{{$user->username}}</h2>

                <!-- <button class="btn btn-primary ms-5 px-3" >Follow</button>  -->
                <follow-btn ></follow-btn>
                </div>
                @can('update', $user->profile)
                <a class="pl-3" href="/p/create">Add Post</a>
                @endcan
                |
                @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex  mt-3">
                <!-- display number of posts -->
                <div style="padding-right:4%">{{$user->posts->count()}}<strong>posts</strong></div>
                <div style="padding-right:4%">20k <strong>followers</strong></div>
                <div style="padding-right:4%">100 <strong>following</strong></div>
                </div>
                <div class="pt-4">{{$user->profile->title}}</div>
            <div >{{$user->profile->description}}</div>
            <div >{{$user->profile->url}}</div>


            </div>
            <div class="row">
                @foreach ($user->posts as $post)
                    <div class="col-4 pt-4 bg-dark">
                        <!-- <a href="/p/{{$post->user->id}}"> -->
                        <a href="/p/{{$post->id}}">
                        <img class="w-100" src="/storage/{{$post->image}}" alt="">
</a>    
                    </div>
                @endforeach

                
            </div>



        </div>
</div>
@endsection
