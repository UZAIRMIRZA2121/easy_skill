
@extends('layouts.student.master')

@section('main')
      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Banner Section - Start
        ================================================== -->
        <section class="hero_banner style_1">
          <div class="container">
            <div class="content_wrap">
              <div class="row">
                <div class="col col-lg-7">
                  <h1 class="banner_small_title">Welcome to SkillSider</h1>
                  <h2 class="banner_big_title">Success in the Digital</h2>
                  <p class="banner_description">
                 At Skillsider, we help you upskill with courses designed for real-world success. Explore a combination of entrepreneurship and education guided by the best of mentors. </p>
                  <ul class="banner_btns_group unordered_list">
                    <li>
                      <a class="btn btn_primary" href="course.html">
                        <span>
                          <small>Explore Courses</small>
                          <small>Explore Courses</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class="video_play_btn text-white popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                        <span class="icon" data-magnetic><i class="fas fa-play"></i></span>
                        <span class="text">Watch video</span>
                      </a>
                    </li>
                  </ul>
                  <div >
                    <p class="banner_below_title">Trusted by over 10K+ Users</p>
                    <div class="trust-rating d-flex align-items-center">
                    <div class="rate-head">
                    <h2><span>2.3K</span>+</h2>
                    </div>
                    <div class="rating d-flex align-items-center">
                    <h2 class="d-inline-block average-rating">4.1</h2>
                    <i class="fas fa-star yellow filled"></i>
                    <i class="fas fa-star yellow filled"></i>
                    <i class="fas fa-star yellow filled"></i>
                    <i class="fas fa-star yellow filled"></i>
                    <i class="fas fa-star filled"></i>
                    </div>
                    </div>
                    </div>
                </div>
               
                <div class="col col-lg-5">
                  <div class="banner_image_1 decoration_wrap">
                    <div class="image_wrap">
                      <img src="{{ asset('studens-asset/assets/images/banner/hero_banner_img_1.jpg')}}" alt="Collab – Online Learning Platform">
                    </div>
               
                    <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                      <img src="{{ asset('studens-asset/assets/images/shape/shape_img_1.png')}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="deco_item shape_img_2" data-parallax='{"y" : 160, "smoothness": 6}'>
                      <img src="{{ asset('studens-asset/assets/images/shape/shape_img_2.png')}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Banner Section - End
        ================================================== -->

            
                 <!-- Counter Section - Start
        ================================================== -->
        <section class="counter_section bg_light section_space_md">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">500</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Hours of hands-on learning in our courses
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">1500</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Students Passed Our Competitions and Got a Job
                  </p>
                </div>Don’t just take our word for it
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">25</span>
                    <span>/75</span>
                  </h3>
                  <p class="mb-0">
                    The Ratio of Theory and Practice in Each Course
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">40</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    We teach people from 4 continents and over 40 countries
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->
 <!-- Pricing Section - Start
        ================================================== -->
  
        <section class="pricing_section section_space_lg bg_light">
          <div class="container decoration_wrap">
            <div class="section_heading text-center">
              <h2 class="heading_text mb-0">
              Products We Offer
              </h2>
            </div>

            <div class="pricing_cards_wrapper row align-items-center">
                @foreach ($packages as $package)
              <div class="col col-lg-4">
               
                <div class="pricing_card text-center {{ $package->id == 2 ? 'bg_dark': '' }}  tilt">
                  <img class="img-fluid" alt=""
                  src="https://skillsider.pk/packages_image/1713859075.jpg">
                    <div class="card_badge {{ $package->id ==2 ? '': 'd-none' }}">recommended</div>
                  <h3 class="card_heading">{{$package->package_title }}</h3>
                  <div class="pricing_wrap">
                 
                    {{-- <span class="price_value"><sup>Rs</sup>{{ $package->price }}</span> --}}
                    {{-- <small class="d-block">Life Time</small> --}}
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block text-start">
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>3 Video Courses</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>No Live Session</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>No WhatsApp Support</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>Affiliate Commission: 55% </span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0">
                    <a class="btn {{ $package->id == 2 ? 'btn_primary': 'border_dark' }} " href="#!">
                      <span>
                        <small>Grav Now</small>
                        <small>Grav Now</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach

              {{-- <div class="col col-lg-4">
                <div class="pricing_card text-center bg_dark tilt">
                  <div class="card_badge">recommended</div>
                  <h3 class="card_heading">SkillSider Standard</h3>
                  <div class="pricing_wrap">
                    <span class="price_value"><sup>$</sup>150</span>
                    <small class="d-block">per 6 mounth</small>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block text-start">
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>5 Video Courses</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>1 Live Session Monthly </span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>24/7 WhatsApp Support</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>Affiliate Commission: 60% </span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn_primary" href="#!">
                      <span>
                        <small>Grav Now</small>
                        <small>Grav Now</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col col-lg-4">
                <div class="pricing_card text-center tilt">
                  <h3 class="card_heading">SkillSider Pro</h3>
                   <div class="pricing_wrap">
                    <span class="price_value"><sup>$</sup>150</span>
                    <small class="d-block">per 6 mounth</small>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block text-start">
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>10 Video Courses</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>4 Live Sessions Monthly</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>24/7 WhatsApp Support</span>
                    </li>
                    <li>
                      <i class="fas fa-caret-right"></i>
                      <span>Affiliate Commission: 70% </span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0">
                    <a class="btn border_dark" href="#!">
                      <span>
                        <small>Grav Now</small>
                        <small>Grav Now</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div> --}}
            </div>

            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
              <img src="{{ asset('studens-asset/assets/images/shape/shape_img_4.png')}}" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
              <img src="{{ asset('studens-asset/assets/images/shape/shape_img_5.png')}}" alt="Collab – Online Learning Platform">
            </div>
          </div>
        </section>
        
        <!-- Pricing Section - End -->
    
        <!-- Expect From Course - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg">
          <div class="container">
            <div class="row">
              <div class="col col-lg-6">
                <div class="section_heading">
                  <h2 class="heading_text">
                   Why SkillSider
                  </h2>
                  <p class="heading_description mb-0">
                  Skillsider is an ed-tech platform. Through our industry-leading courses, we bring the learner community of all age groups under one roof to learn, implement, and earn by the digital skills of the future that help you stand out from the crowd.
                  </p>
                </div>

                <div class="image_widget">
                  <img src="{{ asset('studens-asset/assets/images/about/about_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                </div>
              </div>
              <div class="col col-lg-6">
                <!-- Button will hide on Mobile Device -->
                <div class="btn_wrap pt-0 d-none d-lg-flex justify-content-end">
                  <a class="btn border_dark" href="course.html">
                    <span>
                      <small>Explore Courses</small>
                      <small>Explore Courses</small>
                    </span>
                  </a>
                </div>

                <div class="row">
                  <div class="col col-md-6">
                    <div class="service_item" data-magnetic>
                      <div class="item_icon">
                        <img src="{{ asset('studens-asset/assets/images/service/icon_academic_cap.svg')}}" alt="Collab – Online Learning Platform">
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Skill Based Courses:</h3>
                        <p class="mb-0">
                          SkillSider teach you the skills of 21st century that will help you to earn more
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-6">
                    <div class="service_item" data-magnetic>
                      <div class="item_icon">
                        <img src="{{ asset('studens-asset/assets/images/service/icon_physics.svg')}}" alt="Collab – Online Learning Platform">
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Course Certification:</h3>
                        <p class="mb-0">
                         You can boost your CV by including SkillSider certificate that help you stand out from the crowd in your professional career.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-6">
                    <div class="service_item" data-magnetic>
                      <div class="item_icon">
                        <img src="{{ asset('studens-asset/assets/images/service/icon_communication.svg')}}" alt="Collab – Online Learning Platform">
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Affiliate Program:</h3>
                        <p class="mb-0">
                         SkillSider students can earn a decent amount of commission through our exclusive affiliate program.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-6">
                    <div class="service_item" data-magnetic>
                      <div class="item_icon">
                        <img src="{{ asset('studens-asset/assets/images/service/icon_diploma.svg')}}" alt="Collab – Online Learning Platform">
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Partner Program:</h3>
                        <p class="mb-0">
                         Trainers can start their journey with the SkillSider partner program and build a strong position in the market.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button will show on Mobile Device -->
                <div class="btn_wrap pb-0 d-block d-lg-none text-center">
                  <a class="btn border_dark" href="course.html">
                    <span>
                      <small>Explore Courses</small>
                      <small>Explore Courses</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Expect From Course - End
        ================================================== -->

    
   
        <section class="courses_section section_space_lg">
          <div class="container">
            <div class="section_heading">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col col-lg-6">
                  <h2 class="heading_text mb-0">
                   Upskilling Courses 
                   Highest Rated Online Courses  </h2>
                </div>
                <div class="col col-lg-5">
                  <p class="heading_description mb-0 text-lg-end">
                   With our exclusive courses, now you can aquire the best knowledge and expertise from our experienced trainers. We believe you can master the art of digital entrepreneurship by our industry-leading courses.
                </p>
                </div>
              </div>
            </div>

            <div class="tabs_wrapper">
              <ul class="nav" role="tablist">
                <li role="presentation">
                  <button class="active" data-bs-toggle="tab" data-bs-target="#teb_hr" type="button" role="tab" aria-selected="true">
                    <i class="fas fa-users"></i>
                    <span>HR</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_photography" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-camera"></i>
                    <span>Photography</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_programming" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-chart-network"></i>
                    <span>Programming</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_marketing" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-lightbulb-on"></i>
                    <span>Marketing</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_design" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-palette"></i>
                    <span>Design</span>
                  </button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_photography" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_programming" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_marketing" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_design" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Courses Section - End
        ================================================== -->
        
        <section class="mentor_section section_space_lg">
          <div class="container">
                  <div class="section_heading">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col col-lg-6">
                  <h2 class="heading_text mb-0">
                   Meet Our Top Mentors
                     </h2>
                </div>
                <div class="col col-lg-5">
                  <p class="heading_description mb-0 text-lg-end">
                  At Skillsider, you can now be assured to get the top-most training from the leading educators of their respective fields. Turn your dreams into reality with LedasGuru proficient instructors.
                </p>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)

              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="mentor_details.html">
                      <img src="{{ asset('team-image/' . $team->image) }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">{{$team->name}}</a>
                    </h3>
                    <p class="mentor_designation">{{$team->description}}</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                      <li>
                        <i class="fas fa-clock"></i>
                        <span>120 Hours</span>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                        <span>4.9 (22 reviews)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
                    @endforeach
              
            </div>
          </div>
        </section>
  <!-- Expect From Course - Start

        ================================================== -->
           <!-- Expect From Course - End
        ================================================== -->

    
   
        <section class="courses_section section_space_lg">
          <div class="container">
            <div class="section_heading">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col col-lg-6">
                  <h2 class="heading_text mb-0">
                  What People Have To Say About SkillSider  </h2>
                </div>
                <div class="col col-lg-5">
                  <p class="heading_description mb-0 text-lg-end">
                   With our exclusive courses, now you can aquire the best knowledge and expertise from our experienced trainers. We believe you can master the art of digital entrepreneurship by our industry-leading courses.
                </p>
                </div>
              </div>
            </div>

            <div class="tabs_wrapper">
              <ul class="nav" role="tablist">
                <li role="presentation">
                  <button class="active" data-bs-toggle="tab" data-bs-target="#teb_hr" type="button" role="tab" aria-selected="true">
                    <i class="fas fa-users"></i>
                    <span>HR</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_photography" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-camera"></i>
                    <span>Photography</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_programming" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-chart-network"></i>
                    <span>Programming</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_marketing" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-lightbulb-on"></i>
                    <span>Marketing</span>
                  </button>
                </li>
                <li role="presentation">
                  <button data-bs-toggle="tab" data-bs-target="#teb_design" type="button" role="tab" aria-selected="false">
                    <i class="fas fa-palette"></i>
                    <span>Design</span>
                  </button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_photography" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_programming" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_marketing" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="teb_design" role="tabpanel">
                  <div class="row">
                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_1.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Computer Science</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$29.99</span>
                              <del class="remove_price">$39.99</del>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Programming for Everybody (Getting Started with Python)
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Photography</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">$9.99</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                              Photography Masterclass: A Complete Guide to Photography
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4">
                      <div class="course_card">
                        <div class="item_image">
                          <a href="course_details.html" data-cursor-text="View">
                            <img src="{{ asset('studens-asset/assets/images/course/course_image_3.jpg')}}" alt="Collab – Online Learning Platform">
                          </a>
                        </div>
                        <div class="item_content">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <ul class="item_category_list unordered_list">
                              <li><a href="#!">Business</a></li>
                            </ul>
                            <div class="item_price">
                              <span class="sale_price">FREE</span>
                            </div>
                          </div>
                          <ul class="meta_info_list unordered_list">
                            <li>
                              <i class="fas fa-chart-bar"></i>
                              <span>Beginner</span>
                            </li>
                            <li>
                              <i class="fas fa-clock"></i>
                              <span>120 Hours</span>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                              <span>3.5 (3k reviews)</span>
                            </li>
                          </ul>
                          <h3 class="item_title">
                            <a href="course_details.html">
                               Project Management Principles and Practices
                            </a>
                          </h3>
                          <a class="btn_unfill" href="course_details.html">
                            <span class="btn_text">View Course</span>
                            <span class="btn_icon">
                              <i class="fas fa-long-arrow-right"></i>
                              <i class="fas fa-long-arrow-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Courses Section - End
        ================================================== -->
        <section class="advertisement_section bg_dark">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6">
                <div class="section_heading mb-lg-0">
                  <h2 class="heading_text text-white">
                    Take the Next Step Toward Your Personal and Professional Goals
                  </h2>
                  <p class="heading_description mb-0 text-white">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </p>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn_primary" href="course.html">
                      <span>
                        <small>Explore Courses</small>
                        <small>Explore Courses</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="row images_group decoration_wrap">
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{ asset('studens-asset/assets/images/advertisement/advertisement_img_1.jpg')}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{ asset('studens-asset/assets/images/advertisement/advertisement_img_2.jpg')}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{ asset('studens-asset/assets/images/advertisement/advertisement_img_3.jpg')}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{ asset('studens-asset/assets/images/advertisement/advertisement_img_4.jpg')}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                  <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="{{ asset('studens-asset/assets/images/shape/shape_img_3.png')}}" alt="Collab – Online Learning Platform">
                  </div>
                  <div class="deco_item shape_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="{{ asset('studens-asset/assets/images/shape/shape_img_3.png')}}" alt="Collab – Online Learning Platform">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Advertisement Section - End
        ================================================== -->

        <!-- Courses Info Section - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6">
                <div class="image_widget">
                  <img src="{{ asset('studens-asset/assets/images/about/about_image_2.jpg')}}" alt="Collab – Online Learning Platform">
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="content_wrap ps-lg-3">
                  <div class="section_heading">
                    <h2 class="heading_text">
                      Supporting Student Learning in Your Course
                    </h2>
                    <p class="heading_description mb-0">
                      Rutrum tellus pellentesque eu tincidunt. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Sit amet porttitor eget dolor morbi
                    </p>
                  </div>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <i class="fas fa-square"></i>
                      <span>
                        Learn in-demand skills with over 183,000 video courses
                      </span>
                    </li>
                    <li>
                      <i class="fas fa-square"></i>
                      <span>
                        Choose courses taught by real-world experts
                      </span>
                    </li>
                    <li>
                      <i class="fas fa-square"></i>
                      <span>
                        Learn at your own pace, with lifetime access on mobile and desktop
                      </span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn_dark" href="mentor.html">
                      <span>
                        <small>Our Mentors</small>
                        <small>Our Mentors</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Courses Info Section - End
        ================================================== -->
