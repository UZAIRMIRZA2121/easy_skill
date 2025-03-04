@extends('layouts.student.master')
@section('main')




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
                          <h1 class="page_title">Contacts</h1>
                          <ul class="breadcrumb_nav unordered_list d-flex justify-content-center">
                              <li><a href="index.html">Home</a></li>
                              <li>Contact Us</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
          <div class="container">
            <div class="row">
              <div class="col col-lg-5">
                <div class="pe-lg-5">
                  <div class="section_heading">
                    <h2 class="heading_text">
                      Contact Us
                    </h2>
                    <p class="heading_description mb-0">
                      Viverra maecenas accumsan lacus vel facilisis volutpat. Faucibus purus in massa tempor nec feugiat nisl
                    </p>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Call Us</h3>
                      <p class="mb-0">(101) 222 123 456</p>
                      <p class="mb-0">(102) 333 234 674</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Email Address</h3>
                      <p class="mb-0">info-collab@example.com</p>
                      <p class="mb-0">collab-support@exapmple.com</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Reach Us</h3>
                      <p class="mb-0">31 Sunset Road, Gales Ferry, </p>
                      <p class="mb-0">6335 United States</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-lg-7">
                <div class="gmap_canvas">
                  <iframe id="gmap_canvas_iframe" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Contact Form Section - Start
        ================================================== -->
        <section class="contact_form_section section_space_lg bg_light decoration_wrap overflow-hidden">
          <div class="container decoration_wrap">
            <div class="row justify-content-center">
              <div class="col col-lg-7">
                <div class="section_heading text-center">
                  <h2 class="heading_text mb-0">
                    Contact Our Support Team to Know What You Want
                  </h2>
                </div>
              </div>
            </div>

            <form action="#">
              <div class="row justify-content-center">
                <div class="col col-lg-8">
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form_item m-0">
                        <label for="input_name" class="input_title">Name</label>
                        <input id="input_name" type="text" name="name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item m-0">
                        <label for="input_email" class="input_title">Email</label>
                        <input id="input_email" type="email" name="email" placeholder="Your Email">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item m-0">
                        <label for="input_phone" class="input_title">Phone</label>
                        <input id="input_phone" type="tel" name="telephone" placeholder="Your Phone">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item m-0">
                        <label for="input_jubject" class="input_title">Subject</label>
                        <select name="subject" id="input_jubject">
                          <option value="subject" selected>Choose Subject</option>
                          <option value="volvo">Volvo</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_item">
                        <label for="input_message" class="input_title">Message</label>
                        <textarea id="input_message" name="message" placeholder="Type Your Message"></textarea>
                      </div>
                      <button type="submit" class="btn btn_dark w-100 b-block">
                        <span>
                          <small>Send Your Message</small>
                          <small>Send Your Message</small>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="deco_item shape_img_1 wow fadeInUp" data-wow-delay=".2s">
              <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_2 wow fadeInUp" data-wow-delay=".4s">
              <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
            </div>
          </div>

          <div class="deco_item shape_img_3 wow fadeInLeft" data-wow-delay=".2s">
            <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
          </div>
          <div class="deco_item shape_img_4 wow fadeInRight" data-wow-delay=".4s">
            <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
          </div>
        </section>
        <!-- Contact Form Section - End
        ================================================== -->

       
        @include('layouts.student.disclaimer') 
       
      </main>
      <!-- Main Body - End
      ================================================== -->

 

    @endsection
