@extends('layouts.admin.master')

@section('admin')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    {{-- <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Students Management</h1> --}}
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Dashboard
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Single student</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card  mb-2">
                    <div class="card-header cursor-pointer w-100 text-center">
                        <h1 class="d-block m-auto"> <span> 
                             <span class="menu-icon">
                            <i class="fas fa-link"></i>
                        </span>Link Generator</span></h1>

                    </div>
                </div>
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            {{-- <h3 class="fw-bold m-0">Profile Details</h3> --}}
                        </div>
                        <!--end::Card title-->
                        <!--begin::Action-->
                        <a href="{{ route('students.management.index') }}"
                            class="btn btn-sm text-light btn-primary align-self-center">Back</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <div class="row mb-5">
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label for="payment_link" class="form-label">Official Payment Link </label>
                                    <input type="text" class="form-control" id="payment_link" readonly
                                        placeholder="{{ route('paymennt.link') }}" value="{{ route('paymennt.link') }}">
                                </div>
                            </div>
                            <div class="col-md-4   ">
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <button class="btn btn-primary w-100 " onclick="copyPaymentLink()">Copy Payment Link</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="referral_code" class="form-label">Referral code</label>
                                    <input type="text" class="form-control" id="referral_code" readonly
                                        value="{{ Auth::user()->referral_code }}">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <button class="btn btn-primary w-100" onclick="copyReferralCode()">Copy Referral Code</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 ">
                            <!-- Package Selection -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="packageSelect" class="form-label">Select Package</label>
                                    <select class="form-control" id="packageSelect" onchange="showPackageInput()">
                                        <option value="">Select a Package</option>
                                        <option value="0">All Packages</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->package_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Hidden Input for Package Link -->
                            <div class="col-md-4 " id="packageInputDiv">
                                <div class="form-group">
                                    <label for="packageInput" class="form-label">Referral Link</label>
                                    <input type="text" class="form-control" id="packageInput" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="packageInput" class="form-label"></label>
                                    <button class="btn btn-primary w-100 " onclick="copyLink()">Copy Referral Link</button>
                                </div>
                            </div>
                        </div>

                        <hr class="text-mute mt-5">

                        <div class="row mb-6 cursor-pointer">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="community_link" class="form-label">Community Links</label>
                                    <input type="text" class="form-control" id="community_link" readonly 
                                        value="{{ route('community') }}">
                                </div>
                            </div>
                        
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <button class="btn btn-primary w-100" onclick="copyCommunityLink()">Copy Community Links</button>
                                </div>
                            </div>
                        </div>
                        
               

                       
                      
                     
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->


    @push('custom-scripts')
        <!-- Include SweetAlert2 (If not already included in your project) -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function copyCommunityLink() {
                var communityInput = document.getElementById("community_link");
        
                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.value = communityInput.value;
                document.body.appendChild(tempInput);
        
                // Select and copy text
                tempInput.select();
                tempInput.setSelectionRange(0, 99999);
                document.execCommand("copy");
        
                // Remove temporary input element
                document.body.removeChild(tempInput);
        
                // SweetAlert Toast Notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Community link copied!',
                    text: communityInput.value,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        </script>
        
        <script>
            function copyPaymentLink() {
                var paymentInput = document.getElementById("payment_link");

                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.value = paymentInput.value;
                document.body.appendChild(tempInput);

                // Select and copy text
                tempInput.select();
                tempInput.setSelectionRange(0, 99999);
                document.execCommand("copy");

                // Remove temporary input element
                document.body.removeChild(tempInput);

                // SweetAlert Toast Notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Payment link copied!',
                    text: paymentInput.value,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        </script>
        <script>
            function copyReferralCode() {
                var referralInput = document.getElementById("referral_code");

                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.value = referralInput.value;
                document.body.appendChild(tempInput);

                // Select and copy text
                tempInput.select();
                tempInput.setSelectionRange(0, 99999);
                document.execCommand("copy");

                // Remove temporary input element
                document.body.removeChild(tempInput);

                // SweetAlert Toast Notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Referral code copied!',
                    text: referralInput.value,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        </script>


        <script>
            document.getElementById("copyButton").addEventListener("click", function() {
                var paymentInput = document.getElementById("kt_clipboard_2");

                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.value = paymentInput.value;
                document.body.appendChild(tempInput);

                // Select and copy text
                tempInput.select();
                tempInput.setSelectionRange(0, 99999);
                document.execCommand("copy");

                // Remove temporary input element
                document.body.removeChild(tempInput);

                // SweetAlert Toast Notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Payment link copied!',
                    text: paymentInput.value,
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>

        <script>
            function copyreferral_code() {
                var referralInput = document.getElementById("referral_code");

                // Select the text inside the input field
                referralInput.select();
                referralInput.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the input field
                document.execCommand("copy");

                // SweetAlert Toast Notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Referral code copied: "' + referralInput.value,
                    text: input.value,
                    showConfirmButton: false,
                    timer: 3000
                });

            }
        </script>

        <!-- JavaScript to Handle Package Selection and Copy Link -->
        <script>
            var baseUrl = "{{ config('app.url') }}"; // Get base URL from .env
            var referral_code = "{{ Auth::user()->referral_code }}"; // Get base URL from .env

            function showPackageInput() {
                let select = document.getElementById("packageSelect");
                let inputDiv = document.getElementById("packageInputDiv");
                let input = document.getElementById("packageInput");

                if (select.value) {
                    inputDiv.style.display = "block";
                    input.value = baseUrl + "register-by/" + referral_code + '/' + select.value; // Generate dynamic link
                } else {
                    inputDiv.style.display = "none";
                    input.value = "";
                }
            }

            function copyLink() {
                let input = document.getElementById("packageInput");
                if (input.value) {
                    navigator.clipboard.writeText(input.value);

                    // SweetAlert Toast Notification
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Link copied successfully!',
                        text: input.value,
                        showConfirmButton: false,
                        timer: 3000
                    });

                } else {
                    // SweetAlert Error Notification
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'Please select a package first!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            }
        </script>
    @endpush
@endsection
