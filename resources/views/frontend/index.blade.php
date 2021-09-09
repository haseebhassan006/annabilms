@extends('frontend.layouts.master')
@section('content')
<!-- Banner -->
<section class="banner">
    <div class="container">
        <div class="row">
            <h2>Welcome to <br><strong> An-Nabi Institute</strong></h2>
            <a href="#" class="join-btn">JOIN COURSES</a>
        </div>
    </div>
</section>
<!-- Banner -->
<!-- section-2 -->
<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>An-Nabi Institute</h2>
                <p>We Bring Qualified Educators In Your Space You May Learn At Your Pace.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Educational Programs</h3>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-languages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-languages" type="button" role="tab"
                            aria-controls="v-pills-languages" aria-selected="true">Languages</button>
                        <button class="nav-link" id="v-pills-Sciences-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Sciences" type="button" role="tab" aria-controls="v-pills-Sciences"
                            aria-selected="false">Sciences</button>
                        <button class="nav-link" id="v-pills-Arts-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Arts" type="button" role="tab" aria-controls="v-pills-Arts"
                            aria-selected="false">Arts</button>
                        <button class="nav-link" id="v-pills-English-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-English" type="button" role="tab" aria-controls="v-pills-English"
                            aria-selected="false">English</button>
                        <button class="nav-link" id="v-pills-Religion-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Religion" type="button" role="tab" aria-controls="v-pills-Religion"
                            aria-selected="false">Religion</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-languages" role="tabpanel"
                            aria-labelledby="v-pills-languages-tab">
                            <img src="/frontend/assets/images/Untitled-2.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Sciences" role="tabpanel"
                            aria-labelledby="v-pills-Sciences-tab">
                            <img src="/frontend/assets/images/Untitled-2.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Arts" role="tabpanel" aria-labelledby="v-pills-Arts-tab">
                            <img src="/frontend/assets/images/Untitled-2.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-English" role="tabpanel"
                            aria-labelledby="v-pills-English-tab">
                            <img src="/frontend/assets/images/Untitled-2.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Religion" role="tabpanel"
                            aria-labelledby="v-pills-Religion-tab">
                            <img src="/frontend/assets/images/Untitled-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section-2 -->
<!-- section-3 -->
<section class="section-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Students</h3>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-grade-1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-grade-1" type="button" role="tab" aria-controls="v-pills-grade-1"
                            aria-selected="true">Grade 01 - 03</button>
                        <button class="nav-link" id="v-pills-grade-2-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-grade-2" type="button" role="tab" aria-controls="v-pills-grade-2"
                            aria-selected="false">Grade 04 - 06</button>
                        <button class="nav-link" id="v-pills-grade-3-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-grade-3" type="button" role="tab" aria-controls="v-pills-grade-3"
                            aria-selected="false">Grade 07 - 08</button>
                        <button class="nav-link" id="v-pills-grade-4-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-grade-4" type="button" role="tab" aria-controls="v-pills-grade-4"
                            aria-selected="false">Grade 09 - 10</button>
                        <button class="nav-link" id="v-pills-grade-5-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-grade-5" type="button" role="tab" aria-controls="v-pills-grade-5"
                            aria-selected="false">Grade 11 - 15</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-grade-1" role="tabpanel"
                            aria-labelledby="v-pills-grade-1-tab">
                            <img src="/frontend/assets/images/Untitled-4.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-2" role="tabpanel"
                            aria-labelledby="v-pills-grade-2-tab">
                            <img src="/frontend/assets/images/Untitled-4.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-3" role="tabpanel"
                            aria-labelledby="v-pills-grade-3-tab">
                            <img src="/frontend/assets/images/Untitled-4.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-4" role="tabpanel"
                            aria-labelledby="v-pills-grade-4-tab">
                            <img src="/frontend/assets/images/Untitled-4.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-5" role="tabpanel"
                            aria-labelledby="v-pills-grade-5-tab">
                            <img src="/frontend/assets/images/Untitled-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- section-3 -->
<!-- section-4 -->
<section class="section-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Teachers</h3>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-name-1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-name-1" type="button" role="tab" aria-controls="v-pills-name-1"
                            aria-selected="true">Name 01</button>
                        <button class="nav-link" id="v-pills-name-2-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-name-2" type="button" role="tab" aria-controls="v-pills-name-2"
                            aria-selected="false">Name 02</button>
                        <button class="nav-link" id="v-pills-name-3-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-name-3" type="button" role="tab" aria-controls="v-pills-name-3"
                            aria-selected="false">Name 03</button>
                        <button class="nav-link" id="v-pills-name-4-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-name-4" type="button" role="tab" aria-controls="v-pills-name-4"
                            aria-selected="false">Name 04</button>
                        <button class="nav-link" id="v-pills-name-5-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-name-5" type="button" role="tab" aria-controls="v-pills-name-5"
                            aria-selected="false">Name 05</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-name-1" role="tabpanel"
                            aria-labelledby="v-pills-name-1-tab">
                            <img src="/frontend/assets/images/Untitled-5.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-name-2" role="tabpanel"
                            aria-labelledby="v-pills-name-2-tab">
                            <img src="/frontend/assets/images/Untitled-5.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-name-3" role="tabpanel"
                            aria-labelledby="v-pills-name-3-tab">
                            <img src="/frontend/assets/images/Untitled-5.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-name-4" role="tabpanel"
                            aria-labelledby="v-pills-name-4-tab">
                            <img src="/frontend/assets/images/Untitled-5.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-name-5" role="tabpanel"
                            aria-labelledby="v-pills-name-5-tab">
                            <img src="/frontend/assets/images/Untitled-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section-4 -->
