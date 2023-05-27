@extends('layouts.app')

@section('content')


<div class="container">
     <h1>Photo of Posts</h1>

    <img src="/storage/{{$post->image}}" alt="">

</div>
@endsection
