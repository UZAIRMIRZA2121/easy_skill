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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Team Management</h1>
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
                        <li class="breadcrumb-item text-muted">Team</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Add Team</li>
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
                                <h3 class="fw-bold ">Add Team</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="{{ route('team.index') }}"
                                class="btn btn-sm text-light custom-btn align-self-center">Back</a>
                            <!--end::Action-->

                        </div>

                        <div>
                            <form class="package_form form w-100" novalidate="novalidate" id="kt_sign_up_form"
                                method="POST" enctype="multipart/form-data" action="{{ route('team.store') }}">
                                @csrf
                                <div class="row pt-6">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="name" class="required form-label">Name</label>
                                            <input type="text" name="name"
                                                class="form-control form-control-solid" value="{{ old('name') }}"
                                                placeholder="Name" />
                                            @error('name')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="title" class="required form-label">Title</label>
                                            <input type="text" name="title"
                                                class="form-control form-control-solid" value="{{ old('title') }}"
                                                placeholder="Title" />
                                            @error('title')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="description" class="required form-label">Description</label>
                                            <input type="text" name="description"
                                                class="form-control form-control-solid" value="{{ old('description') }}"
                                                placeholder="Description" />
                                            @error('description')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-10">
                                            <label for="image" class="required form-label">Image</label>
                                            <input type="file" name="image"
                                                class="form-control form-control-solid" value="{{ old('image') }}"
                                               />
                                            @error('image')
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
