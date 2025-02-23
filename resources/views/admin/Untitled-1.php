   <div class="">
                            @if (Auth::user()->profile_photo_path)
                                <img src="{{ asset('profile-image/' . Auth::user()->profile_photo_path) }}"
                                    class="rounded-circle shadow-4-strong mt-3" width="80px" height="80px"
                                    alt="user" style="border: 2px solid rgb(123 212 79); padding: 2px;" />
                            @else
                                <img src="{{ asset('assets/images/defaultprofile.jpg') }}"
                                    class=" rounded-3rounded-circle shadow-4-strong" width="90px" height="90px"
                                    alt="user" style="border: 2px solid #35D7FF; padding: 2px;" />
                            @endif
                        </div>
                        <div class="mt-8 ms-3">
                            <div class="d-flex justify-content-start gx-10">
                                <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                            </div>
                            @if (Auth::user()->role == 0)
                                <div class="d-flex justify-content-start gx-10">
                                    @php
                                        // Define images for each package
                                        $images = [
                                            1 => 'verified_skill_sider.png',
                                            2 => 'employee_of_the_month_skill_sider.png',
                                            3 => 'best_seller_pro_skill_sider.png',
                                            4 => 'diamond_skill_sider.png',
                                        ];
                                        $package = Auth::user()->package; // Get the user's package
$img = $images[$package->id] ?? 'default.png'; // Fallback to 'default.png' if no image is found
                                    @endphp
                                    @if ($package)
                                        <span class="badge badge-lg d-flex align-items-center"
                                            style="background-color:{{ $package->color_code }}; color: {{ $package->text_color_code }}; line-height: 1; border-radius: 10px 1px 10px 1px; 
                                    border-bottom: 3px solid rgba(0, 0, 0, 0.3); border-right: 3px solid rgba(0, 0, 0, 0.3);">
                                            {{-- <img src="{{ asset('sidebaricon/' . $img) }}" alt="" class="me-1" width="20px"> --}}
                                            {{ $package->package_title }}
                                        </span>
                                    @endif
                                </div>
                            @else
                                <div class="d-flex justify-content-start gx-10">
                                    @if (Auth::user()->role == 2)
                                        <span class="badge badge-lg badge-success">Order Admin</span>
                                    @elseif(Auth::user()->role == 3)
                                        <span class="badge badge-lg badge-success">Analytic Admin</span>
                                    @elseif(Auth::user()->role == 4)
                                        <span class="badge badge-lg badge-success">Withdraw Admin</span>
                                    @else
                                        <span class="badge badge-lg badge-success">Super Admin</span>
                                    @endif
                                </div>
                            @endif
                        </div>