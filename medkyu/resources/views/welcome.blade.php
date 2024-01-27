<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'medkyu') }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('Medilab/assets/img/favicon.png')}}" rel="icon">
        <link href="{{ asset('Medilab/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('Medilab/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('Medilab/assets/css/style.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: {{ config('app.name', 'medkyu') }}

        ======================================================== -->
      </head>

      <body>

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
          <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
              <i class="bi bi-phone"></i> +1 5589 55488 55
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
          </div>
        </div>

        {{-- header --}}
        @include('layouts.includes.site_header')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
          <div class="container">
            <h1>Welcome to <br>KYU MEDICAL CENTER</h1>
            {{-- <h2>Let's get you</h2> --}}
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </section><!-- End Hero -->

        <main id="main">

          <!-- ======= Why Us Section ======= -->
          <section id="why-us" class="why-us">
            <div class="container">

              <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                  <div class="content">
                    <h3>Our Mandate</h3>
                    <p>
                        The mandate of the medical centre is to provide health services to the Kyambogo University community that is students, staff, staff families and other individuals from the neighbourhood community.
                    </p>
                    <div class="text-center">
                      <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                  <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                      <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                          <i class="bx bx-receipt"></i>
                          <h4>OUT–PATIENT SERVICES</h4>
                          {{-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> --}}
                        </div>
                      </div>
                      <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                          <i class="bx bx-cube-alt"></i>
                          <h4>NURSING CARE</h4>
                          {{-- <p>Kyambogo University Medical Centre has competent nurses who undergo regular and continuous professional development. They regularly receive customer care, continuous quality improvement and Emergency scene management training among others.</p> --}}
                        </div>
                      </div>
                      <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                          <i class="bx bx-images"></i>
                          <h4>AMBULANCE SERVICES</h4>
                          {{-- <p>AKyambogo University Medical Centre, provides 24-hour ambulance services, run by a well-trained team of emergence medical technicians responding to different incidents and emergencies within the community.</p> --}}
                        </div>
                      </div>
                    </div>
                  </div><!-- End .content-->
                </div>
              </div>

            </div>
          </section><!-- End Why Us Section -->

          <!-- ======= About Section ======= -->
          <section id="about" class="about">
            <div class="container-fluid">

              <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Backgroud</h3>
                    <p>Kyambogo University Medical Center was established in 2003 following the merger of the three former Institutions of Higher Education i.e. the Uganda Polytechnics Kyambogo (UPK), Uganda National Institute of Special Education (UNISE) and the Institute of Teacher Education Kyambogo (ITEK). Before the merger, each institution operated a health unit and provided free services to a student population of 8000. Following the creation of the University, the health services were merged to form one health service delivery unit referred to as the University Medical Center currently serving a population of 33,000 students (Academic year 2016/18), 911 staff members & 2981 dependents.</p>
                </div>
              </div>

            </div>
          </section><!-- End About Section -->

          <!-- ======= Counts Section ======= -->
          <section id="counts" class="counts">
            <div class="container">

              <div class="row">

                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <i class="fas fa-user-md"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Medical Officers</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                  <div class="count-box">
                    <i class="far fa-hospital"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Clinical Officers</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                  <div class="count-box">
                    <i class="fas fa-flask"></i>
                    <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Lab technicians</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                  <div class="count-box">
                    <i class="fas fa-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p>nurses</p>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Counts Section -->

          <!-- ======= Services Section ======= -->
          <section id="services" class="services">
            <div class="container">

              <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4><a href="">Outpatient and inpatient</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4><a href="">HIV counseling and testing</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4><a href="">Family planning</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4><a href="">Minor surgery</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4><a href="">Laboratory services</a></h4>
                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4><a href="">Dental services</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                      <div class="icon"><i class="fas fa-notes-medical"></i></div>
                      <h4><a href="">Ambulance services</a></h4>
                      <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                      <div class="icon"><i class="fas fa-notes-medical"></i></div>
                      <h4><a href="">Anti-retro viral therapy services</a></h4>
                      <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                      <div class="icon"><i class="fas fa-notes-medical"></i></div>
                      <h4><a href="">Laboratory & Specialized Investigations</a></h4>
                      <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                  </div>

              </div>

            </div>
          </section><!-- End Services Section -->

          <!-- ======= Appointment Section ======= -->
          {{-- <section id="appointment" class="appointment section-bg">
            <div class="container">

              <div class="section-title">
                <h2>Make an Appointment</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select">
                      <option value="">Select Department</option>
                      <option value="Department 1">Department 1</option>
                      <option value="Department 2">Department 2</option>
                      <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select">
                      <option value="">Select Doctor</option>
                      <option value="Doctor 1">Doctor 1</option>
                      <option value="Doctor 2">Doctor 2</option>
                      <option value="Doctor 3">Doctor 3</option>
                    </select>
                    <div class="validate"></div>
                  </div>
                </div>

                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Make an Appointment</button></div>
              </form>

            </div>
          </section><!-- End Appointment Section --> --}}

          <!-- ======= Departments Section ======= -->
          {{-- <section id="departments" class="departments">
            <div class="container">

              <div class="section-title">
                <h2>Departments</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row gy-4">
                <div class="col-lg-3">
                  <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                      <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-9">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                      <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Cardiology</h3>
                          <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                          <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="{{ asset('Medilab/assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                      <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Et blanditiis nemo veritatis excepturi</h3>
                          <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                          <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="{{ asset('Medilab/assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                      <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                          <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                          <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="{{ asset('Medilab/assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                      <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                          <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                          <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="{{ asset('Medilab/assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                      <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                          <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                          <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="{{ asset('Medilab/assets/img/departments-5.jpg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section><!-- End Departments Section --> --}}

          <!-- ======= Doctors Section ======= -->
          <section id="doctors" class="doctors">
            <div class="container">

              <div class="section-title">
                <h2>Doctors</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row">

                <div class="col-lg-6">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('Medilab/assets/img/doctors/doctors-1.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Walter White</h4>
                      <span>Chief Medical Officer</span>
                      <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                      <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('Medilab/assets/img/doctors/doctors-2.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Sarah Jhonson</h4>
                      <span>Anesthesiologist</span>
                      <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                      <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mt-4">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('Medilab/assets/img/doctors/doctors-3.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>William Anderson</h4>
                      <span>Cardiology</span>
                      <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                      <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mt-4">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('Medilab/assets/img/doctors/doctors-4.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Neurosurgeon</span>
                      <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                      <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Doctors Section -->

          <!-- ======= Frequently Asked Questions Section ======= -->
          <section id="faq" class="faq section-bg">
            <div class="container">

              <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
              </div>

              <div class="faq-list">
                <ul>
                  <li data-aos="fade-up">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Where is the medical centre located?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                      <p>
                        The University Medical centre is located opposite the main gate east campus. It is in the same complex with the Home Economics Department and shares a fence with Nabisunsa Girls Schools
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Does medical centre have ambulance services ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        In case of emergency or critically ill cases, the University Ambulance stationed at the medical centre shall transport such case to the medical centre.
                      </p>
                      <p>
                        NB: Staff on duty is to be contacted to arrange for the services.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What are the services offered at the medical centre ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <ul>
                            <li>Treatment of the sick both inpatients and outpatients</li>
                            <li>Laboratory services</li>
                            <li>Voluntary Counseling and Testing for HIV (VCT)</li>
                            <li>Antiretroviral Therapy (ART) (Provision of HIV drugs</li>
                            <li>Dental Services</li>
                            <li>Private wing services to the public</li>
                            <li>Over counter prescription (private wing)</li>
                        </ul>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Accessing health services after office hours ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        After 9.00pm, students should first contact the security guard on duty
                      </p>
                      <p>
                        He/she will then assist the patient to inform the medical staff on duty who stay in the house next to the medical centre.
                      </p>
                      <p>
                        Students are advised to report either with a health secretary or health minister who contacts the security guard on duty.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What is the procedure of accessing the facility ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                        <p>Students must abide by all verbal and written advice relating to health and safety matters.</p>
                        <ul>
                            <li>All Students undergo a medical Examination before admission into the University</li>
                            <li>A Medical records file for each student is opened on completion of the exercise. Those found with diseases such as Tuberculosis shall be isolated and given treatment for as long as they are considered infectious.</li>
                            <li>It will be the responsibility of the student to adhere to the eligibility procedure in order to protect his/her rights and privilege of accessing the services</li>
                            <li>Students are encouraged to bring to the attention of University any matters of health, safety and welfare that may arise during their stay at the University.</li>
                            <li>For those that require special attention on a diet, the students shall seek special permission from the Director, Medical Services.</li>
                        </ul>
                        <p>NB. (i) The University shall provide health cover to registered students only and not their dependents.</p>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </section><!-- End Frequently Asked Questions Section -->

          <!-- ======= Testimonials Section ======= -->
          {{-- <section id="testimonials" class="testimonials">
            <div class="container">

              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="{{ asset('Medilab/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="{{ asset('Medilab/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="{{ asset('Medilab/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="{{ asset('Medilab/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="{{ asset('Medilab/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>

            </div>
          </section><!-- End Testimonials Section --> --}}

          <!-- ======= Gallery Section ======= -->
          {{-- <section id="gallery" class="gallery">
            <div class="container">

              <div class="section-title">
                <h2>Gallery</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
            </div>

            <div class="container-fluid">
              <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-1.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-2.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-3.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-4.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-5.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-6.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-7.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="{{ asset('Medilab/assets/img/gallery/gallery-8.jpg')}}" class="galelry-lightbox">
                      <img src="{{ asset('Medilab/assets/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Gallery Section --> --}}

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container">

              <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.745728931553!2d32.63012547407265!3d0.34562436398240226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db977429a82b5%3A0xb30e97be1902ad52!2sKyambogo%20University%20Medical%20Center!5e0!3m2!1sen!2sus!4v1706354928736!5m2!1sen!2sus" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              {{-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
            </div>

            <div class="container">
              <div class="row mt-5">

                <div class="col-lg-4">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>info@example.com</p>
                    </div>

                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+1 5589 55488 55s</p>
                    </div>

                  </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>

                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

          <div class="footer-top">
            <div class="container">
              <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>{{ config('app.name', 'medkyu') }}</h3>
                  <p>
                    A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                  </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                  <h4>Join Our Newsletter</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>

              </div>
            </div>
          </div>

          <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
              <div class="copyright">
                &copy; Copyright <strong><span>{{ config('app.name', 'medkyu') }}</span></strong>. All Rights Reserved
              </div>
              <div class="credits">

                Designed by <a href="#">Kirungi Hellena</a>
              </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('Medilab/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{ asset('Medilab/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('Medilab/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('Medilab/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('Medilab/assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('Medilab/assets/js/main.js')}}"></script>

      </body>
</html>
