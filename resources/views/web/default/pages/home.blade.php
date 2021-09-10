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

    @if(!empty($bestRateWebinars) and !$bestRateWebinars->isEmpty())
        {{-- <section class="home-sections container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.best_rates') }}</h2>
                    <p class="section-hint">{{ trans('home.best_rates_hint') }}</p>
                </div>

                <a href="/classes?sort=best_rates" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
            </div>

            <div class="mt-10 position-relative">
                <div class="swiper-container best-rates-webinars-swiper px-12">
                    <div class="swiper-wrapper py-20">
                        @foreach($bestRateWebinars as $bestRateWebinar)
                            <div class="swiper-slide">
                                @include('web.default.includes.webinar.grid-card',['webinar' => $bestRateWebinar])
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination best-rates-webinars-swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($trendCategories) and !$trendCategories->isEmpty())
        {{-- <section class="home-sections home-sections-swiper container">
            <h2 class="section-title">{{ trans('home.trending_categories') }}</h2>
            <p class="section-hint">{{ trans('home.trending_categories_hint') }}</p>

            <div class="row mt-40">

                @foreach($trendCategories as $trend)
                    <div class="col-6 col-md-3 col-lg-2 mt-20 mt-md-0">
                        <a href="{{ $trend->category->getUrl() }}">
                            <div class="trending-card d-flex flex-column align-items-center w-100">
                                <div class="trending-image d-flex align-items-center justify-content-center w-100" style="background-color: {{ $trend->color }}">
                                    <div class="icon mb-3">
                                        <img src="{{ $trend->getIcon() }}" width="10" class="img-cover" alt="{{ $trend->category->title }}">
                                    </div>
                                </div>

                                <div class="item-count px-10 px-lg-20 py-5 py-lg-10">{{ $trend->category->webinars_count }} {{ trans('product.course') }}</div>

                                <h3>{{ $trend->category->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section> --}}
    @endif

    {{-- Ads Bannaer --}}
    @if(!empty($advertisingBanners1) and count($advertisingBanners1))
        {{-- <div class="home-sections container">
            <div class="row">
                @foreach($advertisingBanners1 as $banner1)
                    <div class="col-{{ $banner1->size }}">
                        <a href="{{ $banner1->link }}">
                            <img src="{{ $banner1->image }}" class="img-cover rounded-sm" alt="{{ $banner1->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div> --}}
    @endif
    {{-- ./ Ads Bannaer --}}

    @if(!empty($bestSaleWebinars) and !$bestSaleWebinars->isEmpty())
        {{-- <section class="home-sections container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.best_sellers') }}</h2>
                    <p class="section-hint">{{ trans('home.best_sellers_hint') }}</p>
                </div>

                <a href="/classes?sort=bestsellers" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
            </div>

            <div class="mt-10 position-relative">
                <div class="swiper-container best-sales-webinars-swiper px-12">
                    <div class="swiper-wrapper py-20">
                        @foreach($bestSaleWebinars as $bestSaleWebinar)
                            <div class="swiper-slide">
                                @include('web.default.includes.webinar.grid-card',['webinar' => $bestSaleWebinar])
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination best-sales-webinars-swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($hasDiscountWebinars) and !$hasDiscountWebinars->isEmpty())
        {{-- <section class="home-sections container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.discount_classes') }}</h2>
                    <p class="section-hint">{{ trans('home.discount_classes_hint') }}</p>
                </div>

                <a href="/classes?discount=on" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
            </div>

            <div class="mt-10 position-relative">
                <div class="swiper-container has-discount-webinars-swiper px-12">
                    <div class="swiper-wrapper py-20">
                        @foreach($hasDiscountWebinars as $hasDiscountWebinar)
                            <div class="swiper-slide">
                                @include('web.default.includes.webinar.grid-card',['webinar' => $hasDiscountWebinar])
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination has-discount-webinars-swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($freeWebinars) and !$freeWebinars->isEmpty())
        {{-- <section class="home-sections home-sections-swiper container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.free_classes') }}</h2>
                    <p class="section-hint">{{ trans('home.free_classes_hint') }}</p>
                </div>

                <a href="/classes?free=on" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
            </div>

            <div class="mt-10 position-relative">
                <div class="swiper-container free-webinars-swiper px-12">
                    <div class="swiper-wrapper py-20">

                        @foreach($freeWebinars as $freeWebinar)
                            <div class="swiper-slide">
                                @include('web.default.includes.webinar.grid-card',['webinar' => $freeWebinar])
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination free-webinars-swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($testimonials) and !$testimonials->isEmpty())
        {{-- <div class="position-relative testimonials-container">

            <div id="parallax1" class="ltr">
                <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
            </div>

            <section class="container home-sections home-sections-swiper">
                <div class="text-center">
                    <h2 class="section-title">{{ trans('home.testimonials') }}</h2>
                    <p class="section-hint">{{ trans('home.testimonials_hint') }}</p>
                </div>

                <div class="position-relative">
                    <div class="swiper-container testimonials-swiper px-12">
                        <div class="swiper-wrapper">

                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonials-card position-relative py-15 py-lg-30 px-10 px-lg-20 rounded-sm shadow bg-white text-center">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="testimonials-user-avatar">
                                                <img src="{{ $testimonial->user_avatar }}" alt="{{ $testimonial->user_name }}" class="img-cover rounded-circle">
                                            </div>
                                            <h4 class="font-16 font-weight-bold text-secondary mt-30">{{ $testimonial->user_name }}</h4>
                                            <span class="d-block font-14 text-gray">{{ $testimonial->user_bio }}</span>
                                            @include('web.default.includes.webinar.rate',['rate' => $testimonial->rate, 'dontShowRate' => true])
                                        </div>

                                        <p class="mt-25 text-gray font-14">{{ nl2br($testimonial->comment) }}</p>

                                        <div class="bottom-gradient"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination testimonials-swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <div id="parallax2" class="ltr">
                <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
            </div>

            <div id="parallax3" class="ltr">
                <div data-depth="0.8" class="gradient-box bottom-gradient-box"></div>
            </div>
        </div> --}}
    @endif

    @if(!empty($subscribes) and !$subscribes->isEmpty())
        {{-- <div class="position-relative subscribes-container pe-none user-select-none">
            <div id="parallax4" class="ltr">
                <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
            </div>

            <section class="container home-sections home-sections-swiper">
                <div class="text-center">
                    <h2 class="section-title">{{ trans('home.subscribe_now') }}</h2>
                    <p class="section-hint">{{ trans('home.subscribe_now_hint') }}</p>
                </div>

                <div class="position-relative mt-30">
                    <div class="swiper-container subscribes-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            @foreach($subscribes as $subscribe)
                                <div class="swiper-slide">
                                    <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
                                        @if($subscribe->is_popular)
                                            <span class="badge badge-primary badge-popular px-15 py-5">{{ trans('panel.popular') }}</span>
                                        @endif

                                        <div class="plan-icon">
                                            <img src="{{ $subscribe->icon }}" class="img-cover" alt="">
                                        </div>

                                        <h3 class="mt-20 font-30 text-secondary">{{ $subscribe->title }}</h3>
                                        <p class="font-weight-500 text-gray mt-10">{{ $subscribe->description }}</p>

                                        <div class="d-flex align-items-start text-primary mt-30">
                                            <span class="font-20 mr-5">$</span>
                                            <span class="font-36 line-height-1">{{ $subscribe->price }}</span>
                                        </div>

                                        <ul class="mt-20 plan-feature">
                                            <li class="mt-10">{{ $subscribe->days }} {{ trans('financial.days_of_subscription') }}</li>
                                            <li class="mt-10">{{ $subscribe->usable_count }} {{ trans('home.downloads') }}</li>
                                        </ul>

                                        @if(auth()->check())
                                            <form action="/panel/financial/pay-subscribes" method="post" class="w-100">
                                                {{ csrf_field() }}
                                                <input name="amount" value="{{ $subscribe->price }}" type="hidden">
                                                <input name="id" value="{{ $subscribe->id }}" type="hidden">
                                                <button type="submit" class="btn btn-primary btn-block mt-50">{{ trans('financial.purchase') }}</button>
                                            </form>
                                        @else
                                            <a href="/login" class="btn btn-primary btn-block mt-50">{{ trans('financial.purchase') }}</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination subscribes-swiper-pagination"></div>
                    </div>

                </div>
            </section>

            <div id="parallax5" class="ltr">
                <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
            </div>

            <div id="parallax6" class="ltr">
                <div data-depth="0.6" class="gradient-box bottom-gradient-box"></div>
            </div>
        </div> --}}
    @endif

    @if(!empty($boxVideoOrImage))
        {{-- <section class="home-sections home-sections-swiper position-relative">
            <div class="home-video-mask"></div>
            <div class="container home-video-container d-flex flex-column align-items-center justify-content-center position-relative" style="background-image: url('{{ $boxVideoOrImage['background'] ?? '' }}')">
                <a href="{{ $boxVideoOrImage['link'] ?? '' }}" class="home-video-play-button d-flex align-items-center justify-content-center position-relative">
                    <i data-feather="play" width="36" height="36" class=""></i>
                </a>

                <div class="mt-50 pt-10 text-center">
                    <h2 class="home-video-title">{{ $boxVideoOrImage['title'] ?? '' }}</h2>
                    <p class="home-video-hint mt-10">{{ $boxVideoOrImage['description'] ?? '' }}</p>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($instructors) and !$instructors->isEmpty())
        {{-- <section class="home-sections container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.instructors') }}</h2>
                    <p class="section-hint">{{ trans('home.instructors_hint') }}</p>
                </div>

                <a href="/instructors" class="btn btn-border-white">{{ trans('home.all_instructors') }}</a>
            </div>

            <div class="position-relative mt-20 ltr">
                <div class="owl-carousel customers-testimonials instructors-swiper-container">

                    @foreach($instructors as $instructor)
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="instructors-card d-flex flex-column align-items-center justify-content-center">
                                    <div class="instructors-card-avatar">
                                        <img src="{{ $instructor->getAvatar() }}" alt="{{ $instructor->full_name }}" class="rounded-circle img-cover">
                                    </div>
                                    <div class="instructors-card-info mt-10 text-center">
                                        <a href="{{ $instructor->getProfileUrl() }}" target="_blank">
                                            <h3 class="font-16 font-weight-bold text-dark-blue">{{ $instructor->full_name }}</h3>
                                        </a>

                                        <p class="font-14 text-gray mt-5">{{ $instructor->bio }}</p>
                                        <div class="stars-card d-flex align-items-center justify-content-center mt-10">
                                            @php
                                                $i = 5;
                                            @endphp
                                            @while(--$i >= 5 - $instructor->rates())
                                                <i data-feather="star" width="20" height="20" class="active"></i>
                                            @endwhile
                                            @while($i-- >= 0)
                                                <i data-feather="star" width="20" height="20" class=""></i>
                                            @endwhile
                                        </div>

                                        @if(!empty($instructor->hasMeeting()))
                                            <a href="{{ $instructor->getProfileUrl() }}?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-15">{{ trans('home.reserve_a_live_class') }}</a>
                                        @else
                                            <a href="{{ $instructor->getProfileUrl() }}" class="btn btn-primary btn-sm rounded-pill mt-15">{{ trans('public.profile') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section> --}}
    @endif

    {{-- Ads Bannaer --}}
    @if(!empty($advertisingBanners2) and count($advertisingBanners2))
        {{-- <div class="home-sections container">
            <div class="row">
                @foreach($advertisingBanners2 as $banner2)
                    <div class="col-{{ $banner2->size }}">
                        <a href="{{ $banner2->link }}">
                            <img src="{{ $banner2->image }}" class="img-cover rounded-sm" alt="{{ $banner2->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div> --}}
    @endif
    {{-- ./ Ads Bannaer --}}

    @if(!empty($organizations) and !$organizations->isEmpty())
        {{-- <section class="home-sections home-sections-swiper container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.organizations') }}</h2>
                    <p class="section-hint">{{ trans('home.organizations_hint') }}</p>
                </div>

                <a href="/organizations" class="btn btn-border-white">{{ trans('home.all_organizations') }}</a>
            </div>

            <div class="position-relative mt-20">
                <div class="swiper-container organization-swiper-container px-12">
                    <div class="swiper-wrapper py-20">

                        @foreach($organizations as $organization)
                            <div class="swiper-slide">
                                <div class="home-organizations-card d-flex flex-column align-items-center justify-content-center">
                                    <div class="home-organizations-avatar">
                                        <img src="{{ $organization->getAvatar() }}" class="img-cover rounded-circle" alt="{{ $organization->full_name }}">
                                    </div>
                                    <a href="{{ $organization->getProfileUrl() }}" class="mt-25 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="home-organizations-title">{{ $organization->full_name }}</h3>
                                        <p class="home-organizations-desc mt-10">{{ $organization->bio }}</p>
                                        <span class="home-organizations-badge badge mt-15">{{ $organization->webinars_count }} {{ trans('webinars.classes') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination organization-swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
    @endif

    @if(!empty($blog) and !$blog->isEmpty())
        {{-- <section class="home-sections container">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="section-title">{{ trans('home.blog') }}</h2>
                    <p class="section-hint">{{ trans('home.blog_hint') }}</p>
                </div>

                <a href="/blog" class="btn btn-border-white">{{ trans('home.all_blog') }}</a>
            </div>

            <div class="row mt-35">

                @foreach($blog as $post)
                    <div class="col-12 col-md-4 col-lg-4 mt-20 mt-lg-0">
                        @include('web.default.blog.grid-list',['post' =>$post])
                    </div>
                @endforeach

            </div>
        </section> --}}
    @endif
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
<script src=" {{ asset('/frontend/assets/js/custom.js') }} "></script>

@endpush
