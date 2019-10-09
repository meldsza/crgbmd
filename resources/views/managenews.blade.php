@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | News
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Manage News</h2><br>
                    
                <div class="card">
                    <div class="card-body">
                   
                   
                   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($res as $value)
    <tr>
      
      <td>{{$loop->iteration}}</td>
      <td>{{$value->newshead}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->newsdate}}</td>
      <td><a class="text-white" href="/deletenews/{{ $value->id }}" onclick="return confirm('Are you sure you want to delete this item?');">
        <button class="btn btn-raised btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

                    </div>
                    </div>
                    
                </div>
                
@endsection





