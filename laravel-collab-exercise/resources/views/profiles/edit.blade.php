@extends('layouts.app')

@section('content')
<div class='container'>
<form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PATCH')
     <div class="row">
        <div class="col-8" style="background-color:orange">
            <div class="row mb-2 w-100 ms-2 d-flex justify-content-center" style="background-color:green">
                <h1 class="col-md-3">Edit Post</h1>
            </div>
             <div class="row mb-3" style="background-color:yellow" >
                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                <div class="col-md-6">
                     <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                      @error('title')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            <div class="row mb-3 " style="background-color:yellow" >
                    <label for="description" class="col-md-4 col-form-label text-md-end">description</label>
                <div class="col-md-6">
                     <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                      @error('description')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            <div class="row mb-3 col-md-3 w-100 d-flex justify-content-center " style="background-color:yellow">
                <button class="btn btn-primary col-md-3">
                    Update Post
                </button>
            </div>
        </div>
     </div>
     </form>

</div>
@endsection