@extends('layouts.main')

@section('content')


<section class="banner p-0 pos-r fullscreen-banner">
  <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
    <div class="item hero-overlay" data-bg-img="{{ asset('img/homepage/'.$section_one->imageTwo) }}" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">Research & Verify  <span class="text-theme">TB POLICY</span> {{ $section_one->title }}
              </h1>
              <p class="lead font-w-5 text-black">{{$section_one->content}}.</p>
              <!-- <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="#"> <span>Book Appointment</span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item hero-overlay" data-bg-img="{{ asset('img/homepage/'.$section_one->imageFour) }}" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">Research & Verify  <span class="text-theme">TB POLICY</span> {{ $section_one->titleFour }}
              </h1>
              <p class="lead font-w-5 text-black">{{$section_one->contentFour}}.</p>
              <!-- <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="#"> <span>Book Appointment</span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item hero-overlay" data-bg-img="{{ asset('img/homepage/'.$section_one->imageThree) }}" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">Research & Verify  <span class="text-theme">TB POLICY</span> {{ $section_one->titleThree }}
              </h1>
              <p class="lead font-w-5 text-black">{{$section_one->contentThree}}.</p>
              <!-- <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="#"> <span>Book Appointment</span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item hero-overlay" data-bg-img="{{ asset('img/homepage/'.$section_one->imageOne) }}" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">TB surveillance,  <span class="text-theme">Laboratory</span> supervision, monitoring and evaluation</h1>
              <p class="lead font-w-5 text-black">For any TB case, all data relating to TB notification, initiation, follow-up and
                    termination of TB treatment should be introduced routinely in the electronic TB
                    case-based surveillance system (e-TB).</p>
              <!-- <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="#"> <span>Book Appointment</span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

<!--feature start-->

<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-laboratory-1"></i>
          </div>
          <div class="featured-title">
            <h5>The introducing New Tools Project (iNTP)  </h5>
          </div>
          <div class="featured-desc">
            <p>is a collaboration 
              between the Stop TB Partnership and the United States.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-sm-0">
        <div class="featured-item style-1 active">
          <div class="featured-icon"> <i class="flaticon-laboratory"></i>
          </div>
          <div class="featured-title">
            <h5>Medical laboratory Technician</h5>
          </div>
          <div class="featured-desc">
            <p>We are currently fostering innovation in a number of focus areas throughout
               the care cascade and are actively .</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-biology-1"></i>
          </div>
          <div class="featured-title">
            <h5>Highest Quality Pathologycam Testing</h5>
          </div>
          <div class="featured-desc">
            <p>seeking to include new technologies as they 
              emerge and show potential to revolutionize TB diagnostics, treatment and care..</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-help-call"></i>
          </div>
          <div class="featured-title">
            <h5>Emergency Help Available 24/7</h5>
          </div>
          <div class="featured-desc">
            <p>Our firm is expert to create an efficient user interface that.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->


<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-12 order-lg-1">
        <img class="img-fluid" src="{{ asset('img/homepage/'.$section_two->imageOne) }}" alt>
      </div>
      <div class="col-lg-7 col-12 mt-6 mt-lg-0">
        <div class="row align-items-end">
          <div class="col-md-7">
            <div class="section-title">
              <h2 class="title">{{ $section_two->title }} </h2> 
              <p class="text-black font-w-5 mb-3">{{$section_two->content}}</p>
              <p>{{$section_two->contentTwo}}</p>
            </div>
            <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
            </a>
          </div>
          <div class="col-md-5 mt-6 mt-md-0">
            <p class="mb-4">{{$section_two->contentThree}}</p>
            <img class="img-fluid" src="images/tb1.png" alt>
            <ul class="list-unstyled list-icon mt-4">
              <li class="mb-3"><i class="las la-check"></i> {{ $section_two->titleTwo }}</li>
              <li class="mb-3"><i class="las la-check"></i> {{ $section_two->titleThree }}</li>
              <li><i class="las la-check"></i> {{ $section_two->titleFour }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative light-bg">
  <div class="container z-index-1">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7 col-12">
        <div class="section-title mb-3">
          <h2 class="title mb-0">tuberculosis (TB) remains a global health issue with high morbidity and mortality rates!</h2> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30">
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_three->imageOne) }}" alt>
                <div class="service-icon"> <i class="flaticon-biology-1"></i>
                </div>
              </div>
             
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>{{ $section_three->title }}</h4>
                </div>
                <p> {{$section_three->content}}.</p> <a class="link-btn" href="biochemistry-solution.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1 active">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_three->imageTwo) }}" alt>
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>{{ $section_three->titleTwo }}</h4>
                </div>
                <p>{{$section_three->contentTwo}}.</p> <a class="link-btn" href="pharmaceutical-research.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_three->imageThree) }}" alt>
                <div class="service-icon"> <i class="flaticon-test"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>{{ $section_three->titleThree }}</h4>
                </div>
                <p>{{$section_three->contentThree}}.</p> <a class="link-btn" href="pathologycam-testing.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="images/04.jpg" alt>
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>Chemical Research</h4>
                </div>
                <p>We have put protocols to protect our patients and staff care.</p> <a class="link-btn" href="chemical-research.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape-1 overflow-hidden bottom">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L21.8,112C43.6,128,87,160,131,154.7C174.5,149,218,107,262,90.7C305.5,75,349,85,393,122.7C436.4,160,480,224,524,234.7C567.3,245,611,203,655,165.3C698.2,128,742,96,785,85.3C829.1,75,873,85,916,117.3C960,149,1004,203,1047,229.3C1090.9,256,1135,256,1178,234.7C1221.8,213,1265,171,1309,154.7C1352.7,139,1396,149,1418,154.7L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"/>
    </svg>
  </div>
