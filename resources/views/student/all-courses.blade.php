@extends('layouts.student.master')
@section('main')
    @php
        $courses = App\Models\Courses::all();

    @endphp
    <!-- Main Body - Start
          ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
            ================================================== -->
            <section class="page_banner">
                <div class="container">
                    <div class="content_wrapper" style="background-image: url('assets/images/banner/page_banner_image.png');">
                        <div class="row align-items-center d-block m-auto">
                            <div class="col col-lg-12 text-center">
                                <h1 class="page_title">Course Grid</h1>
                                <ul class="breadcrumb_nav unordered_list d-flex justify-content-center">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Courses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        <!-- Page Section - End
            ================================================== -->

        <!-- Courses Archive Section - Start
            ================================================== -->
        <section class="courses_archive_section section_space_lg">
            <div class="container">
                <div class="filter_topbar">
                    <p class="filter_result">Showing <span>1-9</span> of <span>30</span> results</p>
                    <ul class="filter_buttons_list unordered_list">
                        <li>
                            <button type="button" class="offCanvas_open_btn">
                                <i class="fas fa-filter"></i>
                                <span>Filter</span>
                            </button>
                        </li>
                        <li>
                            <div class="form_item m-0">
                                <select name="sorting">
                                    <option value="sorting" selected>Sorting</option>
                                    <option value="newest">Newest</option>
                                    <option value="popularity">Popularity</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    @foreach ($courses->sortBy('course_seq') as $course)
                        <div class="col col-lg-4">
                            <div class="course_card">
                                <div class="item_image">
                                    <a href="{{ route('single.course.details', $course->id) }}" data-cursor-text="View">
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
                                    <a class="btn_unfill" href="{{ route('single.course.details', $course->id) }}">
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
        </section>
        <!-- Courses Archive Section - End
            ================================================== -->
        @include('layouts.student.disclaimer')
        <!-- Filter Offcanvas - Start
            ================================================== -->
        <aside class="sidebar filter_offcanvas position-fixed m-0">
            <div class="close_btn_wrap">
                <button type="button" class="offCanvas_close_btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="content_wrapper">
                <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_category"
                        aria-expanded="true" aria-controls="collapse_category">
                        Category
                    </div>
                    <div class="collapse show" id="collapse_category">
                        <div class="card card-body">
                            <div class="checkbox_item">
                                <input id="checkbox_design" type="checkbox">
                                <label for="checkbox_design"><span>Design</span><span>(18)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_it_software" type="checkbox">
                                <label for="checkbox_it_software"><span>IT & Software</span><span>(11)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_development" type="checkbox">
                                <label for="checkbox_development"><span>Development</span><span>(10)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_marketing" type="checkbox">
                                <label for="checkbox_marketing"><span>Marketing</span><span>(4)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_business" type="checkbox">
                                <label for="checkbox_business"><span>Business</span><span>(8)</span></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratings_widget widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_ratings"
                        aria-expanded="true" aria-controls="collapse_ratings">
                        Ratings
                    </div>
                    <div class="collapse show" id="collapse_ratings">
                        <div class="card card-body">
                            <div class="checkbox_item">
                                <input id="checkbox_star5" type="checkbox">
                                <label for="checkbox_star5">
                                    <span>
                                        <i class="fas fa-star"></i> 5 stars
                                    </span>
                                    <span>(23)</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_star4half" type="checkbox">
                                <label for="checkbox_star4half">
                                    <span>
                                        <i class="fas fa-star"></i> 4.5 stars
                                    </span>
                                    <span>(22)</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_star4" type="checkbox">
                                <label for="checkbox_star4">
                                    <span>
                                        <i class="fas fa-star"></i> 4 stars
                                    </span>
                                    <span>(20)</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_star3half" type="checkbox">
                                <label for="checkbox_star3half">
                                    <span>
                                        <i class="fas fa-star"></i> 3.5 stars
                                    </span>
                                    <span>(18)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_instructors" aria-expanded="true" aria-controls="collapse_instructors">
                        Instructors
                    </div>
                    <div class="collapse show" id="collapse_instructors">
                        <div class="card card-body">
                            <div class="checkbox_item">
                                <input id="checkbox_lisa_baker" type="checkbox">
                                <label for="checkbox_lisa_baker"><span>Lisa Baker</span><span>(18)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_brandy_carlson" type="checkbox">
                                <label for="checkbox_brandy_carlson"><span>Brandy Carlson</span><span>(10)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_kevin_taylor" type="checkbox">
                                <label for="checkbox_kevin_taylor"><span>Kevin Taylor</span><span>(11)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_catherine_parker" type="checkbox">
                                <label for="checkbox_catherine_parker"><span>Catherine
                                        Parker</span><span>(11)</span></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_price"
                        aria-expanded="true" aria-controls="collapse_price">
                        Price
                    </div>
                    <div class="collapse show" id="collapse_price">
                        <div class="card card-body">
                            <div class="checkbox_item">
                                <input id="checkbox_all" type="checkbox">
                                <label for="checkbox_all"><span>All</span><span>(18)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_free" type="checkbox">
                                <label for="checkbox_free"><span>FREE</span><span>(10)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_paid" type="checkbox">
                                <label for="checkbox_paid"><span>Paid</span><span>(11)</span></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_level"
                        aria-expanded="true" aria-controls="collapse_level">
                        Level
                    </div>
                    <div class="collapse show" id="collapse_level">
                        <div class="card card-body">
                            <div class="checkbox_item">
                                <input id="checkbox_all_levels" type="checkbox">
                                <label for="checkbox_all_levels"><span>All Levels</span><span>(18)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_beginner" type="checkbox">
                                <label for="checkbox_beginner"><span>Beginner</span><span>(10)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_intermediate" type="checkbox">
                                <label for="checkbox_intermediate"><span>Intermediate</span><span>(11)</span></label>
                            </div>
                            <div class="checkbox_item">
                                <input id="checkbox_expert" type="checkbox">
                                <label for="checkbox_expert"><span>Expert</span><span>(11)</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- <div class="offCanvas_overlay"></div> -->
        <!-- Filter Offcanvas - End
            ================================================== -->

    </main>
    <!-- Main Body - End
          ================================================== -->
@endsection
