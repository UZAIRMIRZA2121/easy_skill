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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Rank Management</h1>
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
                        <li class="breadcrumb-item text-muted">Review Details</li>
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
                                <h3 class="fw-bold m-0">Review</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="{{ route('review.create') }}"
                                class="btn btn-sm text-light custom-btn align-self-center">Add Review</a>
                            <!--end::Action-->

                        </div>

                        <table id="kt_datatable_dom_positioning"
                            class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                    <th>Sr.No</th>
                                    <th>Video Id</th>
                                    <th>Video Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @php
                                    $i = 1; 
                                @endphp
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td> {{ $i++ }} </td>
                                        <td>{{$review->video_id}}</td>
                                          <td>
                                            <img src="{{ asset('review_image/' . $review->video_thumbnail) }}" width="150"
                                                alt="">
                                        </td>
                                        <td class="  text-start">
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary btn-sm  menu-dropdown"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-flip="top-end">
                                                Actions

                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4 "
                                                data-kt-menu="true"
                                                style="z-index: 107; position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-78.5px, 229px, 0px);"
                                                data-popper-placement="bottom-end">
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('review.edit', ['id' => $review->id]) }}"
                                                        class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                                        Edit
                                                    </a>
                                                </div>
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <p>
                                                        <a type="button" id="delete-course-{{$review->id }}" class="menu-link px-3">
                                                            Delete
                                                        </a>
                                                    <form id="delete-form-{{ $review->id }}"
                                                        action="{{ route('review.destroy', $review->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    </p>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success') }}',
            icon: 'success'
        });
    </script>
    @endif
    @if(session('error'))
    <script>
        Swal.fire({
            title: 'error',
            text: '{{ session('error') }}',
            icon: 'error'
        });
    </script>
    @endif
    @push('custom-scripts')
        <script>
            $("#kt_datatable_dom_positioning").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });

            /////sweet--alert---///
         
                const deleteButtons = document.querySelectorAll('[id^="delete-course-"]');

deleteButtons.forEach(button => {
    button.addEventListener('click', e => {
        const packageId = button.id.split('-')[2]; // Extract the package ID from the button's ID
        e.preventDefault();

        Swal.fire({
            title: 'Delete Review',
            text: 'Are you sure you want to delete this Review?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6'
        }).then(result => {
            if (result.isConfirmed) {
                const deleteForm = document.getElementById('delete-form-' + packageId);
                deleteForm.submit();
            }
        });
    });
});

        </script>
    @endpush
@endsection
