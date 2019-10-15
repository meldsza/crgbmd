@extends('layouts.userlayout')
@section('hometitle')
CRGBMD-RESOURCES
@endsection
@section('usercontent')
    
    <!--parallax-->
    <div class="parallax2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: black;font-weight: bold">OUR
                SERVICES</span>
        </div>
    </div>

    <!--main-->
    <section>
        <div id="about">
            <h2 class="text-center animated fadeInUp" style="color: rgb(175, 132, 15);animation-delay: 1s">What We Offer
            </h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-rgd-tab" data-toggle="pill" href="#v-pills-rgd"
                            role="tab" aria-controls="v-pills-rgd" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Services-RGD</a>
                        <a class="nav-link" id="v-pills-bmd-tab" data-toggle="pill" href="#v-pills-bmd" role="tab"
                            aria-controls="v-pills-bmd" aria-selected="true"
                            style="color:rgb(175, 132, 15)">Services-BMD</a>
                        <a class="nav-link" id="v-pills-downloads-tab" data-toggle="pill" href="#v-pills-downloads"
                            role="tab" aria-controls="v-pills-downloads" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Downloads</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-rgd" role="tabpanel"
                            aria-labelledby="v-pills-rgd-tab">
                            Content for services-rgd
                        </div>
                        <div class="tab-pane fade" id="v-pills-bmd" role="tabpanel" aria-labelledby="v-pills-bmd-tab">
                            Content for services-bmd
                        </div>

                        <div class="tab-pane fade" id="v-pills-downloads" role="tabpanel"
                            aria-labelledby="v-pills-downloads-tab">
                            Content for downloads
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
