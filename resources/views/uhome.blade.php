@extends('layouts.userlayout')
@section('hometitle')
  CRGBMD-HOME
@endsection
@section('usercontent')    
    <div>
        <img src="{{asset('images/about.jpg')}}" style="background-repeat:no-repeat;background-attachment: fixed;
        background-position: center; width: 100%;height : 400px; position:relative;">
    </div><br>
    <h1 class="text-center font-weight-bold"style="color:#4e73df">WELCOME TO CRGBMD|IN</h1>
    <section id="home">
       
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card text-white  mb-3 " style="max-width: 35rem;background-color:rgb(65, 153, 253);">
                        <div class="card-header text-center font-weight-bold">MISSION</div>
                        <div class="card-body">
                            <h5 class="card-title animated flipInX" style="animation-delay: 1s">Mission Statement</h5>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white  mb-3 " style="max-width: 35rem;background-color:rgb(74, 253, 169);">
                        <div class="card-header text-center font-weight-bold">VISION</div>
                        <div class="card-body">
                            <h5 class="card-title animated flipInX" style="animation-delay: 1s">Vision Statement</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section id="Events">-->

    <div class="accordion" id="accordionExample">
        <div class="card" style="background-color:#4e73df">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0 text-center">
                    <button class="btn btn-link collapsed " type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3 class="text-center text-white">EVENTS</h3>
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
    <div>
        <img src="{{asset('images/blackdna.jpg')}}" style="background-repeat:no-repeat;background-attachment: fixed;
        background-position: fixed; width: 100%;height : 400px; position:relative;opacity: 0.6;">
    </div>
    <section id="gallery">
    <img src="{{asset('images/black.jpg')}}"style="background-repeat:no-repeat;background-attachment: fixed;
        background-position: fixed; width: 100%;height : 400px; position:relative;opacity: 0.8;" alt="section background">

    </section>
@endsection