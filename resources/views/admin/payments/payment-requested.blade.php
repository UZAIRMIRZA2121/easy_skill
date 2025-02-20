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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Payment Management</h1>
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
                        <li class="breadcrumb-item text-muted">Confirm Payment Requests</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
             @php
            $totalAmount = $requests->sum('amount');
            @endphp
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xxl-8">
                    <div class="card-body pt-9 pb-0">
                        <div class="header">
                            <h3>Requested withdraws </h3>
                            <hr>
                        </div>
                        <ul class="nav nav-tabs flex-nowrap text-nowrap">
                          
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex  d-flex justify-content-center align-items-center btn-active-light-info"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_5">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold"><h1 class="mt-2 gordita-bold counter-value  text-success fw-bold" data-kt-countup="true"
                                            data-kt-countup-value=" {{ $totalAmount }}"
                                            data-kt-countup-prefix="Rs " style="font-size: 20px;font-weight: 800!important;">0</h1></span>
                                    </span>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="modal fade" id="modal01" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Receipt</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="img01" src="" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            
                            <div class="tab-pane fade show active" id="kt_vtab_pane_5" role="tabpanel">
                                <table id="kt_datatable_dom_positioning1"
                                    class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                            <th>Id</th>
                                            <th>Student Name</th>
                                            <th>Email</th>
                                            <th>Bank</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Amount</th>
                                            <th>Receipt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($requests as $request)
                                        @php
                                            $user_bank = App\Models\Skillsider_payment_method::where('user_id','=', $request->user->id)->first();
                                        @endphp
                                        <tr>
                                            <td>{{ $request->id }}</td>
                                            <td>{{ $request->user->first_name }}-{{ $request->user->last_name }}</td>
                                            <td>{{ $request->user->email }}</td>
                                            <td>{{ $user_bank->bank }}</td>
                                            <td>{{ $user_bank->account_name }}</td>
                                            <td>{{ $user_bank->account_number }}</td>
                                            <td>{{ $request->amount }}</td>
                                            <form class="package_form form w-100" novalidate="novalidate" id="kt_edit_form" enctype="multipart/form-data" action="{{ route('transection.update', $request->user_id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                @method('PUT')
                                                <td>
                                                    <input type="file" name="image" class="form-control form-control-solid" accept="image/png, image/jpeg, image/jpg" placeholder="">
                                                </td>
                                                <td>
                                                    <button type="submit" id="save_btn" class="btn btn-sm text-light btn-primary align-self-center">Send</button>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

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

    @push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: '{{ session('success') }}',
                icon: 'success'
            });
        </script>
    @endif
        <script>
            function onClick(element) {
                var modal = document.getElementById("modal01");
                var img = document.getElementById("img01");
                img.src = element.src;
                modal.style.display = "block";

                // Add code here to close the modal when desired.
            }

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
            $("#kt_datatable_dom_positioning1").DataTable({
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
        </script>
    @endpush
@endsection
