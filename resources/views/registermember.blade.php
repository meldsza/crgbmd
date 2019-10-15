@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD INDIA | Register
@endsection
@section('usercontent')
<div class="container">
    <h3 class="mt-4" style="color: gray;padding-top: 1em;">Member Registration</h3>
<div class="card">
<div class="card-body">
           
    <form method="post"action="/addmember">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" value="{{ old('name') }}">
                @error('name')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            
              <div class="form-group col-md-5 offset-md-1">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" required="" value="{{ old('dob') }}">
                @error('dob')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email id" required="" value="{{old('email')}}">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
              <div class="form-group col-md-5 offset-md-1">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" required="" value="{{old('designation')}}">
                @error('designation')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
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
                @error('gender')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
              <div class="form-group col-md-5 offset-md-1">
                  <label for="mblno">Contact</label>
                <input type="number" class="form-control" id="mblno" placeholder="Contact Number" required name="mblno" value="{{old('mblno')}}">
                @error('mblno')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="street">Address</label>
              <textarea class="form-control" id="street" placeholder="Street Address" required="" name="street" ></textarea>
            
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" placeholder="City" required="" name="city" value="{{old('city')}}">
              @error('city')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
              <label for="state">State</label>
              <input type="text" class="form-control" id="state" placeholder="State" required="" name="state" value="{{old('state')}}">
              @error('state')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
              <div class="form-group col-md-6">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="zip" placeholder="Country" required="" name="country" value="{{old('country')}}">
                @error('country')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
              </div>
              <div class="form-group">
              <label for="company-add">Company Address</label>
              <textarea class="form-control" id="company-add" placeholder="Company Address" required="" name="company-add" ></textarea>
             
            </div>
            <div class="form-group">
              <label for="Additional-Info">Comments</label>
              <textarea class="form-control" id="Additional-Info" placeholder="Additional Comments" name="Additional-Info"></textarea>
             
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