<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ asset('assets/images/skillsider_logo.png') }}"
                class="h-50px app-sidebar-logo-default">

            <img alt="Logo" src="{{ asset('assets/images/skillsider_icon.png') }}" style="margin: 0px -10px;"
                class="h-50px app-sidebar-logo-minimize">
        </a>
        <!--end::Logo image-->

        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate active"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-black-left-line fs-3 rotate-180"><span class="path1"></span><span
                    class="path2"></span></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true" style="height: 446px;">
                <div class="menu-item ">
                <!--begin::Menu-->
                @if (Auth::user()->role == 1)
                        <!--begin:Menu link-->
                        <a href="{{ route('std.index') }}">
                            <span class="menu-link ">
                                <span class="menu-icon">
                                    <i class="fa  fa-home"></i>
                                </span>
                                <span class="menu-title text-light">Home</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <!--<a href="{{ Route('admin.dashboard') }}">-->
                        <!--    <span class="menu-link">-->
                        <!--        <span class="menu-icon">-->
                        <!--            <i class="fa fa-dashboard"></i>-->
                        <!--        </span>-->
                        <!--        <span class="menu-title">Dashboard</span>-->
                        <!--    </span>-->
                        <!--</a>-->
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ route('students.management.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </span>
                                <span class="menu-title">Students Management</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <a href="{{ route('upgrade.request.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </span>
                                <span class="menu-title">Upgrade Request</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--end:Menu link-->
                        <a href="{{ route('notifications.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-file-pen"></i>
                                </span>
                                <span class="menu-title">Notification</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ route('packages.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-regular fa-square-check"></i>
                                </span>
                                <span class="menu-title">Packages Management</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ route('courses.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-file-pen"></i>
                                </span>
                                <span class="menu-title">Courses Management</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ route('videos.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-stamp"></i>
                                </span>
                                <span class="menu-title">Video Management</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--end:Menu link-->
                        <a href="{{ route('payment.admin.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Skillsider Payment Method</span>
                            </span>
                        </a>
                        <a href="{{ route('payment.request.withdrawal') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Request Withdraw </span>
                            </span>
                        </a>
                        <a href="{{ route('payment.paid.withdraw') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Paid Withdraw</span>
                            </span>
                        </a>
                        <a href="{{ route('coupons.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-ticket" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Coupen Management</span>
                            </span>
                        </a>
                        <a href="{{ route('rank.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-ticket" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Rank Management</span>
                            </span>
                        </a>
                        <a href="{{ route('review.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="menu-title">Review Management</span>
                            </span>
                        </a>
                        <a href="{{ route('team.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Skillsider Team</span>
                            </span>
                        </a>
                        <a href="{{ route('admin.claim-rewards.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Claim Reward Management</span>
                            </span>
                        </a>
                        <a href="{{ route('earning-rewards.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Reward Management</span>
                            </span>
                        </a>
                        <a href="{{ route('questions.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Questions Management</span>
                            </span>
                        </a>
                        <!--begin:Menu link-->
                        <a href="{{ route('dashboard.images.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-stamp"></i>
                                </span>
                                <span class="menu-title">Dashboard Images</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ route('about.video') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-stamp"></i>
                                </span>
                                <span class="menu-title">About Video</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <a href="{{ route('faq.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">FAQ'S</span>
                            </span>
                        </a>
                        <a href="{{ route('std.earning') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>

                                </span>
                                <span class="menu-title">Unrequested Earning</span>
                            </span>
                        </a>
                        <a href="{{ route('std.total.earning') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Total Earning</span>
                            </span>
                        </a>
                        <a href="{{ route('faq_affiliate_videos.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">FAQ'S & Affiliate Video</span>
                            </span>
                        </a>
                        <a href="{{ Auth::user()->role == 1 ? route('admin.index') : route('users.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="menu-title">Profile</span>
                            </span>
                        </a>

                        <a href="{{ route('market_tools.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-cog"></i>
                                </span>
                                <span class="menu-title ">Marketing Tools Management</span>
                            </span>
                        </a>
                        <a href="{{ route('blogs.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa  fa-home"></i>
                                </span>
                                <span class="menu-title ">Blog Management</span>
                            </span>
                        </a>
                        <a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger py-2 px-4 ms-4 mt-3" type="submit"><i
                                        class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                            </form>
                        </a>
                    @elseif(Auth::user()->role == 2)
                        <!--begin:Menu link-->
                        <a href="{{ route('students.management.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </span>
                                <span class="menu-title">Students Management</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <a href="{{ route('upgrade.request.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </span>
                                <span class="menu-title">Upgrade Request</span>
                            </span>
                        </a>
                        <a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger py-2 px-4 ms-4 mt-3" type="submit"><i
                                        class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                            </form>
                        </a>
                    @elseif(Auth::user()->role == 3)
                        <!--begin:Menu link-->
                        <!--begin:Menu link-->
                        <a href="{{ Route('admin.dashboard') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-dashboard"></i>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </span>
                        </a>
                        <!--end:Menu link-->

                        <a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger py-2 px-4 ms-4 mt-3" type="submit"><i
                                        class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                            </form>
                        </a>
                    @elseif(Auth::user()->role == 4)
                        <!--begin:Menu link-->
                        <a href="{{ route('payment.request.withdrawal') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Request Withdraw </span>
                            </span>
                        </a>
                        <a href="{{ route('payment.paid.withdraw') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </span>
                                <span class="menu-title">Paid Withdraw</span>
                            </span>
                        </a>
                        <!--end:Menu link-->

                        <a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger py-2 px-4 ms-4 mt-3" type="submit"><i
                                        class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                            </form>
                        </a>
                    @else
                        <a href="{{ route('std.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/clean-house.png') }}" alt=""
                                        width="23px">
                                </span>
                                <span class="menu-title">Home</span>
                            </span>
                        </a>
                        <a href="{{ Route('student.dashboard') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/dashboard.png') }}" alt=""
                                        width="18px">
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </span>
                        </a>
                        <!--begin:Menu link-->
                        @php
                            $courseId = Auth::user()->package_id ? Auth::user()->package_id : 1;
                        @endphp
                        <a href="{{ route('student.single_package_course', ['id' => $courseId]) }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/training.png') }}" alt=""
                                        width="20px">
                                </span>
                                <span class="menu-title">My Courses</span>
                            </span>
                        </a>
                        <a href="{{ route('students.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/team.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">My Affiliates</span>
                            </span>
                        </a>
                        <a href="{{ route('generate.link') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="fas fa-link"></i>
                                </span>
                                <span class="menu-title">Link Generator</span>
                            </span>
                        </a>
                        <!--end:Menu link-->
                        <a href="{{ Route('leaderboard') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/award-badge.png') }}" alt=""
                                        width="25px">
                                </span>
                                <span class="menu-title">Leaderboard</span>
                            </span>
                        </a>
                        <a href="{{ route('student.payments') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/bank.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">Bank Details</span>
                            </span>
                        </a>
                        <a href="{{ Route('earnings.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/money-withdraw.png') }}" alt=""
                                        width="20px">
                                </span>
                                <span class="menu-title">Withdrawals</span>
                            </span>
                        </a>
                        <a href="{{ Route('community') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/social.png') }}" alt="" width="23px">
                                </span>
                                <span class="menu-title">Community</span>
                            </span>
                        </a>
                        <a href="{{ route('market_tools.index_std') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/digital-marketing.png') }}" alt=""
                                        width="22px">
                                </span>
                                <span class="menu-title ">Resources</span>
                            </span>
                        </a>
                        <a href="{{ Route('tests.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/certificate.png') }}" alt=""
                                        width="20px">
                                </span>
                                <span class="menu-title">Certificates</span>
                            </span>
                        </a>
                        <a href="{{ Route('affiliate.training') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/video.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">Trainings</span>
                            </span>
                        </a>
                        <a href="{{ route('users.coupon.code') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/coupon.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">Discounts</span>
                            </span>
                        </a>
                        <a href="{{ route('earning-rewards.std.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/giftbox.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">Rewards</span>
                            </span>
                        </a>
                        <a href="{{ route('users.package.upgrade.form') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/upgrade.png') }}" alt="" width="20px">
                                </span>
                                <span class="menu-title">Upgrade</span>
                            </span>
                        </a>


                        <a
                            href="{{ Auth::user()->role == 1 ? route('users.index') : route('student-profile.index') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/user.png') }}" alt="" width="18px">
                                </span>
                                <span class="menu-title">Profile</span>
                            </span>
                        </a>
                        <a href="{{ Route('faq') }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <img src="{{ asset('sidebaricon/conversation.png') }}" alt=""
                                        width="20px">
                                </span>
                                <span class="menu-title">FAQs</span>
                            </span>
                        </a>

                        {{-- <a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn  py-2 px-4 ms-4 mt-3 btn-dark" type="submit"><i
                                        class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                            </form>
                        </a> --}}
                    @endif
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

    <!--end::Footer-->
</div>
