@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}'); margin-bottom: 20px;">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Notices</h2>
        <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Notices</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 align-self-center">
                <div class="row">
                    <h2>News</h2>
                    <hr style="width: 60px; height: 8px; background-color:black;">
                    <div class="col-lg-12">
                        <div class="item" style="background-color:#f3f3f3 !important; margin-bottom: 20px; padding: 10px;">
                            <h3>K chha kta hoo </h3>
                            <p>thik xa ni guys naya naya update haru auxa herdai gara hae ta hjhjdhgfdsjbfjsdbjhbdjbvjdcbv</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item" style="background-color:#f3f3f3 !important; margin-bottom: 20px; padding: 10px;">
                            <h3>K chha kta hoo </h3>
                            <p>thik xa ni guys naya naya update haru auxa herdai gara hae ta hjhjdhgfdsjbfjsdbjhbdjbvjdcbv</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2>Notices</h2>
                <hr style="width: 60px; height: 8px; background-color:black;">
                <div class="accordions is-first-expanded">
                    <article class="accordion p-3" style="background-color:#f3f3f3 !important; ">
                        <div class="">
                            <span><strong>Holiday</strong></span>
                        </div>
                        <!-- <div class="accordion-body"> -->
                        <div class="content">
                            <p>There is holiday</p>
                        </div>
                        <!-- </div> -->
                    </article>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection