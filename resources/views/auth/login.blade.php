<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login your account – Collab – Online Learning Platform Template</title>
    <link rel="shortcut icon" href="{{asset('studens-asset/assets/images/logo/favourite_icon_1.svg')}}">

    <!-- Framework - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/bootstrap.min.css')}}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/fontawesome.css')}}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/animate.css')}}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/cursor.css')}}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/slick-theme.css')}}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/magnific-popup.css')}}">

    <!-- Vanilla Calendar - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/vanilla-calendar.min.css')}}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('studens-asset/assets/css/style.css')}}">

  </head>


  <body onload="generateCaptcha()">

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="far fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

      <!-- Site Header - Start
      ================================================== -->
      @include('layouts.student.header') 
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Register Section - Start
        ================================================== -->
        <section class="register_section section_space_lg">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-lg-5">
                <h1 class="register_heading text-center">Account Login</h1>
                <p class="register_heading_description text-center">
                  Please enter your Email & Password
                </p>
               
                <form class="form w-100" novalidate="novalidate" id="myForm" method="POST"
                            action="{{ route('login') }}" onsubmit="return validateCaptcha()">
                            @csrf
                  <div class="register_form signup_login_form">
                    <div class="error">
                        <x-validation-errors class="mb-4 alert error  alert-danger" />
                        @if (Session::has('login'))
                            <div class="alert error  alert-success">
                                {{ Session::get('login') }}
                            </div>
                        @endif
                        @if (Session::has('message'))
                            <div class="alert error  alert-danger">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert error  alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
        
                    </div>
                    <div class="form_item">
                      <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form_item">
                      <input type="password" name="password" placeholder="**********">
                    </div>
                    <div class="remenber_forget row mb-3 align-items-center justify-content-between">
                      <div class="col col-6">
                        <div class="checkbox_item mb-0">
                          <input id="checkbox_remenber" type="checkbox">
                          <label for="checkbox_remenber">Remenber me</label>
                        </div>
                      </div>
                      <div class="col col-6">
                        <div class="forget_password text-end">
                          <a href="#!">Forget Password</a>
                        </div>
                      </div>
                      <div class="col col-12">
                        {{-- <div class="forget_password text-end">
                            <div class="fv-row mb-10  d-flex">
                                <div class="container" id="captcha-container">
                                    <img src="{{ asset('captcha-image.jpeg') }}" alt="Snow">
                                    <div class="centered" id="captcha-text"></div>
                                    <i class="fas fa-sync" onclick="generateCaptcha()"></i>
                                </div>
                                <div class="form_item">
                                <input type="text"
                                id="captcha-input"class="form-control form-control-lg form-control-solid"
                                placeholder="Type here">
                                  </div>

                            </div>
                        </div> --}}
                      </div>
                    </div>
                    <button type="submit" class="btn btn_dark mb-5">
                      <span>
                        <small>Login Now</small>
                        <small>Login Now</small>
                      </span>
                    </button>
                    
                    <p class="mb-0 text-center">don't have an account? <a href="{{ route('user.register', ['pckg' => 0]) }}">Register Here</a></p>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Register Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      @include('layouts.student.footer')
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Framework - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/bootstrap-dropdown-ml-hack.js')}}"></script>

    <!-- animation - jquery include -->
    <script src="{{asset('studens-asset/assets/js/cursor.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/tilt.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/parallax.min.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/parallax-scroll.js')}}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/slick.min.js')}}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/magnific-popup.min.js')}}"></script>

    <!-- Counter Up - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/waypoint.js')}}"></script>
    <script src="{{asset('studens-asset/assets/js/counterup.min.js')}}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{asset('studens-asset/assets/js/countdown.js')}}"></script>

    <!-- Vanilla Calendar - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/vanilla-calendar.min.js')}}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{asset('studens-asset/assets/js/main.js')}}"></script>
    <script>
        function generateCaptcha() {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var captcha = '';

            // Generate a random 8-character captcha
            for (var i = 0; i < 6; i++) {
                captcha += characters.charAt(Math.floor(Math.random() * characters.length));
            }

            // Set the captcha text
            document.getElementById('captcha-text').innerText = captcha;
        }

        function validateCaptcha() {
            var userInput = document.getElementById('captcha-input').value;
            var actualCaptcha = document.getElementById('captcha-text').innerText;

            if (userInput.toLowerCase() === actualCaptcha.toLowerCase()) {
                document.getElementById('your-form-id').submit(); // Submit the form
            } else {
                document.getElementById('captcha-error').style.display = 'block';
                return false;
            }
        }

        document.getElementById("toggle-password").addEventListener("click", function() {
            var passwordInput = document.getElementById("password");
            var iconEye = this.querySelector(".bi-eye");
            var iconEyeSlash = this.querySelector(".bi-eye-slash");

            // Toggle the password visibility
            if (passwordInput.type === "password") {
                passwordInput.type = "text"; // Show password
                iconEye.classList.remove("d-none"); // Show open eye icon
                iconEyeSlash.classList.add("d-none"); // Hide closed eye icon
            } else {
                passwordInput.type = "password"; // Hide password
                iconEye.classList.add("d-none"); // Hide open eye icon
                iconEyeSlash.classList.remove("d-none"); // Show closed eye icon
            }
        });
    </script>
  </body>
</html>
