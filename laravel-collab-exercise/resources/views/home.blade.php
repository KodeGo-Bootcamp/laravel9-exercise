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
                src="https://img.rawpixel.com/private/static/images/website/2022-05/ns8230-image.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=348b2fd5c7adbc576517dae7c32de4aa" 
                alt="profile"
                class="rounded-circle" style="width:20vw"/>
            </div>
           
            <div class="col-9 pt-5">
                <h1 class="username text-uppercase">TestUser1</h1>
                <p class="user">@test_user</p>
                <div class="d-flex">
                <div style="padding-right:4%">100 <strong>posts</strong></div>
                <div style="padding-right:4%">20k <strong>followers</strong></div>
                <div style="padding-right:4%">100 <strong>following</strong></div>
                </div>
                <div class="pt-4">Title</div>
            <div >description</div>
            <div >Website Link: </div>
           
            
            </div>
            <div class="row">   
                <div class="col-4">
                    <img class="w-100" src="https://github.com/KodeGo-Bootcamp/HTML-Activity-Images/blob/main/pexels-dominika-roseclay-2023384.jpg?raw=true" alt="">
                </div>
                <div class="col-4">
                <img class="w-100" src="https://github.com/KodeGo-Bootcamp/HTML-Activity-Images/blob/main/pexels-dominika-roseclay-2023384.jpg?raw=true" alt="">
                </div>
                <div class="col-4">
                <img class="w-100" src="https://github.com/KodeGo-Bootcamp/HTML-Activity-Images/blob/main/pexels-dominika-roseclay-2023384.jpg?raw=true" alt="">
                </div>
            </div>

           

        </div>
</div>
@endsection
