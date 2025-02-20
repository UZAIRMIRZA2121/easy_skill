@extends('layouts.student.master')
@section('main')
@php
$courses = App\Models\Courses::where('course_type', 0)
                             ->orWhere('course_type', 2)
                             ->get();


@endphp

    <main>
    <div class="slider-starter">
        <div class="container">
            <section class="">
                <!-- Bootstrap Grid Container -->
                <div class="row gy-4">
                    @foreach($courses->sortBy('course_seq') as $course)
                    <!-- Blog Card -->
                    <div class="col-12 col-sm-6 col-lg-4 ">
                        <div class="free_course  p-1" style="
                        border: solid 2px #000 -6.5;
                        background-color: #f4f4f4;
                        border-radius: 10px; ">
                            <div class="overflow p-1" style="background-color: #fff;  border-radius: 10px;">
                                <a href=""><img src="{{ asset('course-image/' . $course->image) }}"  style="width: 100%"
                                    class="blog-image img-fluid d-block m-auto" alt="Fee course Image"></a>
                            </div>
                            <div class="">
                                <h5 class="my-3 m-auto d-block " style="width: 95%">
                                    {{ $course->course_title }}
                                </h5>
                                <div class="px-2">
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
                                {{-- <p class="courses-description mb-3 " style="font-size:17px">{{ Str::limit($course->desc, 85) }}</p> --}}
                                <a href="{{ route('free.course.video', ['id' => $course->id]) }}">
                                    <button class="main__btn rounded-3 m-auto w-md-50 w-sm-100 d-block mt-3" style="width: 95%">
                                        <span>Start Course</span>
                                        <i class='main-button-arrow fa fa-arrow-right ml-2'></i>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    </main>

    @endsection
