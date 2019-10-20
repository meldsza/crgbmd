@extends('layouts.adminlayout')
@section('title')
CRGBMD | MANAGE-GALLERY
@endsection
@section('content2')
<div class="container-fluid">
    <h2 class="mt-4" style="color: gray">Manage Gallery</h2><br>
        
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
<th scope="col">Image Title</th>
<th scope="col">Description</th>
<th scope="col">Gallery Image</th>
</tr>
</thead>
<tbody>
@foreach($res as $value)
<tr>

<td>{{$loop->iteration}}</td>
<td>{{$value->imagetitle}}</td>
<td>{{$value->description}}</td>
<td><img src="/storage/{{$value->galleryimage}}"style="max-height:300px;max-width:100px"></td>
<td><a class="text-white" href="/deletegalleryimage/{{ $value->id }}" onclick="return confirm('Are you sure you want to delete this item?');">
<button class="btn btn-raised btn-danger">Delete</button></a></td>
</tr>
@endforeach
</tbody>
</table>

        </div>
        </div>
        
    </div>
    
@endsection

