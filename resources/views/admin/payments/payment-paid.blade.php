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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Payment
                        Management</h1>
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
     
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xxl-8">
                    <div class="card-body pt-9 pb-0">
                        <div class="header">
                            <h3>Recent Payments Sent</h3>
                            <hr>
                            <form method="GET" action="{{ route('payments.paid-payment') }}">
                                <div class="input-group mb-3">
                                    <input type="text" name="email" class="form-control" placeholder="Search by Email"
                                        value="{{ request('email') }}">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                <a href="{{ route('payment.paid.withdraw') }}"  class="btn btn-primary">
                                         
                                            Reset
                                       
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="" role="tabpanel">
                                <table id="kt_datatable_dom_positio"
                                    class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                            <th>Id</th>
                                            <th>Member Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Sponser Name</th>
                                            <th>Plan</th>
                                            <th>Amount</th>
                                            <th>Registration Date</th>
                                            <th>Receipt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($paids as $earning)
                                            @if ($earning->user)
                                                {{-- Check if $earning->user exists --}}
                                                <tr>
                                                    <td>{{ $earning->id }}</td>
                                                    <td>{{ $earning->user->first_name }} {{ $earning->user->last_name }}
                                                    </td>
                                                    <td>{{ $earning->user->phone }}</td>
                                                    <td>{{ $earning->user->email }}</td>
                                                    @php
                                                        $referral_by = $earning->user->referral_by;
                                                        $referral_name = App\Models\User::where(
                                                            'referral_code',
                                                            $referral_by,
                                                        )->first();
                                                    @endphp

                                                    <td>{{ $referral_name->first_name ?? '' }}</td>
                                                    <td>{{ $earning->user->package->package_title }}</td>
                                                    <td>{{ $earning->amount }}</td>
                                                    <td>{{ $earning->user->created_at }}</td>
                                                    <td>
                                                        <div class="w3-row-padding">
                                                            <div class="w3-container w3-third" data-toggle="modal"
                                                                data-target="#modal01">
                                                                <img src="{{ asset('receipt-image/' . $earning->receipt) }}"
                                                                    alt="" width="80" style="cursor: pointer"
                                                                    onclick="onClick(this)" class="w3-hover-opacity">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Pagination Links -->
<!-- Laravel Pagination with Bootstrap Styling -->
<div class="d-flex justify-content-center mt-3">
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paids->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paids->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($paids->links()->elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paids->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paids->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paids->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
            @endif
        </ul>
    </nav>
</div>

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

        <script></script>
    @endpush
@endsection
