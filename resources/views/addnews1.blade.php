@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Add News
@endsection
@section('content2')
<div class="container">
<h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add News</h2>

<div class="card">
    <div class="card-body">
        <form method="post"action="/addnewss">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="newshead">News Name</label>
                    <input type="text" class="form-control" id="newshead" required placeholder="Event Name" name="newshead" value="{{ old('newshead') }}">
                    @error('newshead')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="newsdate">News date</label>
                    <input type="date" class="form-control" id="newsdate" required placeholder="News date"name="newsdate"value="{{ old('newsdate') }}">
                    @error('newsdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Event Venue</label>
                    <textarea class="form-control" id="inputEmail4"name="description"required placeholder="Description" value="{{ old('description') }}"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Add News</button>
            </div>
        </form>
    </div>
</div>
</div>


@endsection