<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login your account – Collab – Online Learning Platform Template</title>
    <link rel="shortcut icon" href="{{ asset('studens-asset/assets/images/logo/favourite_icon_1.svg') }}">

    <!-- Framework - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/bootstrap.min.css') }}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/animate.css') }}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/cursor.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/slick-theme.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/magnific-popup.css') }}">

    <!-- Vanilla Calendar - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/vanilla-calendar.min.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('studens-asset/assets/css/style.css') }}">

</head>


<body>

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
                        
                        <div class="col col-lg-9">
                            <h1 class="register_heading text-center">Create Account</h1>
                            <p class="register_heading_description text-center">
                                Already have account? <a href="login.html">Login</a>
                            </p>
                            @if (Session::has('error'))
                            <div class="alert  alert-danger">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                            @if (Session::has('registerd'))
                            <div class="alert  alert-success">
                                {{ Session::get('registerd') }}
                            </div>
                            @endif
    
                            <form class="form w-100" method="POST"
                               action="{{ route('registeration.submit') }}"
                                onsubmit="return validateForm();">
                                @csrf
                                <!--begin::Input group-->
                                @if (Session::has('message'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif



                                <div class="register_form signup_login_form row">
                                    <div class="form_item col-md-6">
                                        <input type="text" name="first_name" placeholder="First Name"
                                            value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form_item col-md-6">
                                        <input type="text" name="last_name" placeholder="Last Name"
                                            value="{{ old('last_name') }}" required>
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form_item col-md-6">
                                        <input type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form_item col-md-6">
                                        <input type="text" name="phone" placeholder="Mobile number"
                                            value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form_item col-md-12">
                                        <input type="password" name="password" placeholder="Password"
                                            value="{{ old('password') }}" required>
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers
                                            &amp;
                                            symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <div class="form_item col-md-6">
                                        <input type="text" name="referral_code" placeholder="Sponsor Code"
                                            value="{{ old('referral_code') }}" required>
                                        @error('referral_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="form_item col-12">
                                        <div class="alert alert-warning mt-1" id="sponsor-code-msg"
                                            style="display:none;"></div>
                                    </div>
                                    <!--begin::Wrapper-->
                                    <div class="my-2 " id="sponsor-code-details" style="display:none;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="w-50">Name:</th>
                                                <td id="sponsor-name"></td>
                                            </tr>
                                            <tr>
                                                <th class="w-50">Number:</th>
                                                <td id="sponsor-number"></td>
                                            </tr>
                                            <tr>
                                                <th class="w-50">RANK:</th>
                                                <td id="sponsor-rank"></td>
                                            </tr>
                                            <tr>
                                                <th class="w-50">JOINING DATE:</th>
                                                <td id="sponsor-joining-date"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    @php
                                        $selected_pckg_id = request()->segment(3);
                                        $checked = $active = '';

                                        if (in_array($selected_pckg_id, [1, 2, 3, 4])) {
                                            $checked = 'checked';
                                            $active = 'active';
                                        }

                                    @endphp
                                    <style>
                                        .active_package {
                                            z-index: 1;
                                            transform: translate(-2px, -2px);
                                            box-shadow: 10px 10px 0 0 #1F1D0D;
                                        }
                                        .card_ba{
    left: 48%;
    font-size: 11px;
    padding: 0 14px;
    font-weight: 800;
    line-height: 22px;
    color: #1F1D0D;
    position: absolute;
    text-transform: uppercase;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    border-radius: 0 0px 8px 8px;
    background-color: #FFD32B;
                                        }

                                    </style>
                                    <!--end::Wrapper-->
                                    <div class="event_speakers row mb-4">
                                        <!-- Hidden input field to store the selected package ID -->
                                        <input type="hidden" name="package_id" id="package_id" value="">
                                    
                                        @foreach ($packages as $key => $package)
                                            <div class="col col-lg-4">
                                                <div class="mentor_item {{ $package->id == 2 ? 'active_package' : '' }}" data-package-id="{{ $package->id }}">
                                                    <div class="mentor_image">
                                                        <div class="card_ba {{ $package->id == 2 ? '' : 'd-none' }}">recommended</div>
                                                        <input type="radio" name="package_id" class="d-none package_radio" value="{{ $package->id }}" {{ $checked }} required>
                                                        <img src="https://skillsider.pk/packages_image/1713859075.jpg" alt="Collab – Online Learning Platform">
                                                    </div>
                                                    <div class="mentor_content">
                                                        <h3 class="mentor_name">
                                                            {{ $package->package_title }}
                                                        </h3>
                                                        <p class="mentor_designation mb-0">Rs {{ $package->price }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            const mentorItems = document.querySelectorAll(".mentor_item");
                                            const hiddenInput = document.getElementById("selected_package_id");
                                    
                                            mentorItems.forEach(item => {
                                                item.addEventListener("click", function () {
                                                    // Remove active class from all items
                                                    mentorItems.forEach(i => i.classList.remove("active_package"));
                                    
                                                    // Add active class to the clicked item
                                                    this.classList.add("active_package");
                                    
                                                    // Select the radio input inside the clicked item and check it
                                                    const radioInput = this.querySelector(".package_radio");
                                                    if (radioInput) {
                                                        radioInput.checked = true;
                                                        // Update the hidden input with the selected package ID
                                                        hiddenInput.value = radioInput.value;
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                    
                                    
                                    @error('package_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="col-12 mb-7 ">
                                        <table class="table table-bordered d-none" id="tbl"
                                            style="display: none">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="text-center">PURCHASE SUMMARY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>PRODUCT</th>
                                                    <th>SUBTOTAL</th>
                                                </tr>
                                                <tr>
                                                    <th><span id="tbl-prdouct-name">No Selected</span></th>
                                                    <th><span id="tbl-price"></span></th>
                                                </tr>
                                                <tr>
                                                    <th>DISCOUNT</th>
                                                    <th><span id="tbl-discount"></span></th>
                                                </tr>
                                                {{-- <tr>
                                                    <th>Tax</th>
                                                    <th><span id="tbl-tax">Inclusive of all taxes</span></th>
                                                </tr> --}}
                                                <tr>
                                                    <th>TOTAL <span class="text-muted"> (Inclusive of all taxes)</span>
                                                    </th>
                                                    <th><span id="tbl-total"></span></th>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- <div class="form_item col-md-6">
                                        <input type="text" name="coupon_code" placeholder="Discount Code"
                                            value="{{ old('coupon_code') }}" required>
                                        <div id="coupon_details"></div>
                                    </div>
                                    <div class="form_item col-md-6">
                                            <button type="button" class="btn btn_dark mb-5"  id="apply_coupon_btn">
                                                <span>
                                                    <small>Apply Discount</small>
                                                    <small>Apply Discount</small>
                                                </span>
                                            </button> 
                                    </div> --}}
                                    <div class="form_item col-md-6">
                                       
                                            <button type="button" class="btn btn_dark mb-5" data-bs-toggle="modal" data-bs-target="#referral_code_modal">
                                                <span>
                                                    <small>Payment method</small>
                                                    <small>Payment method</small>
                                                </span>
                                            </button> 
                                    </div>
                                    <div class="form_item col-md-6">
                                        <input type="text" name="trxid" placeholder="Transaction ID"
                                            value="{{ old('trxid') }}" required>
                                        @error('trxid')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <i class="text-danger bi bi-exclamation-circle-fill"
                                            style="font-size: 20px;"></i>
                                        <span class="form-label fw-bolder text-dark fs-5"> NOTE</span>
                                        <label class="form-label fw-bolder text-dark fs-6">
                                            Due to the nature of the services and business, there is a <span> <a
                                                    href="{{ route('refund.policy') }}" target="_blank"
                                                    class="text-danger" rel="noopener noreferrer">STRICT NO REFUND
                                                    POLICY.</a> </span>
                                            <span class="text-danger">*</span></label>
                                        </span>
                                    </div>


                                    <button type="submit" class="btn btn_dark mb-5">
                                        <span>
                                            <small>Signup Now</small>
                                            <small>Signup Now</small>
                                        </span>
                                    </button>


                                </div>


                            </form>
                        </div>
                    </div>
                </div>

                <!-- Nested modal for referral code -->
                <div class="modal fade" id="referral_code_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Do You Have a Referral
                                    Code?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                <p>Kya Ap ka contact kisi aise bandy se hai jis ka referral code use kar
                                    k ap account bana sakein?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#given_model">Yes</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#contact_modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nested modal for given model -->
                <div class="modal fade" id="given_model" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Official Account
                                    Numbers</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-header">

                                <div class="text-danger">
                                    <h1 class="text-danger">Note</h1>
                                    * Agar ap k pass referral link ya code dene wala koi nahi hai to
                                    payment na karein. </br></br>

                                    * Kisi aise bandy ko talash kariye jis ka referral code use kar k ap
                                    account bana saky.</br></br>

                                    * Fees pay karny k bad screenshot us bandy ko bhejiye jis ny apko
                                    skillsider ki details di hein.</br>
                                    </br>
                                    * Nichy diye huy numbers k ilawa kisi or number py
                                    payment na karein.

                                </div>
                            </div>
                            <div class="modal-body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Bank</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payment_methods as $payment_method)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('payment-method-image/' . $payment_method->logo) }}"
                                                        width="50" alt="">
                                                </td>
                                                <td>{{ $payment_method->bank }}</td>
                                                <td>{{ $payment_method->account_name }}</td>
                                                <td>{{ $payment_method->account_number }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nested modal for contact modal -->
                <div class="modal fade" id="contact_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Don't Have a
                                    Referral Code</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span class="text-danger">*</span> Referral Code k bina ap ka account
                                nahi bany ga. </br>

                                <span class="text-danger">*</span> Agar Ap ka contact kisi aise bandy
                                se hai jis ne ap ko SkillSider ki details di hein to kindly usko msg
                                kariye usi ka referral code use kar k ap account bana sakein gy.</br>

                                <span class="text-danger">*</span> Agar ap k pass referral link ya code
                                dene wala koi nahi hai to payment na karein.</br>

                                <span class="text-danger">*</span> Kisi aise bandy ko talash kariye jis
                                ka referral code use kar k ap account bana saky.</br>

                                <span class="text-success">Thank You</span>
                            </div>
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
        <!-- Site Footer - Start
      ================================================== -->
        @include('layouts.student.footer')
        <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Framework - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/bootstrap-dropdown-ml-hack.js') }}"></script>

    <!-- animation - jquery include -->
    <script src="{{ asset('studens-asset/assets/js/cursor.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/tilt.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/parallax-scroll.js') }}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/slick.min.js') }}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/magnific-popup.min.js') }}"></script>

    <!-- Counter Up - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('studens-asset/assets/js/counterup.min.js') }}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{ asset('studens-asset/assets/js/countdown.js') }}"></script>

    <!-- Vanilla Calendar - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/vanilla-calendar.min.js') }}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{ asset('studens-asset/assets/js/main.js') }}"></script>

</body>

</html>
