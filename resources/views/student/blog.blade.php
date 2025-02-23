@extends('layouts.student.master')
@section('main')
@php
$blogs = App\Models\Blog::all();
@endphp

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner">
          <div class="container">
            <div class="content_wrapper" style="background-image: url('assets/images/banner/page_banner_image.png');">
              <div class="row align-items-center">
                <div class="col col-lg-6">
                  <ul class="breadcrumb_nav unordered_list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#!">Blogs</a></li>
                    <li>Our Blogs</li>
                  </ul>
                  <h1 class="page_title">Articles</h1>
                  <p class="page_description">
                    Egestas sed tempus urna et pharetra. Leo integer malesuada nunc vel. Libero id faucibus nisl tincidunt eget nullam non nisi. Faucibus turpis in eu mi bibendum neque egestas
                  </p>
                  <form action="#">
                    <div class="form_item mb-0">
                      <input type="search" name="search" placeholder="What do you want to learn ?">
                      <button type="submit" class="btn btn_dark">
                        <span>
                          <small>Search</small>
                          <small>Search</small>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Blog Section - Start
        ================================================== -->
        <section class="blog_section section_space_lg">
          <div class="container">
            <div class="row">
              <div class="col col-lg-12">
                <div class="row">
                    @foreach($blogs as $blog)
                    @php 
                        $blogTitle = $blog->title; // Assuming $blog->title contains the title
                        $blogSlug = str_replace(' ', '-', $blogTitle);
                    
                    @endphp
                  <div class="col col-lg-4">
                    <div class="blog_item">
                      <ul class="item_category_list unordered_list">
                        <li><a href="#!">Photography</a></li>
                      </ul>
                      <div class="item_image">
                        <a href="{{ route('blog.show', ['title' => $blogSlug]) }}" data-cursor-text="View">
                          <img src="{{ asset($blog->img) }}" alt="Collab – Online Learning Platform">
                        </a>
                      </div>
                      <div class="item_content">
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
                        <h3 class="item_title">
                          <a href="{{ route('blog.show', ['title' => $blogSlug]) }}">
                            {{ $blog->title }}
                          </a>
                        </h3>
                        <a class="btn_unfill" href="{{ route('blog.show', ['title' => $blogSlug]) }}">
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
                <div class="pagination_wrap">
                  <ul class="pagination_nav unordered_list">
                    <li><a href="#!"><i class="fas fa-long-arrow-left"></i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">...</a></li>
                    <li><a href="#!">6</a></li>
                    <li><a href="#!"><i class="fas fa-long-arrow-right"></i></a></li>
                  </ul>
                </div>
              </div>
             
            </div>
          </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->

        @include('layouts.student.disclaimer') 
      </main>
      <!-- Main Body - End
      ================================================== -->


    @endsection
