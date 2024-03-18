<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('frontend/assets/img/logo.png')}}" alt="" style=" width:100px; object-fit: contain;">
        <!-- <h1>UpConstruction<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Act & Rules</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('act') }}">Act</a></li>
              <li><a href="{{ route ('rules') }}">Rules</a></li>
              <li><a href="{{ route('directives') }}">Directives</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Insights</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('fdi') }}">FDI in Nepal</a></li>
              <li><a href="{{route('accounting')}}">Accounting</a></li>
              <li><a href="{{route('notices')}}">Notices</a></li>
              <li><a href="{{route('taxation')}}">Taxation</a></li>
              <li><a href="{{route('finance')}}">Finance</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Career</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Jobs At Rabin</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                  <li><a href="#">Other</a></li>
                </ul>
              </li>
              <li><a href="{{route('otherjob')}}">Other Job</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Calculator</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('emicalculator')}}">EMI calculator</a></li>
                  <li><a href="{{route('taxcalculator')}}">Tax Calculator</a></li>
                  <li><a href="{{route('taxrates')}}">Tax Rates</a></li>
                  <li><a href="{{route('datecalculator')}}">Date Calculator</a></li>

                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Fonts</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('contact')}}">Nepali Fonts</a></li>
              <li><a href="#">English Fonts</a></li>
            </ul>
          </li>
            </ul>
          </li>
          <li><a href="{{ route('blog') }} "  class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
          <li><a href="{{ route('training') }} "  class="{{ request()->routeIs('training') ? 'active' : '' }}">Training</a></li>
          <li><a href="{{ route('contactus') }} "  class="{{ request()->routeIs('contactus') ? 'active' : '' }}">Contact Us</a></li>
        </ul>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
