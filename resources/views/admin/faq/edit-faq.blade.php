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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">FAQ's Management</h1>
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
                        <li class="breadcrumb-item text-muted">FAQ</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit FAQ</li>
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
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xxl-8">
                    <div class="card-body pt-0  pb-0">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold ">Edit FAQ</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="{{ route('faq.index') }}"
                                class="btn btn-sm text-light custom-btn align-self-center">Back</a>
                            <!--end::Action-->

                        </div>

                        <div>
                            <form class="Course_form form w-100  " novalidate="novalidate" id="kt_course_form"
                            method="POST" enctype="multipart/form-data"
                            action="{{ route('faq.update', $faq->id) }}">
                            @csrf
                            @method('PUT')
                            
                                <div class="row pt-6">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="question" class="required form-label">Question</label>
                                            <input type="text" name="question"
                                                class="form-control form-control-solid" value="{{$faq->question }}"
                                                placeholder="Question" />
                                            @error('question')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="answer" class="required form-label">Answer</label>
                                            <textarea type="text" name="answer" class="form-control form-control-solid"
                                                placeholder="Answer" required >{{$faq->answer }}</textarea>
                                            @error('answer')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                </div>

                                <div class="card-header cursor-pointer">
                                    <div class="card-title m-0"></div>
                                    <button type="submit" id="save_btn"
                                        class="btn btn-sm text-light custom-btn align-self-center mb-5 mt-20">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: '{{ session('success') }}',
                icon: 'success'
            });
        </script>
    @endif
@endsection
