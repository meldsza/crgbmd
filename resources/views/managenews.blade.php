@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | News
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Manage News</h2><br>

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
      <td>
<form action="/deletenews/{{ $value->id }}"  method="POST">
@csrf
        <button type="submit" class="btn btn-raised btn-danger">Delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

                    </div>
                    </div>

                </div>

@endsection
