@extends('layouts.adminlayout')
@section('title')
    CRGBMD:ADMIN-ADD NEWS
@endsection
@section('content2')
<div class="container">
    <h3 class="mt-4" style="color: gray;padding-top: 1em;">Member Registration</h3>
<div class="card">
<div class="card-body">
           
                <form  method="post" action="/newregister"  enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
    </div>
   
    <div class="form-group col-md-5 offset-md-1">
      <label for="dob">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" required="">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email id" required="">
    </div>
    <div class="form-group col-md-5 offset-md-1">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" required="">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="gender">Gender</label>
      <select id="gender" class="form-control" required="" name="gender">
      <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
   
    </div>
    <div class="form-group col-md-5 offset-md-1">
        <label for="contact">Contact</label>
      <input type="number" class="form-control" id="contact" placeholder="Contact Number" required="" name="contact">
    </div>
  </div>

  <div class="form-group">
    <label for="street">Address</label>
    <textarea class="form-control" id="street" placeholder="Street Address" required="" name="street"></textarea>
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" placeholder="City" required="" name="city">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="state">State</label>
    <input type="text" class="form-control" id="state" placeholder="State" required="" name="state">
  </div>
    <div class="form-group col-md-6">
      <label for="zip">Zip</label>
      <input type="number" class="form-control" id="zip" placeholder="Zip Code" required="" name="zip">
    </div>
    </div>
     <div class="form-group">
    <label for="company_add">Address</label>
    <textarea class="form-control" id="company_add" placeholder="Company Address" required="" name="company_add"></textarea>
  </div>
  <div class="form-group">
    <label for="comment">Comments</label>
    <textarea class="form-control" id="comment" placeholder="Additional Comments" name="comment"></textarea>
  </div>
  </div>
  <div class="text-right">
  <button type="submit" class="btn btn-outline-success register_btn">Register</button>
  </div>
</form>


</div>
</div>
</div>

@endsection