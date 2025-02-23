@extends('layouts.student.master')

@section('main')
    <style>
        p img {
            width: 80%;
            margin-inline: 10%;
        }
    </style>
    <style>
        /* Default iframe styling (for larger screens) */
        #videoIframe {
            width: 100%;
            height: 415px;
        }

        /* Tablet screens (768px to 1024px) */
        @media (max-width: 1024px) {
            #videoIframe {
                height: 360px;
                /* Adjust height for tablets */
            }
        }

        /* Mobile screens (up to 767px) */
        @media (max-width: 767px) {
            #videoIframe {
                height: 208px;
                /* Adjust height for mobile */
            }
        }
    </style>




    <!-- Main Body - Start
              ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
                ================================================== -->

        <!-- Page Section - End
                ================================================== -->

        <!-- Blog Details Section - Start
                ================================================== -->
        <section class="details_section blog_details_section section_space_lg pb-0 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="details_image">
                            @if (isset($all_video) && count($all_video) > 0)
                                <div class="blog-details">
                                    <!-- Blog Image -->
                                    <div class="blog-image mb-2 text-center">

                                        <iframe id="videoIframe"
                                            src="https://www.youtube.com/embed/{{ $all_video[0]->video_link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>

                                    </div>
                                    <!-- Video Title Display -->
                                    <h1 id="videoTitle" class="blog-title fw-bold mb-3" style="font-size:20px">
                                        {{ $all_video[0]->video_title }}</h1>
                                </div>
                            @endif
                        </div>
                        <div class="comment_form_wrap">
                            <div class="section_heading">
                                <h3 class="heading_text">
                                    Leave a Comment
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
                                            <label for="checkbox_remember">Save my name, email, and website in this browser
                                                for the next time I comment.</label>
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
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <aside class="sidebar ps-lg-4">
                            <div class="widget">
                                <div class="widget_title" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_blog" aria-expanded="true" aria-controls="collapse_blog">
                                    Related Articles
                                </div>
                                <div class="collapse show" id="collapse_blog">
                                    <div class="card card-body">
                                        <ul class="blog_small_group unordered_list_block">
                                            @if (isset($all_video) && count($all_video) > 0)
                                                <div class="">
                                                    @foreach ($all_video as $video)
                                                        <!-- Video Title with Dynamic URL -->
                                                        <div class="d-flex">
                                                            <div class="mt-1"> <i class="fa fa-play"
                                                                    style="font-size:16px"></i></div>
                                                            <div class="ms-1">
                                                                <a href="javascript:void(0);"
                                                                    onclick="changeVideo('{{ $video->video_link }}', '{{ $video->video_title }}')"
                                                                    class="text-decoration-none" style="font-size:20px">
                                                                    <strong
                                                                        style="font-size: 16px ">{{ $video->video_title }}</strong>
                                                                </a>

                                                            </div>

                                                        </div>
                                                        <hr style="margin-bottom: 15px">
                                                    @endforeach
                                                </div>
                                            @endif
                                            <li>
                                                <a class="blog_small" href="{{ route('single.course.details', $course->id) }}">
                                                    <span class="item_image">
                                                        <img src="assets/images/blog/blog_small_img_3.jpg"
                                                            alt="Collab – Online Learning Platform">
                                                    </span>
                                                    <span class="item_content">
                                                        <span class="item_author"><i class="fas fa-user-alt"></i> by
                                                            Corabelle Durrad</span>
                                                        <strong class="item_title">See How Michaele Built a New Life and
                                                            Career </strong>
                                                        <small class="item_post_date">October 12, 2023</small>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget_title" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_recent_comments" aria-expanded="true"
                                    aria-controls="collapse_recent_comments">
                                    Recent Comments
                                </div>
                                <div class="collapse show" id="collapse_recent_comments">
                                    <div class="card card-body">
                                        <ul class="recent_comments_list unordered_list_block">
                                            <li>
                                                <a href="#!">
                                                    <i class="fas fa-comments"></i>
                                                    <strong>Irene Flores</strong>
                                                </a>
                                                <span>felis eget velit aliquet sagittis id consectetur</span>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fas fa-comments"></i>
                                                    <strong>Anthony Patterson</strong>
                                                </a>
                                                <span>gravida in fermentum et sollicitudin</span>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fas fa-comments"></i>
                                                    <strong>Wendy Johnson</strong>
                                                </a>
                                                <span>aenean sed adipiscing diam donec</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </aside>

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Section - End
                ================================================== -->

        <!-- Blog Section - Start
                ================================================== -->
        <section class="blog_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center">
                        <div class="col col-lg-5">
                            <h2 class="heading_text mb-lg-0">
                                Articles
                            </h2>
                        </div>
                        <div class="col col-lg-7 d-none d-lg-flex justify-content-end">
                            <div class="btn_wrap p-0">
                                <a class="btn border_dark" href="blog.html">
                                    <span>
                                        <small>All Articles</small>
                                        <small>All Articles</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($all_courses as $course)
                    <div class="col col-lg-4">
                      
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('single.course.details', $course->id) }}" data-cursor-text="View">
                                        <img src="{{ asset('course-image/' . $course->image) }}"  alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="{{ route('single.course.details', $course->id) }}">
                                          {{$course->course_title}}
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('single.course.details', $course->id) }}">
                                        <span class="btn_text">Read Articles</span>
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

                <div class="btn_wrap d-block d-lg-none pb-0 text-center">
                    <a class="btn border_dark" href="blog.html">
                        <span>
                            <small>All Articles</small>
                            <small>All Articles</small>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Blog Section - End
                ================================================== -->

                @include('layouts.student.disclaimer') 
    </main>
    <!-- Main Body - End
              ================================================== -->
    <script>
        // Function to change the video when a video link is clicked and update the title
        function changeVideo(videoLink, videoTitle) {
            const iframe = document.getElementById('videoIframe');
            iframe.src = `https://www.youtube.com/embed/${videoLink}`;

            // Update the video title displayed on the page
            const titleElement = document.getElementById('videoTitle');
            titleElement.textContent = videoTitle;
        }
    </script>
@endsection