<section class="faq_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center mb-3">
              <div class="row justify-content-center">
                <div class="col col-lg-7">
                  <h2 class="heading_text">
                    Frequently Asked Questions
                  </h2>
                  <p class="heading_description mb-0">
                    Egestas sed tempus urna et pharetra. Leo integer malesuada nunc vel. Libero id faucibus nisl tincidunt eget nullam non nisi. Faucibus turpis in eu mi bibendum neque egestas
                  </p>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="accordion" id="faq_accordion_1">
                        @foreach ($faqs as $index => $faq)
                            @if ($index % 2 == 0) {{-- Odd index (1-based) --}}
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $index }}" aria-expanded="false">
                                        {{ $faq->question }}
                                    </div>
                                    <div id="collapse_{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
    
                <div class="col col-lg-6">
                    <div class="accordion" id="faq_accordion_2">
                        @foreach ($faqs as $index => $faq)
                            @if ($index % 2 != 0) {{-- Even index (1-based) --}}
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $index }}" aria-expanded="false">
                                        {{ $faq->question }}
                                    </div>
                                    <div id="collapse_{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
                                        <div class="accordion-body">
                                            <p class="mb-0">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
          </div>
        </section>
       
  
       @include('layouts.student.disclaimer') 
      </main>
      <!-- Main Body - End
      ================================================== -->

      @endsection
