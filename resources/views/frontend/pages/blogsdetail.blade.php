@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Blogs Detail</h2>
    <ol>
      <li><a href="{{route('index')}}">Home</a></li>
      <li>Blogs</li>
      <li>Blogs Details</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">

      <div class="col-lg-12">

        <article class="blog-details">

          <div class="post-img">
            <img src="{{asset($singleBlog->image)}}" alt="" class="img-fluid">
          </div>

          <h2 class="title">{{$singleBlog->title}}</h2>

          <div class="meta-top">
            <ul>
         
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ \Carbon\Carbon::parse($singleBlog->created_at)->format('M d, Y') }}</time></a></li>

            </ul>
          </div><!-- End meta top -->

          <div class="content">
            <p>
              {!! $singleBlog->description !!}
            </p>



            <!-- <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam
                    doloribus minus autem quos.
                  </p>
                </blockquote> -->



          </div><!-- End post content -->

          <div class="meta-bottom">
            <i class="bi bi-folder"></i>
            <ul class="cats">
              <li><a href="#">Business</a></li>
            </ul>

            <i class="bi bi-tags"></i>
            <ul class="tags">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div><!-- End meta bottom -->

        </article><!-- End blog post -->

      </div>

   
    </div>

  </div>
</section><!-- End Blog Details Section -->
@endsection