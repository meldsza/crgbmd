@extends('layouts.userlayout')
@section('hometitle')
  CRGBMD-ABOUT
@endsection
@section('usercontent')  

<div class="parallax"></div>

    <!--main-->
    <section>
        <div id="about">
            <h2 class="text-center animated fadeInUp" style="color: rgb(175, 132, 15);animation-delay: 1s">About Us</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-goals"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Goals
                            and Objectives</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-about" role="tab"
                            aria-controls="v-pills-home" aria-selected="true" style="color:rgb(175, 132, 15)">About
                            Nitte-DU</a>
                        <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-Team" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Team</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-committe"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Committe</a> -->
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-collaborators"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Collaborators</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Funding"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:rgb(175, 132, 15)">Funding Sources</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-goals" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <h5>Our goals and objectives</h5><br>
                            <ul class="goals" id="goals">
                                <li>> Bring together the clinicians and the researchers under one platform</li>
                                <li>> Provide a comprehensive information about the status of RGD and BMFS</li>
                                <li>> Gain a better understanding of these syndromes</li>
                                <li>> Improve Clinical therapies and outcomes for the patients.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h5>Why NITTE as a center for the consortium ?</h5><br>
                            <p>
                                <p>The following are sound reasons as to why the consortium should be set up at
                                    NITTE</p>
                                <ul>
                                    <li>NITTE is a neutral venue for the consortium involving a number of Medical
                                        Centers in Southern India and has a great reputation
                                        of a University striving towards exellence in medical research and teaching.
                                    </li>
                                    <li>Availability of patient samples from the super speciality hospital
                                        associated with the University and also from other medical
                                        colleges and the associated hospitals in and around Mangalore.</li>
                                    <li>Available infrastructure and resources with state of the art research
                                        facilties in the centre for science education and research
                                        (NUCSER) and a stem cell and regenerative medicine centre involved in HSC
                                        research (NUCSEReM).</li>
                                    <li>The program directors have years of expertise in the area of BMF studies of
                                        International repute (Drs Anirban Chakraborty and
                                        Arati Khanna-Gupta). Dr Anirban has a collaborative project on rare genetic
                                        disorders with Ghent University, Belgium.</li>
                                    <li>Clincian partners Dr Rathika Shenoy and Dr Vikram Shetty have been working
                                        on craniofacial dystoses for several years and have
                                        a large database of patients.</li>
                                    <li>The consortium will bring NITTE into international prominence as a Center of
                                        Excellence for BMF studies in India.</li>
                                    <li>Consortiums on rare genetic diseases are very few in India and there are no
                                        such consortiums in this part of the country. Thus, it
                                        is highly appropriate that Nitte becomes the premiere centre in South India
                                        to have established this consortium.</li>
                                </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-collaborators" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h5>Potential collaborators and partners</h5><br>
                            <p style="color:blue">Clinicians and Basic Scientists at NITTE DU</p>
                            <p>
                                <ul>
                                    <li>Dr Rathika Shenoy, Professor, Dept. of Pediatrics, KSHEMA</li>
                                    <li>Dr Vijith Shetty, Assistant Professor, Dept. of Medical Oncology, KSHEMA</li>
                                    <li>Dr Sunil Kumar Y, Additional Professor, Dept. of Pathology, KSHEMA</li>
                                    <li>Dr Mohan Kumar, Associate Professor, NUCSEReM</li>
                                </ul>
                            </p>
                            <p style="color: blue">Other Collaborators</p>
                            <p>
                                <ul>
                                    <li>Pediatricians, Hematologists, Pathologists of Medical Colleges in and around
                                        Mangalore</li>
                                    <li>Interested Clinicians and Scientists from other parts of the country</li>
                                </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Funding" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h5>Funding sources for the set up of the consortium</h5><br>
                            <p>
                                <ul>
                                    <li>Initial funding (Seed Grant) would be from Nitte (Deemed to be University)</li>
                                    <li>Other sources of funding would include</li>
                                    <ul>
                                        <li>Government Funding Agencies including Indian Council of Medical Research
                                            (ICMR),
                                            Department of Biotechnology
                                            (DBT), Department of Science and Technology (DST)</li>
                                        <li>Private Foundations including TATA Trusts, Jindal Foundations,</li>
                                        <li>International Foundations such as Bill and Melinda Gates Foundation, DBA
                                            Foundation,
                                            MDS/AA Foundation etc.</li>
                                    </ul>
                                    <li>Donations from Philanthropists and similar other nonprofit organizations</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--parallax-->
    <div class="parallax1">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: black;font-weight: bold">OUR
                TEAM</span>
        </div>
    </div>


    <section>
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">MANAGING COMMITTEE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">ADVISORY COMMITTEE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">SCIENTIFIC COMMITTEE</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/image13.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Prof. Dr. M. S. Moodithaya</h5>
                            <p class="text-center">Chairman</p>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal1">
                                Know More
                            </button>
                        </div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Prof. Dr. M. S. Moodithaya</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Prof. Dr. M. S. Moodithaya
                                            Nitte (Deemed to be
                                            University)</p>
                                        <p>Email : provc@nitte.edu.in</p>
                                        <p>Designation : Pro Vice
                                            Chancellor</p>
                                        <p>Position : Chairman</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm">
                        <div class="card">
                            <img class="img-thumbnail rounded" src="images/image15.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Prof. Dr. Alka Kulkarni</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal2">
                                    Know More
                                </button>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Prof. Dr. Alka Kulkarni
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Name and Affiliation : Prof. Dr. Alka Kulkarni
                                                Nitte (Deemed to be
                                                University)
                                                Email: </p>
                                            <p>Email : reg@nitte.edu.in</p>
                                            <p>Designation : Registrar</p>
                                            <p>Position : Member</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm">
                        <div class="card">
                            <img class="img-thumbnail rounded" src="images/image14.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Mrs Vinutha J Shetty</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal3">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mrs Vinutha J Shetty
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Mrs Vinutha J Shetty
                                            Nitte (Deemed to be
                                            University)
                                            Email: </p>
                                        <p>Email : vinuthajayaram@nitte.edu.in</p>
                                        <p>Designation : Deputy
                                            Director
                                            (Finance)</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/t1.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Prof. Dr. Rathika Shenoy
                                KSHEMA</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal4">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Prof. Dr. Rathika Shenoy
                                            KSHEMA
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Prof. Dr. Rathika Shenoy
                                            KSHEMA
                                            Nitte (Deemed to be
                                            University)
                                        </p>
                                        <p>Email : rathika.shenoy@nitte.edu.in</p>
                                        <p>Designation : Professor of
                                            Pediatrics,
                                            KSHEMA</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/image16.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Prof. Dr. Vikram Shetty
                                KSHEMA</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal4">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Prof. Dr. Vikram Shetty
                                            KSHEMA
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Prof. Dr. Vikram Shetty
                                            KSHEMA
                                            Nitte (Deemed to be
                                            University)
                                        </p>
                                        <p>Email : drvikramshetty@nitte.edu.in</p>
                                        <p>Designation : Director and
                                            Head, Nitte
                                            Meenakshi
                                            Institute of
                                            Craniofacial
                                            Surgery</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/t1.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Dr. Mohan Kumar</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal5">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dr. Mohan Kumar

                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Dr. Mohan Kumar
                                            Nitte (Deemed to be
                                            University)
                                        </p>
                                        <p>Email : mohanakumar@nitte.edu.in</p>
                                        <p>Designation : Associate
                                            Professor</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/t1.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Dr. Sunil Kumar Y
                                KSHEMA</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal6">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dr. Sunil Kumar Y
                                            KSHEMA
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Dr. Sunil Kumar Y
                                            KSHEMA
                                            Nitte (Deemed to be
                                            University)
                                        </p>
                                        <p>Email : drsunilkumary@nitte.edu.in</p>
                                        <p>Designation : Additional
                                            Professor,
                                            Dept of
                                            Pathology</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/t1.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Dr. Vijith Shetty</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal7">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dr. Vijith Shetty
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Dr. Vijith Shetty
                                            Nitte (Deemed to be
                                            University)
                                        </p>
                                        <p>Email : drvijithshetty@gmail.com</p>
                                        <p>Designation : Assistant
                                            Professor,
                                            Dept of
                                            Oncology,
                                            KSHEMA</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/image7.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Dr. Arati Khanna Gupta</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal8">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dr. Arati Khanna Gupta
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Dr. Arati Khanna Gupta
                                            Private Consultant
                                        </p>
                                        <p>Email : arati1239@gmail.com</p>
                                        <p>Designation : Ex-Assistant
                                            Professor,
                                            Harvard
                                            Medical
                                            School,
                                            Boston</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/image8.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Dr. Sachin Jadhav</h5>
                            <p class="text-center">Member</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal9">
                                    Know More
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dr. Sachin Jadhav
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name and Affiliation : Dr. Sachin Jadhav
                                            Group Head
                                            Hematology and BMT,
                                            HCG Group of Hospitals
                                        </p>
                                        <p>Email : drsachinjadhav@hotmail.com</p>
                                        <p>Designation : Specialist,
                                            Hematology
                                            and Bone
                                            Marrow
                                            Transplant</p>
                                        <p>Position : Member</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top rounded" src="images/image10.jpg" alt="Card image cap">
                        </div>
                        <div>
                            <h5 class="text-center">Prof. Dr. Anirban
                                Chakraborty</h5>
                            <p class="text-center">Member
                                Secretary</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Know More
                                </button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Prof. Dr. Anirban
                                                Chakraborty</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Name and Affiliation : Prof. Dr. Anirban Chakraborty NUCSER, Nitte
                                                (Deemed to be
                                                University)</p>
                                            <p>Email : anirban@nitte.edu.in</p>
                                            <p>Designation : Deputy
                                                Director,
                                                NUCSER</p>
                                            <p>Position : Member
                                                Secretary</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..lol.</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">..yo.</div>
        </div>


    </section>
@endsection