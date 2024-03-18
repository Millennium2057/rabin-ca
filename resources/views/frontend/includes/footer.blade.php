 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="{{route('index')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{asset('frontend/assets/img/logo.png')}}" alt="" style="width: 200px;  object-fit:contain;">
                <!-- <h1>UpConstruction<span>.</span></h1> -->
              </a>
              <p>
                Itahari, Sunsari <br><br>
                <strong>Phone:</strong> +977 9851232718<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{route('index')}}">Home</a></li>
              <li><a href="{{route('about')}}">About us</a></li>
              <li><a href="{{route('fdi')}}">Insights</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Insights</h4>
            <ul>
              <li><a href="{{route('fdi')}}">FDI in Nepal</a></li>
              <li><a href="{{route('accounting')}}">Accounting</a></li>
              <li><a href="{{route('notices')}}">Notices</a></li>
              <li><a href="{{route('taxation')}}">Taxation</a></li>
              <li><a href="{{route('finance')}}">Finance</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Organization Link</h4>
            <ul>
              <li><a href="https://taxpayerportal.ird.gov.np/taxpayer/app.html">Inland Revenue Department</a></li>
              <li><a href="https://www.lawcommission.gov.np/en/wp-content/uploads/2019/09/The-Foreign-Investment-and-Technology-Transfer-Act-2019-2075.pdf">Foreign Investment & Technology</a></li>
              <li><a href="https://www.nepaltradeportal.gov.np/">Nepal Trade Portal</a></li>
              <li><a href="https://fcgo.gov.np">Financial Comptroller General Office</a></li>
              <li><a href="https://www.nrb.org.np">Nepal Rastriya Bank</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Rabin Dhakal & Associates,CA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://hunchhadigital.com/">Hunchha Digital</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  {{-- emi calculator --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
