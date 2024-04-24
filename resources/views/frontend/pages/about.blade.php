@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" style="background-image: url('{{asset('frontend/assets/img/about.jpg')}}');"></div>

            <div class="col-lg-7">
                <h2>Rabin Dhakal & Associates</h2>
                <div class="our-story">
                    <h4>Est 2024</h4>
                    <h3>Our Story</h3>
                    <p>Rabin Dhakal & Associates is a firm of chartered accountants, which has been providing
                        professional services to the public, private and development sectors for more than a decades.

                        Initially, it was registered with The Institute of Chartered Accountants of Nepal (ICAN) in 2024
                        AD as a sole practitioner in the name of Rabin Dhakal & Associates. We are one of the fast
                        growing accounting firm in Nepal and occupy a special place in the respective profession.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Vision:To be a highly respected professional
                                accounting firm of the country.</span></li>

                        <li><i class="bi bi-check-circle"></i> <span>Mission:Timely delivery of service in an efficient
                                manner, exceeding the client’s expectation.</span></li>

                        <li><i class="bi bi-check-circle"></i> <span>Strategy:Meeting client needs, retaining talent,
                                fostering growth, and advancing the accounting profession nationally.
                            </span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-headset color-green flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>
</section><!-- End Stats Counter Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url('{{asset('frontend/assets/img/alt-services.jpg')}}');" data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h3>Rabin Dhakal and Associates,Chartered Accountant</h3>
                <p>Rabin Dhakal and Associates is a firm of chartered accountants offering professional services in
                    accounting, auditing, taxation, and financial consulting.
                    With a team of skilled professionals, they provide tailored solutions to meet the financial needs of
                    their clients, which may include individuals, businesses, and organizations.
                    The firm is committed to delivering high-quality services with integrity and efficiency, helping
                    clients navigate complex financial matters and achieve their goals.</p>
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Act & Rules</a></h4>
                        <p>Finance Act and Rules outline legislation governing financial matters, including
                            taxation, budgetary allocations, and regulatory frameworks for fiscal management.</p>
                    </div>
                </div>
                <!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">FDI</a></h4>
                        <p>Foreign Direct Investment (FDI) involves investors from one country directly investing in another country's businesses or assets for profit.</p>
                    </div>
                </div>
                <!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Training</a></h4>
                        <p>Training involves structured learning activities aimed at developing skills, knowledge, or competencies in a Finance field, job, or task.</p>
                    </div>
                </div>
                <!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Accounting,Taxation & Finance</a></h4>
                        <p>Accounting, taxation, and finance encompass managing financial records, complying with tax laws, and overseeing monetary operations for effective resource management.</p>
                    </div>
                </div>
                <!-- End Icon Box -->

            </div>
        </div>

    </div>
</section>
<!-- End Alt Services Section -->


<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Team</h2>
            <p>Discover the individuals who make up our team. We strive to provide you with exceptional service and expertise. Meet the talented individuals dedicated to serving you.
            </p>
        </div>
        @if($allTeams->isNotEmpty())
        <div class="row gy-5">
            @foreach($allTeams as $team)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="{{asset($team->image)}}" style="object-fit:fill;" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>{{$team->name}}</h4>
                    <span>{{$team->designation}}</span>
                    <p>{!! $team->description !!}</p>
                </div>
            </div><!-- End Team Member -->
            @endforeach
            <!-- End Team Member -->
        </div>
        @else
        <div style="display: flex; justify-content: center; align-items: center;">
            <p>Teams are not available now.</p>
        </div>
        @endif
    </div>
</section><!-- End Our Team Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>
        @if($allTestimonials->isNotEmpty())
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($allTestimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
                            <h3>{{ $testimonial->name }}</h3>
                            <h4>{{ $testimonial->designation }}</h4>
                            <div class="stars">
                                @for($i = 0; $i < $testimonial->stars; $i++)
                                    <i class="bi bi-star-fill"></i>
                                    @endfor
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                {{ $testimonial->description }}
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        @else
        <div style="display: flex; justify-content: center; align-items: center;">
            <p>Testimonials are not available now.</p>
        </div>
        @endif
    </div>
</section>

<!-- End Testimonials Section -->
@endsection