@extends('frontend.includes.app')
@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Contact</h2>
    <ol>
      <li><a href="{{route('index')}}">Home</a></li>
      <li>Contact</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-map"></i>
          <h3>Our Address</h3>
          <p>Itahari,Sunsari</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          <p>contact@example.com</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>+977 9851232718</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="row gy-4 mt-1">

      <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d114095.86040772172!2d87.2717714!3d26.664626500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1710737579104!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;"></iframe>
      </div><!-- End Google Maps -->

      <div class="col-lg-6">

        <form action="{{ route('store.contact') }}" method="POST" role="form" class="php-email-form">
          @if ($errors->any())
          <div id="alert" class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          @if (session('success'))
          <div id="alert" class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          @if (session('error'))
          <div id="alert" class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          @csrf
          <div class="row gy-4">
            <div class="col-lg-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-lg-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          </div>
          @error('g-recaptcha-response')
          <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
      <!-- End Contact Form -->

    </div>

  </div>
</section>
<script>
  setTimeout(function() {
    document.getElementById('alert').style.display = 'none';
  }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>
<!-- End Contact Section -->


@endsection