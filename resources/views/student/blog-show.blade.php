@extends('layouts.student.master')

@section('main')
<style>
    p img{
    width: 80%;
    margin-inline: 10%;
    }
</style>







     <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner">
          <div class="container">
            <div class="content_wrapper">
              <div class="row align-items-center">
                <div class="col col-lg-8">
                  <ul class="breadcrumb_nav unordered_list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#!">Blogs</a></li>
                    <li>Blog Details</li>
                  </ul>
                  <h1 class="page_title mb-0">
                  {{$blog->title}}
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Blog Details Section - Start
        ================================================== -->
        <section class="details_section blog_details_section section_space_lg pb-0">
          <div class="container">
            <div class="row">
              <div class="col col-lg-8">
                <div class="details_image">
                    @if($blog->img)
                  <img src="{{ asset($blog->img) }}" alt="Collab – Online Learning Platform">
                  @endif
                </div>
                <div class="details_content">
                  <ul class="meta_info_list unordered_list">
                    <li>
                      <a href="#!">
                        <i class="fas fa-thumbtack"></i>
                        <span>Sticky Post</span>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fas fa-user"></i>
                        <span>by {{ $blog->user->first_name }} {{ $blog->user->last_name }}</span>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fas fa-calendar-day"></i>
                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M j, Y') }}</span>
                      </a>
                    </li>
                  </ul>
                  <p>
                   {!! $blog->long_desc !!} </p>
                
                
                  <hr>
                  <div class="row">
                    <div class="col col-lg-6">
                      <ul class="item_category_list unordered_list">
                        <li><a href="#!">Photography</a></li>
                        <li><a href="#!">Technology</a></li>
                        <li><a href="#!">Programming</a></li>
                      </ul>
                    </div>
                    <div class="col col-lg-6 d-lg-flex justify-content-lg-end">
                      <ul class="social_links unordered_list">
                        <li>
                          <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#!"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                          <a href="#!"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog_author">
                    <div class="blog_author_image">
                      <img src="assets/images/blog/blog_author_image.jpg" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="blog_author_content position-relative">
                      <h3 class="author_name">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</h3>
                      <h4 class="author_designation">EasySkill Menthor</h4>
                    
                    </div>
                  </div>
                 
                  <div class="comments_list_wrap">
                    <h3 class="details_info_title">
                      2 Comments
                    </h3>
                    <ul class="comments_list unordered_list_block">
                      <li>
                        <div class="comment_item">
                          <div class="comment_author">
                            <div class="author_thumbnail">
                              <img src="assets/images/meta/student_thumbnail_6.jpg" alt="Collab – Online Learning Platform">
                            </div>
                            <div class="author_content">
                              <h4 class="author_name">Carolyn Wallace</h4>
                              <span class="comment_date">January 27, 2023</span>
                            </div>
                          </div>
                          <p>
                            Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Vitae ultricies leo integer malesuada nunc vel. Nibh cras pulvinar mattis nunc sed. Convallis a cras semper auctor neque vitae tempus. Mattis molestie a iaculis at erat pellentesque adipiscing.
                          </p>
                          <a class="reply_btn" href="#!"><i class="fas fa-reply"></i> Reply</a>
                        </div>
                        <ul class="comments_list unordered_list_block">
                          <li>
                            <div class="comment_item">
                              <div class="comment_author">
                                <div class="author_thumbnail">
                                  <img src="assets/images/meta/testimonial_thumbnail_1.jpg" alt="Collab – Online Learning Platform">
                                </div>
                                <div class="author_content">
                                  <h4 class="author_name">Ray Cooper</h4>
                                  <span class="comment_date">January 27, 2023</span>
                                </div>
                              </div>
                              <p>
                                Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Vitae ultricies leo integer malesuada nunc vel. Nibh cras pulvinar mattis nunc sed. Convallis a cras semper auctor neque vitae tempus. Mattis molestie a iaculis at erat pellentesque adipiscing.
                              </p>
                              <a class="reply_btn" href="#!"><i class="fas fa-reply"></i> Reply</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div class="comment_item">
                          <div class="comment_author">
                            <div class="author_thumbnail">
                              <img src="assets/images/meta/student_thumbnail_7.jpg" alt="Collab – Online Learning Platform">
                            </div>
                            <div class="author_content">
                              <h4 class="author_name">Marrion Willsoriam</h4>
                              <span class="comment_date">January 27, 2023</span>
                            </div>
                          </div>
                          <p>
                            Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Vitae ultricies leo integer malesuada nunc vel. Nibh cras pulvinar mattis nunc sed. Convallis a cras semper auctor neque vitae tempus. Mattis molestie a iaculis at erat pellentesque adipiscing.
                          </p>
                          <a class="reply_btn" href="#!"><i class="fas fa-reply"></i> Reply</a>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="comment_form_wrap">
                    <h3 class="details_info_title">
                      Leave a Reply
                    </h3>
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
                  </div>
                </div>
              </div>
              <div class="col col-lg-4">
                <aside class="sidebar ps-lg-4">
                  <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_category" aria-expanded="true" aria-controls="collapse_category">
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
                  <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_blog" aria-expanded="true" aria-controls="collapse_blog">
                      Related Articles
                    </div>
                    <div class="collapse show" id="collapse_blog">
                      <div class="card card-body">
                        <ul class="blog_small_group unordered_list_block">
                            @forelse($otherBlogs as $otherBlog)
                            @php 
                            $blogTitle = $otherBlog->title; // Assuming $blog->title contains the title
                            $blogSlug = str_replace(' ', '-', $blogTitle);
                        
                        @endphp
                           

                              <li>
                                <a class="blog_small" href="{{ route('blog.show', ['title' => $blogSlug]) }}">
                                  <span class="item_image">
                                    <img src="{{ asset($otherBlog->img) }}" alt="Collab – Online Learning Platform">
                                  </span>
                                  <span class="item_content">
                                    <span class="item_author"><i class="fas fa-user-alt"></i> by {{ $otherBlog->user->first_name }} {{ $otherBlog->user->last_name }}</span>
                                    <strong class="item_title">{{ $otherBlog->title }} </strong>
                                    <small class="item_post_date">{{ \Carbon\Carbon::parse($otherBlog->created_at)->format('M j, Y') }}</small>
                                  </span>
                                </a>
                              </li>
                              
                            @empty
                            
                            @endforelse
                       
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="widget">
                    <div class="widget_title" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_recent_comments" aria-expanded="true" aria-controls="collapse_recent_comments">
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
              <div class="col col-lg-4">
                <div class="blog_item">
                  <ul class="item_category_list unordered_list">
                    <li><a href="#!">Photography</a></li>
                  </ul>
                  <div class="item_image">
                    <a href="blog_details.html" data-cursor-text="View">
                      <img src="assets/images/blog/blog_img_1.jpg" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="item_content">
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        The Top Technical Skills All Employees Need in 2023
                      </a>
                    </h3>
                    <a class="btn_unfill" href="blog_details.html">
                      <span class="btn_text">Read Articles</span>
                      <span class="btn_icon">
                        <i class="fas fa-long-arrow-right"></i>
                        <i class="fas fa-long-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4">
                <div class="blog_item">
                  <ul class="item_category_list unordered_list">
                    <li><a href="#!">Photography</a></li>
                  </ul>
                  <div class="item_image">
                    <a href="blog_details.html" data-cursor-text="View">
                      <img src="assets/images/blog/blog_img_2.jpg" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="item_content">
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        The Best Graphic Design Careers  — for Beginners and Professionals
                      </a>
                    </h3>
                    <a class="btn_unfill" href="blog_details.html">
                      <span class="btn_text">Read Articles</span>
                      <span class="btn_icon">
                        <i class="fas fa-long-arrow-right"></i>
                        <i class="fas fa-long-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4">
                <div class="blog_item">
                  <ul class="item_category_list unordered_list">
                    <li><a href="#!">Photography</a></li>
                  </ul>
                  <div class="item_image">
                    <a href="blog_details.html" data-cursor-text="View">
                      <img src="assets/images/blog/blog_img_3.jpg" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="item_content">
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        Ubuntu vs. Windows: Which OS Should You Use in 2023?
                      </a>
                    </h3>
                    <a class="btn_unfill" href="blog_details.html">
                      <span class="btn_text">Read Articles</span>
                      <span class="btn_icon">
                        <i class="fas fa-long-arrow-right"></i>
                        <i class="fas fa-long-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
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

