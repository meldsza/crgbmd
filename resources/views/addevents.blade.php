@extends('layouts.adminlayout')
@section('title')
    CRGBMD:ADMIN-ADD EVENTS
@endsection
@section('content2')
<div class="container">
<h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add Events</h2>

<div class="card">
    <div class="card-body">
        <form method="post"action="/addeventss">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="eventname">Event Name</label>
                    <input type="text" class="form-control" id="eventname" required placeholder="Event Name" name="eventname" value="{{ old('eventname') }}">
                    @error('eventname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="eventdate">Event date</label>
                    <input type="date" class="form-control" id="eventdate" required placeholder="Event date"name="eventdate"value="{{ old('eventdate') }}">
                    @error('eventdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="eventvenue">Event Venue</label>
                    <input type="text" class="form-control" id="inputEmail4"name="eventvenue"required placeholder="Event Venue"value="{{ old('eventvenue') }}">
                    @error('eventvenue')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                <label for="eventtype">Event Type</label>
                    <select class="form-control" required name="eventtype"value="{{ old('eventtype') }}">
                        <option>Technical</option>
                        <option>Non-Technical</option>
                    </select>
                    @error('eventtype')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description"required name="description"
                    placeholder="Event description"value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
            <div class="form-group">
                <label for="eventimage">Image</label>
                <input type="file" class="form-control-file" name="eventimage"id="eventimage"value="{{ old('eventimage') }}">
                @error('eventimage')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
                
           


            <button type="submit" class="btn btn-outline-success">Add Event</button>
        </form>
    </div>
</div>
</div>


@endsection