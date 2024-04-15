@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>RULES</h2>
        <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Rules</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Rules</h2>
            <p> Rabin Dhakal and Associates is a firm of chartered accountants offering professional services in
                FDI,accounting, auditing, taxation, and financial consulting.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-remodeling">PDF</li>
                <li data-filter=".filter-construction">Blogs</li>
                <li data-filter=".filter-repairs">Details</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PDF 1</h4>
                            <p>Laws that regulate companies' operations.</p>
                            <!-- Add a link to view more details -->
                            <a href="{{ asset('frontend/pdf/Study_Material_-_Corporate_Laws.pdf') }}" title="More Details" class="details-link"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Blog 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/construction-1.jpg') }}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('blogsdetail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Details 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/repairs-1.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/remodeling-11.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PDF 2</h4>
                            <p>The-Audit-Act-2075</p>
                            <!-- Add a link to view more details -->
                            <a href="{{ asset('frontend/pdf/The-Audit-Act-2075-2019.pdf') }}" title="More Details" class="details-link"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PDF 1</h4>
                            <p>Laws that regulate companies' operations.</p>
                            <!-- Add a link to view more details -->
                            <a href="{{ asset('frontend/pdf/Study_Material_-_Corporate_Laws.pdf') }}" title="More Details" class="details-link"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Blogs 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Details 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/repairs-2.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Blogs 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PDF 1</h4>
                            <p>Laws that regulate companies' operations.</p>
                            <!-- Add a link to view more details -->
                            <a href="{{ asset('frontend/pdf/Study_Material_-_Corporate_Laws.pdf') }}" title="More Details" class="details-link"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>BLOGS 4</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/construction-3.jpg') }}" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Details 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Details 4</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

            </div><!-- End Projects Container -->

        </div>

    </div>
</section><!-- End Our Projects Section -->

@endsection
