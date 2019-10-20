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
            <h3 class="text-center myheader "style="color:teal">News</h3>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($news as $value)
                    <div class="carousel-item active">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                            <h1 class="display-4 text-white">{{$value->newshead}}</h1>
                                <p class="lead text-white">
                                    {{$value->description}}</p>
                                <p class="card-text"><small class="text-muted">Last updated {{ $value->updated_at->diffForHumans()  }}</small></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
                     <i class="fa fa-group" aria-hidden="true" style="font-size:50px;color:gold"></i>
                     <h1 class="text-white">{{$teamno}}</h1>
                     <h3  style="color:white">Team Members</h3>
            </div>
        </div>
        </div>
    </div>

     <!--<section id="Events">-->

            <div class="accordion" id="accordionExample">
                    <div class="card" style="background-color:blanchedalmond">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0 text-center">
                                <button class="btn btn-link collapsed " type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3 class="text-center link"style="color:teal"><i class="fa fa-calendar" aria-hidden="true"style="color:teal"></i> EVENTS</h3>
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
                                <button type="button" class="btn btn-raised btn-warning "><a href="userevents" class="text-center">Know More</a></button>
                            </div>
                        </div>
                    </div>


                </div>

    <section id="gallery">
        <h3 class="text-center" style="padding-bottom:2em;color:teal">Gallery</h3>
        <div class="container">

<div class="row">
  @foreach($gallery as $value)
    <div class="col-md">


      <div class="ih-item circle effect2 left_to_right"><a href="#">
            <div class="spinner"></div>
      <div class="img"><img src="{{asset('storage/'.$value->galleryimage)}}" alt="img"></div>
          <div class="info">
          <div class="info-back">
          <h3>{{$value->imagetitle}}</h3>
          </div>
          </div></a>

        </div>


    </div>
    @endforeach
</div>
</div>
    </section>
    <!--footer-->
@endsection