<!-- learning-section -->
<section class="learning-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Explore an Unparalled Array Of Online Programs - At Home Learning</h2>
            </div>
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="time-1-tab" data-bs-toggle="tab" data-bs-target="#time-1"
                            type="button" role="tab" aria-controls="time-1" aria-selected="true">Timeless
                            Archive</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="enroll-2-tab" data-bs-toggle="tab" data-bs-target="#enroll-2"
                            type="button" role="tab" aria-controls="enroll-2" aria-selected="false">Enrollees</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="upcoming-3-tab" data-bs-toggle="tab" data-bs-target="#upcoming-3"
                            type="button" role="tab" aria-controls="upcoming-3" aria-selected="false">Upcoming
                            Event</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="time-1" role="tabpanel" aria-labelledby="time-1-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="slider1">
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic2.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic2.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="enroll-2" role="tabpanel" aria-labelledby="enroll-2-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="slider3">
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic2.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic2.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="upcoming-3" role="tabpanel"
                        aria-labelledby="upcoming-3-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="slider2">
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic2.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="{{asset('/frontend/assets/images/books-pic2.png')}}" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="box">
                                            <img src="/frontend/assets/images/books-pic3.png" alt="">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. </p>
                                            <div class="box-in">
                                                <h5>12700</h5>
                                                <h6>12700</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- learning-section -->
<!-- courses-section -->
<section class="courses-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our Courses</h2>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text </h5>
            </div>
        </div>
        @if ($webinars)
        <div class="row">
            @foreach ($webinars as $webinar )
            <div class="col-lg-4">
                <div class="box-in">
                    <img src="{{ $webinar->thumbnail }}" alt="">
                    <h3>Lorem Ipsum Dummy</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="box-in">
                    <img src="/frontend/assets/images/courses-pic1.jpg" alt="">
                    <h3>Lorem Ipsum Dummy</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box-in">
                    <img src="/frontend/assets/images/courses-pic1.jpg" alt="">
                    <h3>Lorem Ipsum Dummy</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <a href="#" class="read-btn">Read More</a>
                </div>
            </div> --}}
        </div>
        @else
        <div class="btn btn-danger">No Courses Available!</div>
        @endif
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="#" class="demo-btn">FREE DEMO</a>
            </div>
        </div>
    </div>
</section>
<!-- courses-section -->
<!-- short-section -->
<section class="short-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Short Course</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text</p>
            </div>
            <div class="col-lg-3">
                <div class="short-2">
                    <a href="#">Free Demo</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- short-section -->
<!-- video-section -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Pre-Recorded & Live Video Lectures </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text </p>
                <!-- <button id="playme" onclick="revealVideo('video','youtube')">
		<span class="img-box1"><img src="/frontend/assets/images/play-video.jpg" class="img-fluid" alt=""></span>
		</button> -->
                <button id="playme" onclick="revealVideo('video','youtube')">
                    <span class="img-box1">
                        <img src="/frontend/assets/images/play-video.jpg" class="img-fluid play-icon" alt="">
                        <img src="/frontend/assets/images/play-video.jpg" class="img-fluid " alt="">
                    </span>
                </button>
                <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
                    <div class="lightbox-container">
                        <div class="lightbox-content">
                            <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                                Close | ✕
                            </button>
                            <div class="video-container">
                                <iframe id="youtube" width="960" height="540"
                                    src="https://www.youtube.com/embed/Vqfy4ScRXFQ" frameborder="0"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- video-section -->
<!-- contact-section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Consent Form for Kids to Appear in Educational Videos</h2>
                <form>
                    <input type="name" class="form-control name-1" placeholder="Name">
                    <input type="email" class="form-control email-1" placeholder="Email">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact-section -->
<!-- newsletter-section -->
<section class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Subscribe Our Newsletter</h2>
                <p>Join us in developing educational communities that meets the unique needs of the WHOLE child!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <h3>E-mail address</h3>
                <input type="email" class="form-control email-2" placeholder="Loremipsum@gmail.com">
            </div>
            <div class="col-lg-3">
                <h3>Password</h3>
                <input type="email" class="form-control email-2" placeholder="*******">
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- newsletter-section -->
@endsection
