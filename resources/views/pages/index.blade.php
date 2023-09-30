@extends ('layout')

@section('title')
    Webiste
@endsection

@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-2.png');">
                    <div class="carousel-container"> 
                    <div class="carousel-content container">
                        <h2 class="animate__animated animate__fadeInDown">ANMC</h2>
                        <p class="animate__animated animate__fadeInUp">a professional regulatory body that regulate nursing and midwifery professions across Afghanistan.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.png');">
                    <div class="carousel-container">
                    <div class="carousel-content container">
                        <h2 class="animate__animated animate__fadeInDown">Registration</h2>
                        <p class="animate__animated animate__fadeInUp">A successful strategy for providing high services needs a precise statistic of stakeholders, understanding the exact number of nurses and midwives is a crucial part of ANMC’s plan to develop an effective strategy..</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.png');;">
                    <div class="carousel-container">
                    <div class="carousel-content container">
                        <h2 class="animate__animated animate__fadeInDown">Accreditation</h2>
                        <p class="animate__animated animate__fadeInUp">Knowledge is a key part of any services, ANMC try to guarantee a standard nursing and midwifery educational system in Afghanistan. We know it need time and efforts but is possible.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                    </div>
                </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
            <div class="section-title">
              <h2>{{__('public.about')}}</h2>
              <hr>
              <p id="about-text">Nurses and Midwives are a crucial part of the healthcare system in any country, and without them, providing healthcare services would be impossible. Unfortunately, there is less investment on the nurses and midwives in Afghanistan as the healthcare system is doctor dominant. This belief has resulted in nurses and midwives losing their roles within the Afghanistan healthcare system, as doctors have tried to assert themselves as the all-rounders of the system. This idea has been promoted among healthcare service providers, leading to thousands of nurses and midwives changing their professions and enrolling in medical universities to become doctors.
                <br> <br>
                On the other hand, numerous NGOs provide spiritual and financial support for the healthcare system in Afghanistan. However, they have not paid attention to nurses and midwives or implemented projects that would significantly change their role within the system. This has created numerous challenges for the Afghan healthcare system and caused nursing and midwifery professions to fall behind.
                <br> <br>
                To address this weakness in the healthcare system, the Afghanistan Nurses and Midwives Council (ANMC) was established. However, it quickly faced political and financial challenges that made achieving its goals seem like a distant dream. Despite these obstacles, ANMC continues to strive to overcome them and improve its services. However, it requires time and effort, so ANMC relies on your honest and consistent technical and financial support.  
              </p>
            </div>
        </div>

      </div>
    </section>

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{__('public.services')}}</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-file-earmark-person-fill"></i></div>
                    <h4 class="title"><a href="">Registration</a></h4>
                <p class="description">Registration is an important service that ANMC is providing right now!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-eye-fill"></i></div>
                <h4 class="title"><a href="">Accreditation</a></h4>
                <p class="description">Accreditation is vital for good and standard education services in the country</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-credit-card-2-front-fill"></i></div>
                <h4 class="title"><a href="">Licensing</a></h4>
                <p class="description">Licensing is the gauranty of providing standard health services in the hospitals.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-easel-fill"></i></div>
                <h4 class="title"><a href="">Capacity Building</a></h4>
                <p class="description">Continous capacity building development is one of the most important thing in any services</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-graph-up"></i></div>
                <h4 class="title"><a href="">Research</a></h4>
                <p class="description">Health services providing need continuous research in different area in a country</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="bi bi-stack"></i></div>
                <h4 class="title"><a href="">Standards</a></h4>
                <p class="description">Health service provider or health education ceter must meet the cretiria which identified by government</p>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{__('public.contact')}}</h2>
            </div>

            <div class="row">

                <div class="col-lg-6 d-flex" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Next to Parwan 3 Clinic, Nowabad, Badambagh Stree, <br> Kabul, Afghanistan</p>
                </div>
                </div>

                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@anmc.gov.af</p>
                </div>
                </div>

                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+93 (0) 790 60 90 70</p>
                </div>
                </div>
            </div>

        </div>
    </section>
@endsection