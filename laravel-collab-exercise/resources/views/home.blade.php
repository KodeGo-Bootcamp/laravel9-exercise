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
            <div class="col-4">
                <img 
                src="https://img.rawpixel.com/private/static/images/website/2022-05/ns8230-image.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=348b2fd5c7adbc576517dae7c32de4aa" 
                alt="profile"
                class="rounded-circle" style="width:20vw"/>
            </div>
            <div class="col-1">
                <h1 class="username text-uppercase">TestUser1</h1>
                <p class="user">@test_user</p>
            </div>
        </div>
</div>
@endsection
