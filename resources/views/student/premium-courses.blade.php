@extends('layouts.student.master')
@section('main')
    @php
        $courses = App\Models\Courses::all();
    @endphp
    <style>
        /* Style for the play button */
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 15px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 50%;
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: float 1.5s ease-in-out infinite;
        }

        /* Optional: Hover effect */
        .play-btn:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Floating animation */
        @keyframes float {

            0%,
            100% {
                transform: translate(-50%, -50%);
            }

            50% {
                transform: translate(-50%, -53%);
            }
        }

        /* Ensure the parent container is positioned relative */
        .overflow {
            position: relative;
            display: inline-block;
        }
    </style>
    <main>
        <div class="slider-starter">
            <div class="container">
                <section class="">
                    <!-- Bootstrap Grid Container -->
                    <div class="row g-4  ">
                        @foreach ($courses->sortBy('course_seq') as $course)
                            <!-- course Card -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="course-card " style="background-color: #f4f4f4;border-radius: 10px">

                                    <div class="overflow position-relative">
                                        <img src="{{ asset('course-image/' . $course->image) }}" style="border-radius: 5px"
                                            class="blog-image img-fluid d-block m-auto" alt="{{ $course->image }}">

                                        @php
                                            $demoVideo = $course->demoVideos->first(); // Fetch the first demo video from the collection
                                        @endphp
                                        @if ($demoVideo)
                                            <button class="play-btn" data-video-link="{{ $demoVideo->video_link }}">
                                                <i class="fas fa-play"></i>
                                            </button>
                                        @else
                                            <button class="play-btn" data-video-link="#">
                                                <i class="fas fa-play"></i>
                                            </button>
                                        @endif

                                    </div>



                                    <div class="p-3">
                                        <h6>{{ $course->course_title }}</h6>
                                    </div>
                                    <div class="p-3">
                                        @if ($course->team)
                                            <div class="blog-meta d-flex align-items-center gap-2 mb-2">
                                                <img src="{{ asset('team-image/' . $course->team->image) }}" alt="Author"
                                                    width="30px" height="30px" class="rounded-circle"
                                                    alt="{{ $course->image }}">

                                                <p class="m-0"><span
                                                        style="font-weight:600;">By{{ $course->team->name }}</span></p>
                                            </div>
                                        @else
                                            <div class="blog-meta d-flex align-items-center gap-2 mb-2">
                                                <img src="{{ asset('team-image/1735750291.png') }}" alt="Author"
                                                    width="30px" height="30px" class="rounded-circle"
                                                    alt="{{ $course->image }}">

                                                <p class="m-0"><span style="font-weight:600;">By Amir Jafry</span></p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>

    </main>
    <style>
     
    </style>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #4d3185">
                    <h5 class="modal-title text-warning" id="exampleModalLabel"><b>Must Watch This Video</b></h5>
                    <button type="button" id="close-model-btn" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="videoFrameabout" src=""
                            title="YouTube video player" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the play buttons
            const playButtons = document.querySelectorAll('.play-btn');

            // Add event listener for each play button
            playButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Get the video link from the data attribute
                    const videoLink = button.getAttribute('data-video-link');

                    // Change the iframe source to the video link
                    const iframe = document.getElementById('videoFrameabout');
                    iframe.src = "https://www.youtube.com/embed/" + videoLink;

                    // Show the modal
                    $('#myModal').modal('show');
                });
            });

            // Close the modal and reset iframe source when the modal is closed
            $('#myModal').on('hidden.bs.modal', function() {
                const iframe = document.getElementById('videoFrameabout');
                iframe.src = ""; // Reset the iframe source when the modal is closed
            });
        });
    </script>
@endsection
