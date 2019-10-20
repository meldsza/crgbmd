@extends('layouts.userlayout')
@section('hometitle')
  CRGBMD-ABOUT
@endsection
@section('usercontent')  

<div class="parallax"></div>

    <!--main-->
    <section>
        <div id="about">
            <h2 class="text-center animated fadeInUp" style="color:teal;animation-delay: 1s">About Us</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-goals"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false"
                            style="color:teal">Goals
                            and Objectives</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-about" role="tab"
                            aria-controls="v-pills-home" aria-selected="true" style="color:teal">About
                            Nitte-DU</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-collaborators"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:teal">Collaborators</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Funding"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:teal">Funding Sources</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-goals" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <h5>Our goals and objectives</h5><br>
                            <ul >
                                <li>To facilitate the interaction of interested clinicians and scientists through a common portal for addressing clinical and scientific issues pertaining to rare genetic disorders and bone marrow failure syndromes </li>
                                <li>To gain a basic understanding of, and to unravel the extent and the nature of select rare genetic disorders and bone marrow failure syndromes in India from a genetic, cultural, regional, clinical and most importantly, a patient’s vantage point</li>
                                <li>To provide comprehensive information on the etiology and genetic basis of these group of diseases in India </li>
                                <li>To establish a patient database that enable advanced research in each category of the selected diseases in India</li>
                                <li>To support research initiative under the consortium through funding of research proposals aimed at advanced diagnostics and therapeutics </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <p>Nitte (Deemed to be University) has been established by Nitte Education Trust, which has in its fold 36 institutions spread on 3 campuses at Nitte, Mangalore and Bangalore.
                               A centre of excellence in education and community service in Karnataka State, Nitte Health Care institutions are duly recognized by the Government of India.
                               Nitte (Deemed to be University) was established in the year 2008 vide MHRD Notication No. F.9-13/2007-U.3(A) dated 4th June, 2008.
                                The University has been accredited by NAAC with 'A' Grade with 3.11 CGPA in October 2013 vide order No. F.NAAC/DS/RK/65EC-71/2013 dated October 26, 2013 and placed under category 'A' by the Ministry of Human Resource Development, Govt. of India vide letter No.F.9-26/2009-U.3(A)(Vol.5) dated 19-10-2012. 
                                The NIRF has ranked Nitte (Deemed to be University) as 70th amongst  907 Universities of the country in 2019.
                                Nitte (Deemed to be University) has been awarded “Diamond” rating by QS I-GAUGE Indian University Ratings.
                                NitteDU is the first Institution in Karnataka to achieve this distinction. All the constituent institutions, namely, K. S. Hegde Medical Academy (KSHEMA), A. B. Shetty Memorial Institute of Dental Sciences (ABSMIDS), Nitte Gulabi Shetty Memorial Institute of Pharmaceutical Sciences (NGSMIPS), Nitte Usha Institute of Nursing Sciences (NUINS), Nitte Institute of Physiotherapy (NIPT), Nitte Institute of Architecture (NIA), Nitte University Centre for Science Education & Research (NUCSER) and Nitte Institute of Communication (NICO) are housed in independent buildings with the best of infrastructure and amenities and are located on a sprawling campus of over 50 acres at Deralakatte and Paneer, Mangalore.
                                 One of the unique features of this university is the concept of giving back to the society through the extensive network of 21 rural health centres and 3 rural hospitals spread across 5 districts of two states, where more than 2.5 million people are provided with free health care annually.  </p>
                            <a href="http://nitte.edu.in/">FOR MORE INFORMATION CLICK HERE</a><br>
                            <br><h5 style="color:teal">Why NITTE as a center for the consortium ?</h5><br>
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
                                    <li>Faculty of International repute with years of expertise in the area of rare genetic disorders, particularly in acrofacial dystoses and bone marrow failure syndromes</li> 
                        
                                </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-collaborators" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h5>Potential collaborators and partners</h5><br>
                            <p style="color:teal">Clinicians and Basic Scientists at NITTE DU</p>
                            <p>
                                <ul>
                                    <li><b>Dr Rathika Shenoy</b>, Professor, Dept. of Pediatrics, KSHEMA</li>
                                    <li><b>Dr Vijith Shetty</b>, Assistant Professor, Dept. of Medical Oncology, KSHEMA</li>
                                    <li><b>Dr Sunil Kumar Y</b>, Additional Professor, Dept. of Pathology, KSHEMA</li>
                                    <li><b>Dr Mohan Kumar</b>, Associate Professor, NUCSEReM</li>
                                </ul>
                            </p>
                            <p style="color:teal">Other Collaborators</p>
                            <p>
                                <ul>
                                      <li> <b>Dr Sachin Jadhav</b>, Group Head Hematology and BMT, HCG Group of Hospitals, India</li>
                                        <li><b>Dr Sujata Mohanty</b>, Professor, Stem Cell Facility, AIIMS, New Delhi</li>
                                        <li><b>Dr Sheela Nampoothiri</b>, Professor, Dept. of Pediatrics, Amrita School of Medicine, Kochi</li>
                                        <li><b> Dr Lakshmi B R</b>, Founder, MDCRC, Coimbatore, India</li>
                                        <li><b>Dr Ph Madhubala Devi</b>, Professor & HoD, Department of Pediatrics and Pathology, Regional Institute of Medical Sciences, Manipur, India</li>
                                        <li><b>Dr Harsha Prasad L</b>, Pediatric Hematologist and Oncologist, KMC, Mangalore.</li>
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
                        @foreach($mg as $mgvalue)
                        <div class="card">
                            <img class="card-img-top rounded" src="{{asset('storage/'.$event->eventimage)}}" alt="Card image cap">
                        </div>
                        @endforeach
                        <div>
                        <h5 class="text-center">{{$mgvalue->name}}</h5>
                            <p class="text-center">{{$mgvalue->position}}</p>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal1">
                                Know More
                            </button>
                        </div>
                        {{-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
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
                        </div> --}}
                    </div>  
                </div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..lol.</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">..yo.</div>
        </div>


    </section>
@endsection