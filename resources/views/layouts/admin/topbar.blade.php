<style>
    /* Initial CSS to set visibility to visible */
    .app-navbar {
        visibility: visible;
        transition: visibility 1s ease-in-out;
    }

    /* Class to hide the navbar */
    .app-navbar-hidden {
        visibility: hidden;
        transform: translateY(-100%);
    }

    .notification-dropdown {
        z-index: 1050;
        border-radius: 0.25rem;
        max-height: 300px;
        overflow-y: auto;
    }

    .notification-dropdown-mobile {
        z-index: 999;
        border-radius: 0.25rem;
        max-height: 300px;
        overflow-y: auto;
    }
    
</style>
@php
    $courseId = Auth::user()->package_id ? Auth::user()->package_id : 1;
@endphp
<!--begin::Header-->
<div id="kt_app_header" class="app-header bg-white sticky-top">
    <!--begin::Header container-->
    <div class="w-100 d-none d-lg-flex m-auto justify-content-center" id="">
        <!-- Transparent Buttons -->
        <a href="{{ route('std.index') }}" class="btn btn-outline-light">Home</a>
        <a href="{{ route('student.single_package_course', ['id' => $courseId]) }}"
            class="btn btn-outline-light">Courses</a>
        <a href="{{ route('about.us') }}" class="btn btn-outline-light">About Us</a>
        <a href="{{ route('contact.us') }}" class="btn btn-outline-light">Contact</a>
        <a href="{{ route('blog') }}" class="btn btn-outline-light">Blog</a>
        <!--end::User menu-->
        <!-- Bell Icon at the end -->

        <!-- ... (other navbar content) ... -->
    </div>
    @if (Auth::user()->role == 0)

        <div class="d-none d-lg-flex me-3 justify-content-between position-relative">
            <!-- Bell Icon with Notification Dropdown -->
            <a href="javascript:void(0);" id="notification-toggle"
                class="d-lg-flex m-auto btn btn-outline-light justify-content-end position-relative">

                @php
                    $unreadNotifications = Auth::user()->unreadNotifications; // Get unread notifications for the logged-in user

                    $unreadCount = $unreadNotifications->count(); // Count unread notifications
                    $notifications = App\Models\Notification::whereHas('notificationUsers', function ($query) {
                        $query->where('user_id', Auth::id());
                    })
                        ->with([
                            'notificationUsers' => function ($query) {
                                $query->where('user_id', Auth::id());
                            },
                        ])
                        ->orderBy('created_at', 'desc')
                        ->get();

                @endphp


                @if ($unreadCount > 0)
                    <i class="fa fa-bell " aria-hidden="true" style="font-size: 25px;color: #071437;">
                        <span class="badge position-absolute top-0  rounded-circle"
                            style="font-size: 14px; padding: 3px 7px; background-color: #f8b634; transform: translate(50%, 0%) !important">
                            {{ $unreadCount }}
                        </span>
                    </i>
                @else
                    <i class="fa fa-bell " aria-hidden="true" style="font-size: 25px; color: #4a219c;"></i>
                @endif
            </a>

            <!-- Notification Dropdown -->
            <div id="notification-dropdown"
                class="notification-dropdown d-none bg-white shadow rounded position-absolute top-100 end-0 mt-2 p-5"
                style="width: 500px;">
                <h3 class="text-dark border-bottom pb-2">Notifications</h3>
                <ul class="list-unstyled mb-0">
                    @php
                        $new_notification = null;
                    @endphp
                    @forelse($notifications as $notification)
                        @foreach ($notification->notificationUsers as $notificationUser)
                            @php
                                $new_notification = $notificationUser->is_read;

                            @endphp
                        @endforeach
                        @if ($notificationUser->user_id == Auth::id())
                            <li class="mb-5">
                                <a href="{{ route('notification.show', $notification->id) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <!-- Title -->
                                        <div>
                                            <span class="fw-bold d-block h5">
                                                @if (!$new_notification)
                                                    <!-- Red dot for unread notification -->
                                                    {{-- <span class="badge bg-danger rounded-circle"
                                                style="width: 5px; height: 5px; display: inline-block;"></span> --}}
                                                @else
                                                    {{-- <span class="badge bg-success rounded-circle"
                                            style="width: 5px; height: 5px; display: inline-block;"></span> --}}
                                                @endif
                                                {{ $notification->title ?? 'New Notification' }}

                                            </span>
                                            <!-- Message -->
                                            <span class="text-muted d-block">
                                                {{ \Illuminate\Support\Str::limit($notification->message, 50, '...') }}
                                            </span>
                                        </div>
                                        <!-- Timestamp -->
                                        <small
                                            class="text-muted ms-3">{{ $notification->created_at->diffForHumans() }}</small>
                                    </div>
                                </a>
                            </li>
                        @endif
                    @empty
                        <li class="text-muted text-center">No new notifications</li>
                    @endforelse
                </ul>

            </div>


            <!-- Hidden Form to Mark Notifications as Read -->
            <form id="mark-as-read-form" action="{{ route('std.all.notifications') }}" method="POST"
                style="display: none;">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            </form>
        </div>

        <script>
            // Function to toggle the visibility of the navbar
            function toggleNavbarVisibility() {
                const navbar = document.getElementById('appNavbar');
                if (window.scrollY > 50) { // Adjust the scroll threshold as needed
                    navbar.classList.add('app-navbar-hidden');
                } else {
                    navbar.classList.remove('app-navbar-hidden');
                }
            }

            // Attach the scroll event listener
            window.addEventListener('scroll', toggleNavbarVisibility);
        </script>

    @endif


    <div class="bg-white d-lg-none">
        <!--begin::Logo image-->
        <a href="{{ route('dashboard') }}" class="text-dark">
            <img alt="Logo" src="{{ asset('assets/images/skillsider_logo.png') }}"
                class=" app-sidebar-logo-default  mt-3" />
        </a>
    </div>
    <div class="d-block d-lg-none d-flex align-items-center justify-content-end m-auto me-5" title="Show sidebar menu">
        @if (Auth::user()->role == 0)
            <div class=" d-lg-flex   position-relative">

                
                <!-- Bell Icon with Notification Dropdown -->
                <a href="javascript:void(0);" id="notification-toggle-mobile"
                    class="d-lg-flex m-auto btn btn-outline-light justify-content-end position-relative">

                    @php
                        $unreadNotifications = Auth::user()->unreadNotifications; // Get unread notifications for the logged-in user

                        $unreadCount = $unreadNotifications->count(); // Count unread notifications
                        $notifications = App\Models\Notification::whereHas('notificationUsers', function ($query) {
                            $query->where('user_id', Auth::id());
                        })
                            ->with([
                                'notificationUsers' => function ($query) {
                                    $query->where('user_id', Auth::id());
                                },
                            ])
                            ->orderBy('created_at', 'desc')
                            ->get();

                    @endphp

                    @if ($unreadCount > 0)
                        <i class="fa fa-bell " aria-hidden="true" style="font-size: 25px; color: #000;">
                            <span class="badge position-absolute top-0  translate-middle-x rounded-circle"
                                style="font-size: 14px; padding: 3px 7px; background-color: #f8b634; transform: translate(-15%, 15%) !important">
                                {{ $unreadCount }}
                            </span>
                        </i>
                    @else
                        <i class="fa fa-bell " aria-hidden="true" style="font-size: 25px; color: #000;"></i>
                    @endif
                </a>

                <!-- Notification Dropdown -->
                <div id="notification-dropdown-mobile"
                    class="notification-dropdown-mobile d-none bg-white shadow rounded position-absolute top-100 end-0 mt-2 p-3"
                    style="width:300px; z-index:99999">
                    <h3 class="text-dark border-bottom pb-2">Notifications</h3>
                    <ul class="list-unstyled mb-0">
                        @php
                            $new_notification = null;
                        @endphp
                        @forelse($notifications as $notification)
                            @foreach ($notification->notificationUsers as $notificationUser)
                                @php
                                    $new_notification = $notificationUser->is_read;

                                @endphp
                            @endforeach
                            <li class="mb-5">
                                <a href="{{ route('notification.show', $notification->id) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <!-- Title -->
                                        <div>
                                            <span class="fw-bold d-block h5">
                                                @if (!$new_notification)
                                                    <!-- Red dot for unread notification -->
                                                    {{-- <span class="badge bg-danger rounded-circle"
                                                style="width: 5px; height: 5px; display: inline-block;"></span> --}}
                                                @else
                                                    {{-- <span class="badge bg-success rounded-circle"
                                            style="width: 5px; height: 5px; display: inline-block;"></span> --}}
                                                @endif
                                                {{ $notification->title ?? 'New Notification' }}

                                            </span>
                                            <!-- Message -->
                                            <span class="text-muted d-block">
                                                {{ \Illuminate\Support\Str::limit($notification->message, 30, '...') }}
                                            </span>
                                        </div>
                                        <!-- Timestamp -->
                                        <small
                                            class="text-muted ms-3">{{ $notification->created_at->diffForHumans() }}</small>
                                    </div>
                                </a>
                            </li>

                        @empty
                            <li class="text-muted text-center">No new notifications</li>
                        @endforelse
                    </ul>

                </div>


                <!-- Hidden Form to Mark Notifications as Read -->
                <form id="mark-as-read-form" action="{{ route('std.all.notifications') }}" method="POST"
                    style="display: none;">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                </form>
            </div>

            <script>
                // Function to toggle the visibility of the navbar
                function toggleNavbarVisibility() {
                    const navbar = document.getElementById('appNavbar');
                    if (window.scrollY > 50) { // Adjust the scroll threshold as needed
                        navbar.classList.add('app-navbar-hidden');
                    } else {
                        navbar.classList.remove('app-navbar-hidden');
                    }
                }

                // Attach the scroll event listener
                window.addEventListener('scroll', toggleNavbarVisibility);
            </script>

        @endif


        <div class="app-navbar-item mx-2 me-md-4 d-block m-auto" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img src="{{ asset('profile-image/' . Auth::user()->profile_photo_path) }}" class="rounded-circle"
                    alt="user">
            </div>
    
    
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true" style="">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px ">
                            <img alt="Logo" src="{{ asset('profile-image/' . Auth::user()->profile_photo_path) }}">
                        </div>
                        <!--end::Avatar-->
    
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                {{ Auth::user()->first_name }} <span
                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ Auth::user()->package->package_title }}</span>
                            </div>
    
                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                {{ Auth::user()->email }} </a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
    
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
    
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ Auth::user()->role == 1 ? route('users.index') : route('student-profile.index') }}"
                        class="menu-link px-5">
                        My Profile
                    </a>
                </div>
                <!--end::Menu item-->
    
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('student.single_package_course', ['id' => $courseId]) }}" class="menu-link px-5">
                        My Courses
                    </a>
                </div>
                <!--end::Menu item-->
    
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ Route('tests.index') }}" class="menu-link px-5">
                        Certificate
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('users.package.upgrade.form') }}" class="menu-link px-5">
                        Upgrade Plan
                    </a>
                </div>
                <!--end::Menu item-->
    
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn  py-2 px-4 ms-4 mt-3 btn-dark" type="submit"><i class="fa fa-power-off"
                                aria-hidden="true"></i> Logout</button>
                    </form>
    
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
    
            <!--end::Menu wrapper-->
        </div>
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_sidebar_mobile_toggle">
            <ion-icon class="icon-mobile-nav" id="bar-icon" name="menu" style=" color: #000 !important;">
            </ion-icon>
        </div>
    </div>
    <style>
        .symbol img {
            width: 35px;
            height: 35px;
            object-fit: cover;
        }
    </style>
   
    <!--end::Header container-->
</div>
<script>
    // Toggle Notification Dropdown Visibility
    document.getElementById('notification-toggle-mobile').addEventListener('click', function() {
        const dropdown = document.getElementById('notification-dropdown-mobile');
        dropdown.classList.toggle('d-none');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('notification-dropdown-mobile');
        const toggle = document.getElementById('notification-toggle-mobile');

        if (!dropdown.contains(event.target) && !toggle.contains(event.target)) {
            dropdown.classList.add('d-none');
        }
    });
</script>
<script>
    // Toggle Notification Dropdown Visibility
    document.getElementById('notification-toggle').addEventListener('click', function() {
        const dropdown = document.getElementById('notification-dropdown');
        dropdown.classList.toggle('d-none');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('notification-dropdown');
        const toggle = document.getElementById('notification-toggle');

        if (!dropdown.contains(event.target) && !toggle.contains(event.target)) {
            dropdown.classList.add('d-none');
        }
    });
</script>