<main>
    <!-- Blog Content Section -->
    <div class="blog-content py-5">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-lg-8 mx-auto">
                    <div class="blog-details">
                          <!-- Blog Image -->
                          @if($blog->img)
                          <div class="blog-image mb-4 text-center">
                              <img src="{{ asset($blog->img) }}" alt="{{ $blog->title }}" class="img-fluid rounded" style="width: 100%">
                          </div>
                          @endif
                        <h1 class="blog-title fw-bold">{{ $blog->title }}</h1>
                        <div class="blog-meta d-flex align-items-center gap-2 mb-2">
                            <img src="{{ asset('profile-image/' . $blog->user->profile_photo_path) }}" alt="Author" width="25px" height="25px" class="rounded-circle">
                            <p class="m-0"><span style="font-weight:600;">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</span></p>
                            <!--<img src="{{ asset('studens-asset/assets/img/icon-10.svg') }}" alt="Calendar" width="20rem">-->
                           <p class="m-0">{{ \Carbon\Carbon::parse($blog->created_at)->format('M j, Y') }}</p>

                        </div>

               

                       
                        <!-- Blog Description -->
                        <div class="blog-description">
                            <p class="lead"> {!! $blog->long_desc !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto card">
                    <div class="blog-details card-body">
                        <div class="mb-4">
                            <h5 class="blog-title fw-bold my-3 text-center" style="font-size:30px">Other Blogs</h5>
                        
                        </div>
                      
                        
                     
                
                        <!-- Other Blogs Section -->
                        
                       
                            @forelse($otherBlogs as $otherBlog)
                            @php 
                            $blogTitle = $otherBlog->title; // Assuming $blog->title contains the title
                            $blogSlug = str_replace(' ', '-', $blogTitle);
                        
                        @endphp
                              <div class="">
                                <img src="{{ asset($otherBlog->img) }}" alt="{{ $otherBlog->title }}" class="img-fluid " style="margin-bottom: 10px" >
                                <br>
                                <a href="{{ route('blog.show', ['title' => $blogSlug]) }}" class="text-decoration-none" style="font-size:20px">
                                    <strong>{{ $otherBlog->title }}</strong>
                                </a>
                                <hr style="margin-bottom: 30px">
                              </div>
                                 
                              
                            @empty
                            
                            @endforelse
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>
@endsection
