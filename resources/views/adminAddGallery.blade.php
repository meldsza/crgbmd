@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Add Gallery
@endsection
@section('content2')
<div class="container">
<h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add Gallery</h2>

<div class="card">
    <div class="card-body">
        <form method="post"action="/addgallerys"enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="imagetitle">Image Title</label>
                    <input type="text" class="form-control" id="imagetitle" required placeholder="Enter Image Title" name="imagetitle" value="{{ old('imagetitle') }}">
                    @error('imagetitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="inputEmail4"name="description"required placeholder="Description" value="{{ old('description') }}"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                        <label for="galleryimage">Image</label>
                        <input type="file" name="galleryimage" id="galleryimage">
                        @error('galleryimage')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Add Image</button>
            </div>
        </form>
    </div>
</div>
</div>


@endsection