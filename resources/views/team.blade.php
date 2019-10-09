@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Team
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Team</h2><br>
                 <div class="text-right">
                        <button class="btn btn-raised" id="printButton" style="background-color: #4e73df;color: white;margin: 1em;"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                    </div>

                    
                <div class="card">
                    <div class="card-body">
                   
                   
                   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Affiliation</th>
      <th scope="col">Email</th>
      <th scope="col">Committe</th>
      <th scope="col">Designation</th>
      <th scope="col">Position</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($res as $value)
    <tr>
      
      <td>{{$loop->iteration}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->affiliation}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->committe}}</td>
      <td>{{$value->designation}}</td>
      <td>{{$value->position}}</td>
      @if(!is_null($value->image))
                        <td><img src="{{ asset('uploads/images/'.$value->image)}}" width="100px" height="100px" /></td>
                        @else
                        <td> </td>
                        @endif

                        <td><a class="text-white" href="/delete/{{ $value->id }}" onclick="return confirm('Are you sure you want to delete this item?');">
                          <button class="btn btn-raised btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

                    </div>
                    </div>
                    
                </div>
                
@endsection





