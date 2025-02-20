@extends('layouts.student.master')

@section('main')
    <section class="section-new-course" id="section-new-course">
        <div class="container">
            <div class="section-text">
                <p class="mb-2 text-center sm-text-size">
                    {{-- Unlock Your Full Potential with Our --}}
                </p>
            </div>
            <div class="section-header ">
                <div class="section-sub-head">
                    <h2 class="section-heading text-center">Legal Proofs
                    </h2>
                </div>
            </div>

            <div class="course-feature">
                <div id="course-feature-box">
                    <img src="{{ asset('studens-asset/assets/img/SKILLSIDER.jpg') }}" alt=""
                    class="courses-certificate-img">

                </div>
            </div>
            <div class="course-feature">
                <div id="course-feature-box">
                    <img src="{{ asset('studens-asset/assets/img/SKILLSIDER1.jpg') }}" alt=""
                    class="courses-certificate-img">

                </div>
            </div>
        </div>
    </section>
    </main>
  
@endsection
