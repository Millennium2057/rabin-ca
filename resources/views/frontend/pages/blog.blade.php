@extends('frontend.includes.app')
@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Blog</h2>
    <ol>
      <li><a href="{{route('index')}}">Home</a></li>
      <li>Blog</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 posts-list">

      @foreach($allBlogs as $blog)
      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="{{$blog->image}}" class="img-fluid" alt="">
            <span class="post-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d') }}</span>
            @if($blog->created_at != $blog->updated_at)
            <span class="post-date">{{ \Carbon\Carbon::parse($blog->updated_at)->format('F d') }}</span>
            @endif
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{Str::limit($blog->title,30)}}</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2"></span>
              </div>
              <span class="px-3 text-black-50">/</span>
             
            </div>

            <p style="margin-top: 5px;">
              {!! Str::limit($blog->description,50) !!}
            </p>

            <hr>

            <a href="{{ route('blogsdetail', $blog->id) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </div>

      </div><!-- End post list item -->
      @endforeach
      <!-- End post list item -->

    </div><!-- End blog posts list -->

    <div class="blog-pagination">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
    <!-- End blog pagination -->

  </div>
</section>
<!-- End Blog Section -->


@endsection