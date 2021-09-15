@extends(getTemplate().'.layouts.app')

@push('styles_top')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://netteria.net/myscript/jquery/html5videopopup/css/videopopup.css" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

@section('content')

<section class="banner">
    <div class="container">
        <div class="row">
            <h2>Welcome to <br><strong> An-Nabi Institute</strong></h2>
            <a href="#" class="join-btn">JOIN COURSES</a>
        </div>
    </div>
</section>
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
                        <button class="nav-link" id="   v-pills-Religion-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Religion" type="button" role="tab" aria-controls="v-pills-Religion"
                            aria-selected="false">Religion</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-languages" role="tabpanel"
                            aria-labelledby="v-pills-languages-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-2.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Sciences" role="tabpanel"
                            aria-labelledby="v-pills-Sciences-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-2.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Arts" role="tabpanel" aria-labelledby="v-pills-Arts-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-2.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-English" role="tabpanel"
                            aria-labelledby="v-pills-English-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-2.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-Religion" role="tabpanel"
                            aria-labelledby="v-pills-Religion-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <img src="{{asset('/frontend/assets/images/Untitled-4.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-2" role="tabpanel"
                            aria-labelledby="v-pills-grade-2-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-4.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-3" role="tabpanel"
                            aria-labelledby="v-pills-grade-3-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-4.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-4" role="tabpanel"
                            aria-labelledby="v-pills-grade-4-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-4.png')}}" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-grade-5" role="tabpanel"
                            aria-labelledby="v-pills-grade-5-tab">
                            <img src="{{asset('/frontend/assets/images/Untitled-4.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="home-sections container mt-0 ">
    <section class="courses-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Our Courses</h2>
                        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text </h5>
                    </div>
                </div>

                <div class="row">
            @foreach($courses as $course)
                        <div class="col-lg-4">
                            <div class="box-in">
                                <img src="{{ $course->thumbnail }}" class="img-fluid" alt="">
                                <h3><a href="{{ $course->getUrl() }}">{{ $course->title }}</a></h3>
                               <p> {!! Str::limit($course->description, 100) !!} </p>
                                <a href="#" class="read-btn">Read More</a>
                            </div>
                        </div>
            @endforeach


                </div>


                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="demo-btn">FREE DEMO</a>
                    </div>
                </div>
            </div>
</section>
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

</section>
<section class="home-sections home-sections-swiper container">
    <section class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Pre-Recorded & Live Video Lectures </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text </p>
                    <!-- <button id="playme" onclick="revealVideo('video','youtube')">
            <span class="img-box1"><img src="{{asset('/frontend/assets/images/play-video.jpg')}}" class="img-fluid" alt=""></span>
            </button> -->
                    <button id="playme" onclick="revealVideo('video','youtube')">
                        <span class="img-box1">
                            <img src="{{asset('/frontend/assets/images/play-video.jpg')}}" class="img-fluid play-icon" alt="">
                            <img src="{{asset('/frontend/assets/images/play-video.jpg')}}" class="img-fluid " alt="">
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

</section>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Consent Form for Kids to Appear in Educational Videos</h2>
                @if(!empty(session()->has('msg')))
                <div class="alert alert-success my-25 d-flex align-items-center">
                    <i data-feather="check-square" width="50" height="50" class="mr-2"></i>
                    {{ session()->get('msg') }}
                </div>
            @endif
                <form action="/contact/store" method="post" class="mt-20">
                    {{ csrf_field() }}
                    <input type="name" name="name" value="{{ old('name') }}" class="form-control @error('name')  is-invalid @enderror name-1" placeholder="Name" >
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email')  is-invalid @enderror email-1" placeholder="Email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone')  is-invalid @enderror name-1" placeholder="Phone">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @error('subject')  is-invalid @enderror email-1" placeholder="Subject">
                    @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <textarea class="form-control @error('message')  is-invalid @enderror" rows="3" placeholder="Message" name="message">{{ old('message') }}</textarea>
                    @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

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




@endsection
@push('scripts_bottom')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>
<script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
<script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
<script src="/assets/default/vendors/parallax/parallax.min.js"></script>
<script src="/assets/default/js/parts/home.min.js"></script>
<script src="{{ asset('/frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
<script src="{{ asset('/frontend/assets/js/custom.js') }} "></script>

@endpush
