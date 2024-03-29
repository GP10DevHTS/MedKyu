<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">KYU Med. Cen.{{-- config('app.name', 'medkyu') --}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('Medilab/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          {{-- <li><a class="nav-link scrollto" href="#departments">Departments</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <li class="dropdown"><a href="#"><span>Students</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li><a href="{{route('login')}}">MedKyu Portal</a></li> --}}


              <li><a target="_blank" href="https://myportal.kyu.ac.ug/">Student Portal</a></li>
              <li><a target="_blank" href="https://alumni.kyu.ac.ug">Alumni</a></li>
              <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a target="_blank" href="https://kyuspace.kyu.ac.ug">KYU space</a></li>
                  <li><a target="_blank" href="https://lib.kyu.ac.ug/">Library</a></li>
                  <li><a target="_blank" href="https://kyu.ac.ug/category/kyambogo-in-media">KYU Media</a></li>
                </ul>
              </li>
            </ul>
          </li>

          @if (Route::has('login'))
              {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                  @auth
                    <li><a href="{{route('login')}}">MedKyu Dashboard</a></li>
                  @else
                    <li class="dropdown"><a href="{{route('login')}}"><span>MedKyu Port</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="{{route('login')}}">login</a></li>
                        @if (config('registrations.students.reg'))
                            <li>
                                <a href="{{ route('student.reg') }}" class="ml-4 nav-link scrollto">Register (Students)</a>
                            </li>
                        @endif
                        </ul>
                    </li>
                  @endauth
              {{-- </div> --}}
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> --}}

    </div>
  </header><!-- End Header -->
