@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Events
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Manage Events</h2><br>

                <div class="card">
                    <div class="card-body">
                   
                   
                   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Type</th>
      <th scope="col">Description</th>
      <th scope="col">Event Venue</th>
      <th scope="col">Event Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($res as $value)
    <tr>
      
      <td>{{$loop->iteration}}</td>
      <td>{{$value->eventname}}</td>
      <td>{{$value->eventtype}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->eventvenue}}</td>
      <td>{{$value->eventdate}}</td>
      <td><img src="/storage/{{$value->eventimage}}"></td>
      <td><a class="text-white" href="/deleteevents/{{ $value->id }}" onclick="return confirm('Are you sure you want to delete this item?');">
        <button class="btn btn-raised btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
                    </div>
                    </div>
                    
                </div>
                
@endsection





