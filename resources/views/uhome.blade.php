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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                   </p>
                   </div>
               </div>
           </div>
           <div class="row">
            <div class="col-md-6 offset-md-6" data-aos="fade-left"  style="animation-delay:3s">
                <h2 style="color:teal">Vision</h2>
                <div class="card-body">
                <p style="color:gray">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
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
                        @foreach($events as $event)
                        <div class="card">
                            <img class="card-img-top zoom" src="{{asset('storage/'.$event->eventimage)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$event->eventname}}</h5>
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text"><small class="text-muted">Last updated {{ $event->updated_at->diffForHumans()  }}</small></p>
                            </div>
                        </div>
                       @endforeach
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