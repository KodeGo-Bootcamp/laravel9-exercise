@extends('layouts.app')

@section('content')
<div class='container'>
<form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PATCH')
     <div class="row">
        <div class="col-8" >
            <div class="row mb-2 w-100 ms-2 d-flex justify-content-center" >
                <h1 class="col-md-3">Edit Profile</h1>
            </div>
             <div class="row mb-3"  >
                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                <div class="col-md-6">
                     <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title" autofocus>
                      @error('title')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            <div class="row mb-3 "  >
                    <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                <div class="col-md-6">
                     <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>
                      @error('description')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            <div class="row mb-3 "  >
                    <label for="url" class="col-md-4 col-form-label text-md-end">Url</label>
                <div class="col-md-6">
                     <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>
                      @error('url')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            <div class="row mb-3 "  >
                    <label for="image" class="col-md-4 col-form-label text-md-end">image</label>
                <div class="col-md-6">
                     <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                      @error('image')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
            </div>
            
            <div class="row mb-3 col-md-3 w-100 d-flex justify-content-center " >
                <button class="btn btn-primary col-md-3">
                    Save Profile
                </button>
            </div>
        </div>
     </div>
     </form>

</div>
@endsection