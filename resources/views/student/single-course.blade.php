@extends('layouts.student.master')
@section('main')
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
                                <li> {{ $course->course_title }}</li>
                            </ul>
                            <h1 class="page_title">
                                {{ $course->course_title }}
                            </h1>
                            <ul class="info_list unordered_list_block pb-0">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Fermentum iaculis eu non diam phasellus vestibulum. Porta non pulvinar neque laoreet
                                        suspendisse. Justo nec ultrices dui sapien proin sed libero
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        At consectetur lorem donec massa sapien. Pulvinar sapien et ligula ullamcorper
                                        malesuada proin
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
                                        <img src="{{ asset('course-image/' . $course->image) }}"
                                            alt="Collab – Online Learning Platform">
                                    </div>
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <span>3.5 (3k reviews)</span>
                                        </li>
                                    </ul>
                                    <div class="item_price">
                                        @if ($course->course_type == 1)
                                            <span class="sale_price">$19.99</span>
                                            <del class="remove_price">$29.99</del>
                                        @else
                                            <span class="sale_price">Free</span>
                                        @endif
                                    </div>
                                    @if ($course->course_type == 1)
                                        <a href="{{ route('user.register', ['pckg' => 0]) }}" class="btn btn_dark">
                                            <span>
                                                <small>Get Course</small>
                                                <small>Get Course</small>
                                            </span>
                                        </a>
                                    @else
                                        <a href="{{ route('free.course.video', ['id' => $course->id]) }}" class="btn btn_dark">
                                            <span>
                                                <small>Start Learning</small>
                                                <small>Start Learning</small>
                                            </span>
                                        </a>
                                    @endif

                                    <ul class="course_info_list unordered_list_block">
                                        <li>
                                            <span><i class="fas fa-user"></i> Created</span>
                                            <strong>Wendy Chandler</strong>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-chart-bar"></i> Level</span>
                                            <strong>Beginner</strong>
                                        </li>
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

                                <div class="section_heading">
                                    <h2 class="heading_text">
                                        Course Content
                                    </h2>
                                </div>

                                <div class="accordion_wrap mb-5">
                                    {{-- <h3 class="details_info_title mb-3">Section 1. Programming Foundations with JavaScript, HTML and CSS</h3> --}}
                                    <div class="accordion style_2" id="corse_details_accordion">
                                        <div class="accordion-item">
                                            <div class="checkbox_item accordion_item_checked">
                                                <input type="checkbox">
                                            </div>
                                            <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_one" aria-expanded="true">
                                                Lesson 1. Course Overview
                                            </div>
                                            <div id="collapse_one" class="accordion-collapse collapse show"
                                                data-bs-parent="#corse_details_accordion">
                                                <div class="accordion-body">
                                                    <ul style="list-style: none; padding: 0;">
                                                        @foreach ($course->videos as $video)
                                                            <li style="margin-bottom: 10px; color: #1F1D0D;">
                                                                <i class="fas fa-play"
                                                                    style="font-size: 14px;margin-right: 4px;; color: #FFD32B;"></i>
                                                                <a href="" target="_blank"
                                                                    style="color: #1F1D0D;">{{ $video->video_title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="comments_list_wrap mb-5">
                                    <div class="section_heading">
                                        <h3 class="heading_text">
                                            Student Feedback
                                        </h3>
                                    </div>
                                    <ul class="comments_list unordered_list_block">
                                        <li>
                                            <div class="comment_item">
                                                <div class="comment_author">
                                                    <div class="author_thumbnail">
                                                        <img src="assets/images/meta/student_thumbnail_6.jpg"
                                                            alt="Collab – Online Learning Platform">
                                                    </div>
                                                    <div class="author_content">
                                                        <h4 class="author_name">Carolyn Wallace</h4>
                                                        <span class="comment_date">January 27, 2023</span>
                                                    </div>
                                                </div>
                                                <p>
                                                    Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper
                                                    dignissim cras. Vitae ultricies leo integer malesuada nunc vel. Nibh
                                                    cras pulvinar mattis nunc sed. Convallis a cras semper auctor neque
                                                    vitae tempus. Mattis molestie a iaculis at erat pellentesque adipiscing.
                                                </p>
                                                <a class="reply_btn" href="#!"><i class="fas fa-reply"></i> Reply</a>
                                            </div>
                                            <ul class="comments_list unordered_list_block">
                                                <li>
                                                    <div class="comment_item">
                                                        <div class="comment_author">
                                                            <div class="author_thumbnail">
                                                                <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                                    alt="Collab – Online Learning Platform">
                                                            </div>
                                                            <div class="author_content">
                                                                <h4 class="author_name">Ray Cooper</h4>
                                                                <span class="comment_date">January 27, 2023</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            Platea dictumst vestibulum rhoncus est pellentesque elit
                                                            ullamcorper dignissim cras. Vitae ultricies leo integer
                                                            malesuada nunc vel. Nibh cras pulvinar mattis nunc sed.
                                                            Convallis a cras semper auctor neque vitae tempus. Mattis
                                                            molestie a iaculis at erat pellentesque adipiscing.
                                                        </p>
                                                        <a class="reply_btn" href="#!"><i class="fas fa-reply"></i>
                                                            Reply</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment_item">
                                                <div class="comment_author">
                                                    <div class="author_thumbnail">
                                                        <img src="assets/images/meta/student_thumbnail_7.jpg"
                                                            alt="Collab – Online Learning Platform">
                                                    </div>
                                                    <div class="author_content">
                                                        <h4 class="author_name">Marrion Willsoriam</h4>
                                                        <span class="comment_date">January 27, 2023</span>
                                                    </div>
                                                </div>
                                                <p>
                                                    Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper
                                                    dignissim cras. Vitae ultricies leo integer malesuada nunc vel. Nibh
                                                    cras pulvinar mattis nunc sed. Convallis a cras semper auctor neque
                                                    vitae tempus. Mattis molestie a iaculis at erat pellentesque adipiscing.
                                                </p>
                                                <a class="reply_btn" href="#!"><i class="fas fa-reply"></i> Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                {{-- <div class="comment_form_wrap">
                      <div class="section_heading">
                        <h3 class="heading_text">
                          Leave a Reply
                        </h3>
                      </div>
                      <form action="#">
                        <div class="row">
                          <div class="col">
                            <div class="form_item mb-0">
                              <label for="input_message" class="input_title text-uppercase">Message</label>
                              <textarea id="input_message" name="comment" placeholder="Message"></textarea>
                            </div>
                          </div>
                          <div class="col col-md-6">
                            <div class="form_item mb-0">
                              <label for="input_name" class="input_title">Name</label>
                              <input id="input_name" type="text" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="col col-md-6">
                            <div class="form_item mb-0">
                              <label for="input_email" class="input_title">Email</label>
                              <input id="input_email" type="email" placeholder="Your Email">
                            </div>
                          </div>
                          <div class="col">
                            <div class="checkbox_item">
                              <input id="checkbox_remember" type="checkbox">
                              <label for="checkbox_remember">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <button type="submit" class="btn btn_dark">
                              <span>
                                <small>Submit Comment</small>
                                <small>Submit Comment</small>
                              </span>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4">
                        <aside class="sidebar">
                            <div class="course_info_card d-none d-lg-block">
                                <div class="details_image">
                                    <img src="{{ asset('course-image/' . $course->image) }}"
                                        alt="Collab – Online Learning Platform">
                                </div>
                                <ul class="meta_info_list unordered_list">
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <span>3.5 (3k reviews)</span>
                                    </li>
                                </ul>
                                <div class="item_price">
                                    @if ($course->course_type == 1)
                                        <span class="sale_price">$19.99</span>
                                        <del class="remove_price">$29.99</del>
                                    @else
                                        <span class="sale_price">Free</span>
                                    @endif
                                </div>
                                @if ($course->course_type == 1)
                                        <a href="{{ route('user.register', ['pckg' => 0]) }}" class="btn btn_dark">
                                            <span>
                                                <small>Get Course</small>
                                                <small>Get Course</small>
                                            </span>
                                        </a>
                                    @else
                                        <a href="{{ route('free.course.video', ['id' => $course->id]) }}" class="btn btn_dark">
                                            <span>
                                                <small>Start Learning</small>
                                                <small>Start Learning</small>
                                            </span>
                                        </a>
                                    @endif
                                <ul class="course_info_list unordered_list_block">
                                    <li>
                                        <span><i class="fas fa-user"></i> Created</span>
                                        <strong>Wendy Chandler</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-chart-bar"></i> Level</span>
                                        <strong>Beginner</strong>
                                    </li>
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

                            <div class="callbox_wrap">
                                <h3 class="widget_title">Get More Benefits with Our Plans</h3>
                                <a class="btn border_dark w-100 btn-dark text-light" href="{{ route('user.register', ['pckg' => 0]) }}">
                                    <span>
                                        <small>See Our Plans</small>
                                        <small>See Our Plans</small>
                                    </span>
                                </a>
                                {{-- <a class="btn btn_dark w-100" href="course.html">
                      <span>
                        <small>See Whole Course</small>
                        <small>See Whole Course</small>
                      </span>
                    </a> --}}
                            </div>

                            <div class="widget course_list_wrap">
                                <h3 class="widget_title">Other Courses</h3>
                                <ul class="course_list unordered_list_block">
                                    <li>
                                        <a class="course_small_layout" href="course_details.html">
                                            <span class="item_image">
                                                <img src="assets/images/course/course_image_15.jpg"
                                                    alt="Collab – Online Learning Platform">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title">Foundations of User Experience (UX)
                                                    Design</strong>
                                                <small class="item_price">
                                                    <b>$12.99</b>
                                                </small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="course_small_layout" href="course_details.html">
                                            <span class="item_image">
                                                <img src="assets/images/course/course_image_16.jpg"
                                                    alt="Collab – Online Learning Platform">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title">Management Principles and Practices</strong>
                                                <small class="item_price">
                                                    <del>$23.99</del>
                                                    <b>$19.99</b>
                                                </small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="course_small_layout" href="course_details.html">
                                            <span class="item_image">
                                                <img src="assets/images/course/course_image_17.jpg"
                                                    alt="Collab – Online Learning Platform">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title">Programming for Everybody (Getting Started
                                                    Python)</strong>
                                                <small class="item_price">
                                                    <b>$12.99</b>
                                                </small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
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