</section>

<section class="p-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="white-bg p-5 z-index-1">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-medical-laboratory-1"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="24" data-speed="2000">24</span>
                  <h6>Our Equipments</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-sm-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-heathcare-and-medical"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="272" data-speed="2000">272</span>
                  <h6>Field Expertise</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-pharmacy"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="423" data-speed="2000">423</span>
                  <h6>Complete Cases</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-award"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="576" data-speed="2000">576</span>
                  <h6>Awards Winning</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--counter end-->


<!--multi-sec start-->

<section class="p-0 mt-n6">
  <div class="container-fluid ps-0">
    <div class="row">
      <div class="col-lg-7 col-md-10 col-11">
        <div class="dark-bg p-lg-7 p-4 pb-10 custom-pt-1" data-bg-img="images/pattern/02.png">
          <div class="section-title ms-md-5">
            <h2 class="title">We’re Setting the New Standards in Laboratory & Research Professional.</h2> 
            <p class="lead text-light">We Provide All Aspects Of Medical Practice For Your Whole Family!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 pe-md-0">
        <div class="light-bg p-5 z-index-1 mt-n7">
          <div class="ht-progress-bar mb-4">
            <h4>Environmental Testing</h4>
            <div class="progress" data-value="85">
              <div class="progress-bar">
                <div class="progress-parcent"><span>85</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar mb-4">
            <h4>Immune system</h4>
            <div class="progress" data-value="75">
              <div class="progress-bar">
                <div class="progress-parcent"><span>75</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar mb-4">
            <h4>Advanced Microscopy</h4>
            <div class="progress" data-value="95">
              <div class="progress-bar">
                <div class="progress-parcent"><span>95</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar">
            <h4>Management</h4>
            <div class="progress" data-value="80">
              <div class="progress-bar">
                <div class="progress-parcent"><span>80</span>%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-10 col-12 ms-auto ps-0">
        <div class="position-relative overflow-hidden img-border mt-n15 custom-mt-0">
          <img class="img-fluid w-100" src="images/02_1.jpg" alt>
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube mr-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="las la-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="theme-bg py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-12">
        <h3 class="text-light">Need a Help for Check-up? Call for an Emergency Laboratory Services</h3>
      </div>
      <div class="col-md-5 col-12 ms-auto mt-3 mt-lg-0">
        <div class="d-flex align-items-start justify-content-end">
          <div class="text-white text-end"> <span>Help Desk 24/7</span>
            <h3 class="font-w-4"><a class="text-decoration-underline text-white" href="tel:+(01)24665813917">(+250) 782667888</a></h3>
          </div> <span class="white-bg d-inline-block p-2 ms-4"><i class="las la-phone ic-3x text-theme"></i></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!--call us end-->


<!--team start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="accordion" id="accordion">
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      {{ $section_four->title }} ?
      </button>
    </h2>
            <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
              <div class="accordion-body">{{ $section_four->content}}.</div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      {{ $section_four->titleTwo }} ?
      </button>
    </h2>
            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
              <div class="accordion-body"> {{ $section_four->contentTwo }} ?.</div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      {{ $section_four->titleThree }} ?
      </button>
    </h2>
            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
              <div class="accordion-body">{{ $section_four->contentThree }}.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      {{ $section_four->titleFour }} ?
      </button>
    </h2>
            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
              <div class="accordion-body">{{ $section_four->contentFour }} .</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto mt-5 mt-lg-0">
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageOne) }}" alt>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Shiran Reni</a></h5>
                <span>Pathology Special</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>

          
          <div class="col-sm-6 mt-5 mt-sm-0">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageTwo) }}" alt>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Kamal Leno</a></h5>
                <span>Chemist Expert</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageThree) }}" alt>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Melena Jos</a></h5>
                <span>Lab Head</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageFour) }}" alt>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Leena Ivy</a></h5>
                <span>Research Expert</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--team end-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-12">
        <div class="section-title">
          <h2 class="title">From our blog list Latest News</h2>
          <p class="lead">Our doctors include highly qualified male and female practitioners who come from a range of backgrounds and bring a diversity of skills.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="{{ asset('img/homepage/'.$section_six->imageOne) }}" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Equipping Researchers in the Developing World
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="{{ asset('img/homepage/'.$section_six->imageTwo) }}" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Patient experience better Health Your Doctor Wishes
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="{{ asset('img/homepage/'.$section_six->imageThree) }}" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Standards of treatment Improved Detection of Disease
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>


@endsection