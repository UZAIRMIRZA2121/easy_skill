@extends('layouts.student.master')
@section('main')
    @php
        $minutes = $sumOfVideoDurations;
        $hours = floor(($minutes % 1440) / 60);
        $Minutes = $minutes % 60;
    @endphp

    <!-- Main Body - Start
          ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
            ================================================== -->
        <section class="page_banner">
            <div class="container">
                <div class="content_wrapper">
                    <div class="row align-items-center">
                        <div class="col col-lg-7">
                            <ul class="breadcrumb_nav unordered_list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="course.html">Course</a></li>
                                <li>{{ $single_package->package_title }}</li>
                            </ul>
                            <h1 class="page_title">
                                {{ $single_package->package_title }}
                            </h1>
                            <ul class="info_list unordered_list_block pb-0">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        This course is designed to help you build a strong narrative in the professional
                                        realm. If you want to make your career in social media marketing, then this course
                                        is for you.
                                        Having a wide range of topics, this course makes you a prominent leader in the
                                        business sector. From
                                        enhancing your professional skills to improving your mental flexibility, this course
                                        is going to be
                                        a game-changer for your overall growth. </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        {!! html_entity_decode($single_package->description) !!}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Section - End
            ================================================== -->

        <!-- Course Details Section - Start
            ================================================== -->
        <section class="details_section course_details_section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="section_space_lg pb-lg-0">
                            <div class="pe-lg-5">
                                <div class="course_info_card d-lg-none">
                                    <div class="details_image">
                                        <img src="{{ asset('packages_image/' . $single_package->image) }}"
                                            alt="Package image">
                                    </div>
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <span>3.5 (3k reviews)</span>
                                        </li>
                                    </ul>
                                    <div class="item_price">
                                        <span class="sale_price"> Rs {{ $single_package->price }}</span>
                                    </div>
                                    <a href="{{ route('register.by.referal.pckge', ['referral_code' => 0, 'pckg' => $single_package->id ?? null]) }}"
                                        class="btn btn_dark">
                                        <span>
                                            <small>Get Course</small>
                                            <small>Get Course</small>
                                        </span>
                                    </a>
                                    <ul class="course_info_list unordered_list_block">
                                
                                        <li>
                                            <span><i class="fas fa-clock"></i> Duration</span>
                                            <strong>120 Hours</strong>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-video"></i> Lessons</span>
                                            <strong>3 Video</strong>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-users"></i> Webinar</span>
                                            <strong>4 Hours</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4">
                        <aside class="sidebar">
                            <div class="course_info_card d-none d-lg-block">
                                <div class="details_image">
                                    <img src="{{ asset('packages_image/' . $single_package->image) }}" alt="Package image">
                                </div>
                                <ul class="meta_info_list unordered_list">
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <span>3.5 (3k reviews)</span>
                                    </li>
                                </ul>
                                <div class="item_price">
                                    <span class="sale_price"> Rs {{ $single_package->price }}</span>
                                </div>
                                <a href="{{ route('register.by.referal.pckge', ['referral_code' => 0, 'pckg' => $single_package->id ?? null]) }}"
                                    class="btn btn_dark">
                                    <span>
                                        <small>Get Course</small>
                                        <small>Get Course</small>
                                    </span>
                                </a>
                                <ul class="course_info_list unordered_list_block">
                                    {{-- <li>
                        <span><i class="fas fa-user"></i> Created</span>
                        <strong>Wendy Chandler</strong>
                      </li>
                      <li>
                        <span><i class="fas fa-chart-bar"></i> Level</span>
                        <strong>Beginner</strong>
                      </li> --}}
                                    <li>
                                        <span><i class="fas fa-clock"></i> Duration</span>
                                        <strong>{{ $hours }} hours, {{ $Minutes }} minutes</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-video"></i> Lessons</span>
                                        <strong>{{ $courses->count() }}</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i> Certificate of Completion</span>
                                        <strong>Yes</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i> Assignments</span>
                                        <strong>Yes</strong>
                                    </li>
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
          
       
              @php 
              $courseIds = explode(',', $single_package->course_id); // Convert to an array
              $courses = App\Models\Courses::whereIn('id', $courseIds)->get();
          @endphp
          
              <div class="accordion_wrap mb-5">
                  <div class="row">
                      @foreach($courses->sortBy('course_seq') as $course)
                          <div class="col col-lg-4">
                              <div class="course_card">
                                  <div class="item_image">
                                      <a href="{{ route('single.course.details', $course->id) }}"
                                          data-cursor-text="View">
                                          <img src="{{ asset('course-image/' . $course->image) }}"
                                              alt="Collab – Online Learning Platform">
                                      </a>
                                  </div>
                                  <div class="item_content">
                                      <div class="d-flex align-items-center justify-content-between mb-3">
                                          <ul class="item_category_list unordered_list">
                                              <li><a href="#!">marketing</a></li>
                                          </ul>
                                          <div class="item_price">
                                              @if ($course->course_type == 1)
                                                  <span class="sale_price">$19.99</span>
                                                  <del class="remove_price">$29.99</del>
                                              @else
                                                  <span class="sale_price">Free</span>
                                              @endif

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
                                          <a href="{{ route('single.course.details', $course->id) }}">
                                              {{ $course->course_title }}
                                          </a>
                                      </h3>
                                      <a class="btn_unfill"
                                          href="{{ route('single.course.details', $course->id) }}">
                                          <span class="btn_text">View Course</span>
                                          <span class="btn_icon">
                                              <i class="fas fa-long-arrow-right"></i>
                                              <i class="fas fa-long-arrow-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>

            </div>
        </section>
        <!-- Course Details Section - End
            ================================================== -->

        <!-- Policy Section - Start
            ================================================== -->
        <section class="policy_section section_space_lg">
            <div class="container position-relative">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Flexibility in Planning and Teaching
                    </h2>
                </div>
                <div class="row">
                    <div class="col col-lg-3">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Allocate the time </span>
                                    for study
                                </h3>
                            </div>
                            <p class="mb-0">
                                Etiam sit amet nisl purus in mollis nunc sed. Viverra nibh cras pulvinar mattis nunc sed
                                blandit libero volutpat
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-code-branch"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Alternative learning </span>
                                    formats
                                </h3>
                            </div>
                            <p class="mb-0">
                                Posuere ac ut consequat semper viverra nam libero justo. Semper feugiat nibh sed pulvinar
                                proin gravida hendrerit
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-comment-smile"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Mentors with over 5 </span>
                                    years of experience
                                </h3>
                            </div>
                            <p class="mb-0">
                                Nunc sed velit dignissim sodales ut eu sem. Id faucibus nisl tincidunt eget. Nunc non
                                blandit massa enim
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Follow the Training </span>
                                    Program
                                </h3>
                            </div>
                            <p class="mb-0">
                                Tincidunt vitae semper quis lectus nulla at. Eget lorem dolor sed viverra ipsum nunc. Tellus
                                at urna condimentum
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Policy Section - End
            ================================================== -->
        @include('layouts.student.disclaimer')
    </main>
    <!-- Main Body - End
          ================================================== -->
@endsection
