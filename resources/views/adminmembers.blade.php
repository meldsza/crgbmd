@extends('layouts.adminlayout')

@section('title')
CRGBMD INDIA | Members
@endsection
@section('content2')
            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray">Registered Members</h2><br>
                 <div class="text-right">
                        <button class="btn btn-raised"   onclick="printData();" id="printButton" style="background-color: #4e73df;color: white;margin: 1em;"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                    </div>

                    
                <div class="card">
                    <div class="card-body">
                   
                   
                   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Designation</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
  @foreach($res as $value)
    <tr>
      
      <td>{{$loop->iteration}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->mblno}}</td>
      <td>{{$value->designation}}</td>
      <td>{{$value->state}}</td>
      <td>{{$value->country}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

                    </div>
                    </div>
                    
                </div>
@endsection




@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js" integrity="sha256-D8H34/5jeY9jayzWCyxojqD+Kw5XicflFLXo/Ndzacw=" crossorigin="anonymous"></script>
<script>
    function printData(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.card").printArea( options );
    };
</script>
@endsection