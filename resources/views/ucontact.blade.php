@extends('layouts.userlayout')
@section('hometitle')
  CRGBMD INDIA | Contact Us
@endsection
@section('usercontent')    
    <div style="background: url(/images/contact.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position:relative;
    width: 100%;
    min-height : 400px;"></div>
    

    <div class="container">
            <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Contact Us</h2>
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Dr. Anirban Chakraborty<p></h5>
                              <h6><p> Deputy Director</p>
                               <p>Nitte University Centre for Science</p>
                                <p>Education &amp; Research</p>
                               <p>P.O Deralakatte, Mangalore - 575018</p>
                            <p> Tel +91 70221 29624</p></h6>
                         </div>
                         <div class="col-md-6">
                             <img src={{asset('images/connect.jpg')}} class="img-thumbnail" style="float:right">
                         </div>
                    </div>
            </div>
        </div>
    </div>
@endsection