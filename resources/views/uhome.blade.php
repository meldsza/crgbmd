@extends('layouts.userlayout')
@section('hometitle')
  CRGBMD INDIA | Home
@endsection
@section('usercontent')    
    <div class="parallaximg"></div>
    
    <section id="home">
       
        <div class="container">
           <div class="row">
               <div class="col-md-6" data-aos="fade-right" style="animation-delay:3s">
                   <h2 style="color:teal">Mission</h2>
                   <div class="card-body">
                   <p style="color:gray">
                    To create a network and to provide a platform conducive for collaborations at multiple levels involving clinicians and basic scientists for a systematic study on select rare genetic and bone marrow disorders through the use of genomic technologies.
                   </p>
                   </div>
               </div>
           </div>
           <div class="row">
            <div class="col-md-6 offset-md-6" data-aos="fade-left"  style="animation-delay:3s">
                <h2 style="color:teal">Vision</h2>
                <div class="card-body">
                <p style="color:gray">
                To improve our understanding of a group of rare genetic and bone marrow disorders through genomic research leading to improved clinical diagnosis and therapies for the patients.
                </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--<section id="Events">-->

    <div class="accordion" id="accordionExample">
        <div class="card" style="background-color:blanchedalmond">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0 text-center">
                    <button class="btn btn-link collapsed " type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3 class="text-center link"><i class="fa fa-calendar" aria-hidden="true"></i> EVENTS</h3>
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body text-center">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top zoom" src="{{asset('images/image11.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card ">
                            <img class="card-img-top zoom " src="{{asset('images/image11.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top zoom" src="{{asset('images/image11.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer content than the first to
                                    show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div><br>
                    <button type="button" class="btn btn-raised btn-warning text-center">Know More</button>
                </div>
            </div>
        </div>


    </div>


    <div class="user_icons" style="background-image:url(/images/icons.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position:relative;
    width: 100%;
    min-height : 400px;
    opacity: 0.9;">
        <div class="row icon" style="padding-top:6em;">
        <div class="col-md">
            <div class="text-center">
             <i class="fa fa-users" aria-hidden="true" style="font-size:50px;color:gold"></i>
             <h1 class="text-white">{{$total}}</h1>
             <h3 style="color:white">Members Registered</h3>
            </div>
        </div>
        <div class="col-md">
                <div class="text-center">
                 <i class="fa fa-calendar" aria-hidden="true" style="font-size:50px;color:gold"></i>
                 <h1 class="text-white">{{$eventno}}</h1>
                 <h3  style="color:white">Events Conducted</h3>
                </div>
        </div>
         <div class="col-md">
                    <div class="text-center">
                     <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:50px;color:gold"></i>
                     <h1 class="text-white">{{$total}}</h1>
                     <h3  style="color:white">Loreum ipsum</h3>
            </div>
        </div>
        </div>
    </div>


    <section id="gallery">
        <h3 class="text-center" style="padding-bottom:2em">Gallery</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                     <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap" data-action="zoom">
                    </div>
                </div>
                <div class="col-sm">
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap">
                   </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap">
                   </div>
               </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                         <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm">
                         <div class="card" style="width: 18rem;">
                             <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap">
                       </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('/images/team.jpg')}}" alt="Card image cap">
                       </div>
                   </div>
                </div>
        </div>
    </section>

    <section id="gallery">
        <h3 class="text-center" style="padding-bottom:2em">Gallery</h3>
        <div class="container">
          
<div class="row">
    <div class="col-md">
   
    
      <div class="ih-item circle effect2 left_to_right"><a href="#">
      <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
     
   
    </div>
    <div class="col-md">
   
   
      <div class="ih-item circle colored effect2 left_to_right"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
    
    </div>
 
    <div class="col-md">
   
    
      <div class="ih-item circle effect2 right_to_left"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
   
   
    </div>
    <div class="col-md">
      <div class="ih-item circle colored effect2 right_to_left"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>

    </div>
  </div>
  <div class="row">
    <div class="col-md">
   
      <!-- normal -->
      <div class="ih-item circle effect2 left_to_right"><a href="#">
      <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
      <!-- end normal -->
   
    </div>
    <div class="col-md">
   
      <!-- colored -->
      <div class="ih-item circle colored effect2 left_to_right"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
      <!-- end colored -->
   
    </div>
 
  <!-- end Left to right-->
   
   
  <!-- Right to left-->
  
    <div class="col-md">
   
      <!-- normal -->
      <div class="ih-item circle effect2 right_to_left"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
      <!-- end normal -->
   
    </div>
    <div class="col-md">
   
      <!-- colored -->
      <div class="ih-item circle colored effect2 right_to_left"><a href="#">
          <div class="img"><img src="{{asset('images/services.jpg')}}" alt="img"></div>
          <div class="info">
            <h3>Heading here</h3>
            <p>Description goes here</p>
          </div></a></div>
      <!-- end colored -->
   
    </div>
  </div>
     </div>
    </section>
    <!--footer-->
@endsection