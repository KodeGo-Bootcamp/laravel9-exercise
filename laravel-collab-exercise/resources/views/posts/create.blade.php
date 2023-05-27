@extends('layouts.app')

@section('content')


<div class="container">
     <form action="/p" method="post" enctype="multipart/form-data">
     @csrf
     <div class="row">
        <div class="row mb-3" >
            <h1>Add new post</h1>
                <label for="caption" class="col-md-4 col-form-label text-md-end">Post caption</label>
            <div class="col-md-6">
                 <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                  @error('caption')
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </div>
        </div>
        <div class="row mb-3" >
                <label for="image" class="col-md-4 col-form-label text-md-end">Post image</label>
            <div class="col-md-6">
                 <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                  @error('image')
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </div>
            <div class="row mb-3 w-25 p-2">
                <button class="btn btn-primary">
                    New Post
                </button>
            </div>
        </div>
     </div>
     </form>
</div>
@endsection
