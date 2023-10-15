@extends('templates.client.masterClient')

@section('title', 'Trang chủ')

@section('content') 
 
 <!--Section Start-->
 <div class="section section-padding sigma_service-sec style-16">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="sigma_service style-16">
            <div class="sigma_service-thumb">
              <i class="flaticon-stethoscope"></i>
            </div>
            <div class="sigma_service-body">
              <h5>

                <a href="service-details.html">Therapiya</a>

              </h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
              <a href="service-details.html" class="btn-link primary-color">

                Read More

                <i class="far fa-long-arrow-alt-right"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="sigma_service style-16">
            <div class="sigma_service-thumb">
              <i class="flaticon-pills"></i>
            </div>
            <div class="sigma_service-body">
              <h5>

                <a href="service-details.html">Dentistry</a>

              </h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
              <a href="service-details.html" class="btn-link primary-color">

                Read More

                <i class="far fa-long-arrow-alt-right"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="sigma_service style-16">
            <div class="sigma_service-thumb">
              <i class="flaticon-medicine"></i>
            </div>
            <div class="sigma_service-body">
              <h5>

                <a href="service-details.html">Virusology</a>

              </h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
              <a href="service-details.html" class="btn-link primary-color">

                Read More

                <i class="far fa-long-arrow-alt-right"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="sigma_service style-16">
            <div class="sigma_service-thumb">
              <i class="flaticon-hospital-bed"></i>
            </div>
            <div class="sigma_service-body">
              <h5>

                <a href="service-details.html">Pharmocology</a>

              </h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
              <a href="service-details.html" class="btn-link primary-color">

                Read More

                <i class="far fa-long-arrow-alt-right"></i>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section secondary-overlay">
    <video autoplay muted loop id="myVideo">
      <source src="{{ asset('client/assets/video/hydrogen-molecule.mp4') }}" type="video/mp4">
    </video>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 order-2 order-lg-1">
          <div class="sigma_about style-21">
           <div class="section-title">
              <h3 class="title text-white">Why Choose Docfind Clinic?</h3>
            </div>
            <div class="sigma_about-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. It is a long established fact that a reader will be Lorem ipsum dolor sit amet consectetur.</p>
              <div class="sigma_info style-15">
                <div class="sigma_info-title">
                  <i class="flaticon-heartbeat sigma_info-icon"></i>
                </div>
                <div class="sigma_info-description">
                  <h5>Quality Control System</h5>
                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
              </div>
              <div class="sigma_info style-15 mb-0">
                <div class="sigma_info-title">
                  <i class="flaticon-group sigma_info-icon"></i>
                </div>
                <div class="sigma_info-description">
                  <h5>Highly Professional Staff</h5>
                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 order-1 order-lg-2">
          <div class="sigma_about style-21 mt-0 w-100 h-100">
            <div class="sigma_about-image-1">
              <img src="{{ asset('client/assets/img/home-1/400x280.jpg') }}" alt="img">
            </div>
            <div class="sigma_about-image-2 d-none d-sm-block">
              <img src="{{ asset('client/assets/img/home-1/370x250.jpg') }}" alt="img">
            </div>
          </div>
        </div>
      </div>

      <div class="sigma_counter-wrapper margin-negative bg-primary-1 style-5" style="background-image: url({{ asset('client/assets/img/pattern-2.png') }})">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="sigma_counter style-5">
              <span>

                <b class="counter" data-from="0" data-to="340">340</b>

                <span class="plus">+</span>
              </span>
              <p class="text-white">Customers</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="sigma_counter style-5">
              <span>

                <b class="counter" data-from="0" data-to="120">120</b>

                <span class="plus">+</span>
              </span>
              <p class="text-white">Years Practical Experience</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="sigma_counter style-5">
              <span>

                <b class="counter" data-from="0" data-to="120">120</b>

                <span class="plus">+</span>
              </span>
              <p class="text-white">Awesome Team Members</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="sigma_counter style-5">
              <span>

                <b class="counter" data-from="0" data-to="80">80</b>

                <span class="plus">+</span>
              </span>
              <p class="text-white">Customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <div class="section pb-0 bg-gray"></div>

  <!--Section Start-->
  <div class="section section-padding bg-gray">
    <div class="container">
      <div class="section-title centered">
        <span class="subtitle">What We do</span>
        <h3 class="title">Our Services</h3>
      </div>
      <div class="sigma_service-slider">
        <div class="sigma_service style-17">
          <div class="sigma_service-thumb">
            <img src="{{ asset('client/assets/img/home-1/300x240.jpg') }}" alt="img">
          </div>
          <div class="sigma_service-body">
            <h5>

              <a href="service-details.html">Therapiya</a>

            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit.</p>
            <a href="#" class="btn-link primary-color">

              Read More

              <i class="fal fa-arrow-right"></i>

            </a>
          </div>
        </div>
        <div class="sigma_service style-17">
          <div class="sigma_service-thumb">
            <img src="{{ asset('client/assets/img/home-1/300x240-0.jpg') }}" alt="img">
          </div>
          <div class="sigma_service-body">
            <h5>

              <a href="service-details.html">Dentistry</a>

            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit.</p>
            <a href="#" class="btn-link primary-color">

              Read More

              <i class="fal fa-arrow-right"></i>

            </a>
          </div>
        </div>
        <div class="sigma_service style-17">
          <div class="sigma_service-thumb">
            <img src="{{ asset('client/assets/img/home-1/300x240-1.jpg') }}" alt="img">
          </div>
          <div class="sigma_service-body">
            <h5>

              <a href="service-details.html">Virusology</a>

            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit.</p>
            <a href="#" class="btn-link primary-color">

              Read More

              <i class="fal fa-arrow-right"></i>

            </a>
          </div>
        </div>
        <div class="sigma_service style-17">
          <div class="sigma_service-thumb">
            <img src="{{ asset('client/assets/img/home-1/300x240-0.jpg') }}" alt="img">
          </div>
          <div class="sigma_service-body">
            <h5>

              <a href="service-details.html">General Checkup</a>

            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit.</p>
            <a href="#" class="btn-link primary-color">

              Read More

              <i class="fal fa-arrow-right"></i>

            </a>
          </div>
        </div>
      </div>

      <div class="margin-negative">
        <div class="row">

          <div class="col-lg-6">
            <div class="sigma_cta style-14">
              <div class="sigma_cta-content d-block d-sm-flex align-items-center">
                <i class="flaticon-message"></i>
                <h4 class="mt-3 mt-sm-0">Subscribe Our Email For Newsletter</h4>
              </div>
              <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <form method="post">
                <div class="input-group has-border">
                  <input type="email" name="email" placeholder="Email Address">
                  <div class="input-group-append">
                    <button type="button" class="light">
                      <i class="fal fa-envelope me-2"></i>
                      Subscribe
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="sigma_clients-wrapper style-3">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="sigma_clients style-3">
                    <img src="{{ asset('client/assets/img/home-1/150x100.png') }}" alt="clients">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="sigma_clients style-3">
                    <img src="{{ asset('client/assets/img/home-1/150x100-0.png') }}" alt="clients">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="sigma_clients style-3">
                    <img src="{{ asset('client/assets/img/home-1/150x100-1.png') }}" alt="clients">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="sigma_clients style-3">
                    <img src="{{ asset('client/assets/img/home-1/150x100-2.png') }}" alt="clients">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section section-padding"></div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-5">
          <div class="section-title">
            <span class="subtitle">Work Process</span>
            <h3 class="title mb-0">How it Works?</h3>
          </div>
        </div>
        <div class="col-lg-4">
          <p class="mb-0">Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis.</p>
        </div>
        <div class="col-lg-3 text-lg-right">
          <a href="contact-us.html" class="sigma_btn mt-4 mt-lg-0">Make Appointment</a>
        </div>
      </div>
      <div class="row sigma_info-wrapper style-25">
        <div class="col-lg-4 col-md-6">
          <div class="sigma_info style-25 d-block d-xl-flex">
            <div class="sigma_info-title">
              <span class="sigma_info-icon">

                <i class="flaticon-pharmacy"></i>

              </span>
            </div>
            <div class="sigma_info-description mt-4 mt-xl-0">
              <h5>Search Best Online <br> Professional</h5>
              <p>It is a long established fact that a reader will be distracted by the readable.</p>
              <span class="steps">Step 1</span>
              <span class="pulsive-dot"></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="sigma_info style-25 d-block d-xl-flex">
            <div class="sigma_info-title">
              <span class="sigma_info-icon">

                <i class="flaticon-event"></i>

              </span>
            </div>
            <div class="sigma_info-description mt-4 mt-xl-0">
              <h5>Get Instant <br> Appointment</h5>
              <p>It is a long established fact that a reader will be distracted by the readable.</p>
              <span class="steps">Step 2</span>
              <span class="pulsive-dot"></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="sigma_info style-25 d-block d-xl-flex">
            <div class="sigma_info-title">
              <span class="sigma_info-icon">

                <i class="flaticon-doctor"></i>

              </span>
            </div>
            <div class="sigma_info-description mt-4 mt-xl-0">
              <h5>Leave Your <br> Feedback</h5>
              <p>It is a long established fact that a reader will be distracted by the readable.</p>
              <span class="steps">Step 3</span>
              <span class="pulsive-dot"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section section-padding sigma_team-sec style-14 bg-gray">
    <div class="container-fluid p-sm-0">
      <div class="section-title centered">
        <span class="subtitle text-white">Meet Our Team</span>
        <h3 class="title text-white">Our Creative Team</h3>
      </div>
      <div class="sigma_team-slider-2">
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Doris Griffin</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350-0.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Adam Gilbert</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350-1.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Steve Cooper</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350-2.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Fionna Wood</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350-3.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Megan Nelson</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
        <div class="sigma_team style-14">
          <div class="sigma_team-thumb">
            <img src="{{ asset('client/assets/img/home-1/348x350-4.jpg') }}" alt="team">
          </div>
          <div class="sigma_team-body">
            <h5>

              <a href="#">Megan Nelson</a>

            </h5>
            <div class="sigma_team-categories">
              <a href="#" class="sigma_team-category">Obstetrics & Gynaecology</a>
            </div>
            <div class="sigma_team-info">
              <span>

                <i class="fal fa-map-marker-alt"></i>

                Hong Kong

              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section section-padding bg-gray pt-0">
    <div class="container">
      <div class="section-title centered">
        <span class="subtitle">Latest News</span>
        <h3 class="title">Our Insights & Articles</h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <article class="sigma_post style-15">
            <div class="sigma_post-thumb">
              <a href="blog-details.html">
                <img src="{{ asset('client/assets/img/home-1/350x300.jpg') }}" alt="img">
              </a>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-content">
                <div class="sigma_post-meta is-absolute">
                  <a href="blog-details.html" class="sigma_post-date">

                    28 January, 2022

                  </a>
                </div>
                <div class="sigma_post-meta">
                  <ul>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-user"></i>
                        By Jean
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-folder-open"></i>
                        Medical
                      </a>
                    </li>
                  </ul>
                </div>
                <h5>

                  <a href="blog-details.html">Having overw eight and depression can </a>

                </h5>
              </div>
              <a href="#" class="btn-link">

                Read more

              </a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="sigma_post style-15">
            <div class="sigma_post-thumb">
              <a href="blog-details.html">
                <img src="{{ asset('client/assets/img/home-1/350x300-0.jpg') }}" alt="img">
              </a>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-content">
                <div class="sigma_post-meta is-absolute">
                  <a href="blog-details.html" class="sigma_post-date">

                    28 January, 2022

                  </a>
                </div>
                <div class="sigma_post-meta">
                  <ul>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-user"></i>
                        By Jean
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-folder-open"></i>
                        Medical
                      </a>
                    </li>
                  </ul>
                </div>
                <h5>

                  <a href="blog-details.html">Adjusting to life with a spinal cord injury</a>

                </h5>
              </div>
              <a href="#" class="btn-link">

                Read more

              </a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="sigma_post style-15">
            <div class="sigma_post-thumb">
              <a href="blog-details.html">
                <img src="{{ asset('client/assets/img/home-1/350x300-1.jpg') }}" alt="img">
              </a>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-content">
                <div class="sigma_post-meta is-absolute">
                  <a href="blog-details.html" class="sigma_post-date">

                    28 January, 2022

                  </a>
                </div>
                <div class="sigma_post-meta">
                  <ul>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-user"></i>
                        By Jean
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="fal fa-folder-open"></i>
                        Health
                      </a>
                    </li>
                  </ul>
                </div>
                <h5>

                  <a href="blog-details.html">The Connection Between Post-traumatic</a>

                </h5>
              </div>
              <a href="#" class="btn-link">

                Read more

              </a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="section section-padding">
    <div class="container">
      <div class="section-title centered">
        <span class="subtitle">Client Testimonials</span>
        <h3 class="title">What Our Clients Say</h3>
      </div>
      <div class="sigma_testimonial-slider-5">
        <div class="sigma_testimonial bg-gray style-13">
          <div class="sigma_testimonial-thumb">
            <img src="{{ asset('client/assets/img/home-1/100x100.png') }}" alt="testimonial">
            <span class="fas fa-quote-left sigma_testimonial-icon"></span>
          </div>
          <div class="sigma_testimonial-body">
            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
            <div class="sigma_author-block">
              <h5>
                Eugene Freeman
              </h5>
              <span class="sigma_testimonial-category">Tincidunt</span>
            </div>
          </div>
        </div>
        <div class="sigma_testimonial bg-gray style-13">
          <div class="sigma_testimonial-thumb">
            <img src="{{ asset('client/assets/img/home-1/100x100-0.png') }}" alt="testimonial">
            <span class="fas fa-quote-left sigma_testimonial-icon"></span>
          </div>
          <div class="sigma_testimonial-body">
            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
            <div class="sigma_author-block">
              <h5>

                Kelly Coleman

              </h5>
              <span class="sigma_testimonial-category">Nulla nec</span>
            </div>
          </div>
        </div>
        <div class="sigma_testimonial bg-gray style-13">
          <div class="sigma_testimonial-thumb">
            <img src="{{ asset('client/assets/img/home-1/100x100-1.png') }}" alt="testimonial">
            <span class="fas fa-quote-left sigma_testimonial-icon"></span>
          </div>
          <div class="sigma_testimonial-body">
            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
            <div class="sigma_author-block">
              <h5>

                Philip Mendez

              </h5>
              <span class="sigma_testimonial-category">Consectetur</span>
            </div>
          </div>
        </div>
        <div class="sigma_testimonial bg-gray style-13">
          <div class="sigma_testimonial-thumb">
            <img src="{{ asset('client/assets/img/home-1/100x100-0.png') }}" alt="testimonial">
            <span class="fas fa-quote-left sigma_testimonial-icon"></span>
          </div>
          <div class="sigma_testimonial-body">
            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
            <div class="sigma_author-block">
              <h5>

                Kelly Coleman

              </h5>
              <span class="sigma_testimonial-category">Nulla nec</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section End-->

  <!--Section Start-->
  <div class="container-fluid p-0">
    <div class="sigma_instagram style-1 insta-images">
      <div class="sigma_instagram-slider">
        <a href="{{ asset('client/assets/img/home-1/376x430.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430.jpg') }}" alt="img">
        </a>
        <a href="{{ asset('client/assets/img/home-1/376x430-0.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430-0.jpg') }}" alt="img">
        </a>
        <a href="{{ asset('client/assets/img/home-1/376x430-1.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430-1.jpg') }}" alt="img">
        </a>
        <a href="{{ asset('client/assets/img/home-1/376x430-2.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430-2.jpg') }}" alt="img">
        </a>
        <a href="{{ asset('client/assets/img/home-1/376x430-3.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430-3.jpg') }}" alt="img">
        </a>
        <a href="{{ asset('client/assets/img/home-1/376x430-4.jpg') }}" class="gallery-thumb">
          <img src="{{ asset('client/assets/img/home-1/376x430-4.jpg') }}" alt="img">
        </a>
      </div>
    </div>
  </div>
  <!--Section End-->

  @endsection