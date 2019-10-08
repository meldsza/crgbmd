@extends('layouts.adminlayout')
@section('title')
    CRGBMD:ADMIN-ADD NEWS
@endsection
@section('content2')
<div class="container">
<h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add NEWS</h2>

<div class="card">
    <div class="card-body">
        <form method="post" action="/addnewss">
        @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="newsname">News Title</label>
                    <input type="text" class="form-control" id="newsname" name="newsname" placeholder="News title" value="{{old(newsname)}}"required>
                    @error('newsname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                        <label for="newsname">News name</label>
                        <input type="text" class="form-control" id="newsname" required placeholder="News Title" name="newsname" value="{{ old('newsname') }}">
                        @error('newsname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <label for="description"> News Description</label>
                <textarea class="form-control" id="description"name="description"
                    placeholder="News description"value="{{old(description)}}"required></textarea><br>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div><br>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Add Event</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection