@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Events
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Manage Events</h2><br>

                <div class="card">
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="alert alert-{{ Session::get('status') }} status-box">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            {{ Session::get('message') }}
                        </div>
                    @endif 
                   
                   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Type</th>
      <th scope="col">Description</th>
      <th scope="col">Event Venue</th>
      <th scope="col">Event Date</th>
      <th scope="col">Event Image</th>
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
      <td><img src="/storage/{{$value->eventimage}}"style="max-height:300px;max-width:100px"></td>
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





