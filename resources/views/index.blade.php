@extends('layouts.master')
@section('content')
  <div id="loader">
        <div class="loader-content">
            <img src="{{asset('images/logo.png')}}" alt="Logo" />
                <p class="tagline" id="typing"></p>
        </div>
    </div>
<!-- Hero Section -->
<header class="hero d-flex align-items-center justify-content-center text-center text-white">
    <div class="container">
        <h1 class="display-4 fw-bold">Discover Your Next Adventure</h1>
        <p class="lead">Explore breathtaking trails and unforgettable journeys with Exodus Trails</p>
        <a href="{{route('our-treks')}}" class="btn btn-success btn-sm mt-3">View Treks</a>
    </div>
</header>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-mountain me-2 text-success fs-4"></i>
                <span class="logo-font-exodus">Exodus</span><span class="logo-font-trails ms-1">Trails</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="treksDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Treks
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="treksDropdown">
                            <li><a class="dropdown-item" href="#">Mountain Treks</a></li>
                            <li><a class="dropdown-item" href="#">Jungle Treks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Contact</a></li>
                    <li class="nav-item ms-2"><a class="btn btn-success btn-sm" href="#">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav> -->




<!-- Hero Carousel Section -->
<!-- <section class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="images/banner1.jpg" class="d-block w-100" alt="Adventure 1">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                        <h1 class="animated-text">Discover Your Next Adventure</h1>
                        <p class="animated-text">Explore breathtaking trails and unforgettable journeys with Exodus
                            Trails.</p>
                        <a href="#" class="btn btn-success mt-3">View Packages</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="image2.jpg" class="d-block w-100" alt="Adventure 2">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                        <h1 class="animated-text">Explore the Unseen Paths</h1>
                        <p class="animated-text">Step into wild nature with our expertly crafted hiking packages.</p>
                        <a href="#" class="btn btn-success mt-3">View Packages</a>
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section> -->


<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h4 data-target="50" data-suffix="+">0</h4>
                <p>Treks</p>
            </div>
            <div class="col">
                <h4 data-target="10000" data-suffix="+">0</h4>
                <p>Happy Hikers</p>
            </div>
            <div class="col">
                <h4 data-target="12" data-suffix="">0</h4>
                <p>Years Experience</p>
            </div>
            <div class="col">
                <h4 data-target="98" data-suffix="%">0</h4>
                <p>Satisfaction Rate</p>
            </div>
        </div>
    </div>
</section>

<section class="featured-packages py-5 bg-light">


    <div class="container">
        <div class="mb-4">
            <h2 class="fs-1 fw-semibold text-center">Popular Treks</h2>
            <p class="text-muted text-center">Choose from our carefully curated selection of hiking adventures for all experience levels.</p>
        </div>

        <!-- Swiper Container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($treks as $trek)
                <div class="swiper-slide">
                    <div class="card trek-card shadow-sm me-3 bg-white" style="min-width: 280px;">
                        <!-- <div class="card-img-top bg-success-subtle d-flex align-items-center justify-content-center" style="height: 120px;">
                            <i class="bi bi-map-fill fs-1 text-success"></i>
                        </div> -->
                        <img src="{{asset('images/kedarkanthabanner.webp')}}" alt="" style="height: 194px;">
                        <div class="card-body">
                            <div class="text-success mb-2 d-flex align-items-center gap-1 fs-6">
                                <i class="bi bi-geo-alt-fill"></i> <span>{{ $trek['locations']['name'] }}</span>
                            </div>
                            <h5 class="card-title fw-semibold">{{ $trek['name'] }}</h5>
                            <p class="text-muted small">Join this scenic trek for an unforgettable Himalayan adventure.</p>
                            <div class="d-flex justify-content-between text-muted small mb-3">
                                <span><i class="bi bi-calendar3"></i> {{ $trek['duration'] }}</span>
                                <span><i class="bi bi-people-fill"></i> {{ $trek['max_group_size'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-success">₹ {{ $trek['price'] }}</span>
                                <a href="#" class="btn btn-outline-success btn-sm rounded-1">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('our-treks') }}" class="btn btn-outline-success px-4 py-2 shadow-sm">View All</a>
        </div>
    </div>
</section>

<section class="why-choose-us py-5 bg-light">
    <div class="container text-center">
        <h3 class="mb-5 fw-bold">Why Choose Us?</h3>
        <div class="row justify-content-center g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-2 p-4">
                    <i class="bi bi-compass text-success display-4 mb-3"></i>
                    <h6 class="fw-semibold">Certified Local Guides</h6>
                    <p class="">Experience the trails with trained professionals who know every turn.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-2 p-4">
                    <i class="bi bi-globe2 text-success display-4 mb-3"></i>
                    <h6 class="fw-semibold">Eco-Trek Practices</h6>
                    <p class="">Sustainable trekking with minimal impact on Himalayan ecology.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-2 p-4">
                    <i class="bi bi-headset text-success display-4 mb-3"></i>
                    <h6 class="fw-semibold">24/7 Trek Support</h6>
                    <p class="">Round-the-clock assistance before, during, and after your trek.</p>
                </div>
            </div>
        </div>

        <a href="{{ route('about-us') }}" class="btn btn-outline-white mt-5">Learn More</a>
    </div>
</section>



<section class="popular-destinations py-5">

    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fs-1 fw-semibold text-center">Popular Yatra Packages</h2>
            <p class="text-muted fs-5">Explore our best pilgrimage and trekking packages across Uttarakhand.</p>
        </div>

        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                @foreach($yatras as $yatra)
                <div class="swiper-slide">
                    <div class="card text-white border-0 overflow-hidden shadow-sm rounded-3 position-relative">
                        <img src="{{ asset('images/bg.jpg') }}" class="card-img" alt="{{ $yatra['name'] }}">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-3"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h5 class="mb-1">{{ $yatra['name'] }}</h5>
                            <small><i class="bi bi-geo-alt-fill me-1"></i>{{ $yatra['location']['name'] }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{route('our-packages')}}" class="btn btn-outline-success px-4 py-2">
                View All Yatra Packages <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>



<section class="about bg-light">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-6 text-start">
                <h2 class="fs-1 fw-semibold text-center">About Exodus Trails</h2>
                <p class="text-muted text-start">
                    We're a team of passionate hikers and travel enthusiasts dedicated to
                    creating unforgettable outdoor adventures.
                </p>
                <p class="text-muted text-start">
                    Founded in 2010, our mission is to connect people with nature through
                    carefully crafted hiking experiences. We believe that exploring the
                    world's most beautiful landscapes on foot creates deeper connections and
                    lasting memories.
                </p>
                <p class="text-muted text-start">
                    Our expert guides are certified professionals with extensive knowledge of
                    local terrain, culture, and safety protocols. We prioritize sustainable
                    tourism practices and support local communities in all our destinations.
                </p>
                <div class="d-flex justify-content-start gap-2 mt-3">
                    <a href="{{route('about-us')}}" class="btn btn-success btn-sm">Our Story</a>
                    <a href="{{route('team-members')}}" class="btn btn-outline-success btn-sm">Meet The Team</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-lg-6  col-sm-6">
                        <div class="bg-secondary-subtle rounded-3 overflow-hidden" style="height: 180px;">
                            <img src="images/bg.jpg" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-lg-6  col-sm-6">
                        <div class="bg-secondary-subtle rounded-3 overflow-hidden" style="height: 180px;">
                            <img src="images/bg2.jpg" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-lg-6  col-sm-6">
                        <div class="bg-secondary-subtle rounded-3 overflow-hidden" style="height: 180px;">
                            <img src="images/bg3.jpg" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-lg-6  col-sm-6">
                        <div class="bg-secondary-subtle rounded-3 overflow-hidden" style="height: 180px;">
                            <img src="images/bg4.jpg" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- Testimonials -->
<section class="testimonials py-5 bg-light">
    <div class="container text-center">
        <h2 class="fs-1 fw-semibold text-center">What Our Hikers Say</h2>
        <p class="text-muted fs-5">Read about the experiences of adventurers who've explored with us.</p>

        <!-- Swiper Container -->
        <div class="swiper mySwiper mt-4">
            <div class="swiper-wrapper">

                <!-- Testimonial Slide -->
                <div class="swiper-slide h-100 d-flex">
                    <div class="card border-0 shadow-sm  p-4 text-start">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/avatar2.jpeg') }}" class="rounded-circle me-3" alt="Sarah Johnson">
                            <div>
                                <strong>Sarah Johnson</strong><br>
                                <small class="text-muted">United States</small>
                            </div>
                        </div>
                        <div class="text-warning mb-2">
                            ★★★★★
                        </div>
                        <p class="text-muted">
                            "The Swiss Alps tour exceeded all my expectations. Our guide was knowledgeable and
                            passionate, and the scenery was absolutely breathtaking. I'll definitely be booking
                            another trip with Exodus Trails!"
                        </p>
                    </div>
                </div>

                <!-- Repeat other testimonial slides similarly -->
                <div class="swiper-slide h-100 d-flex">
                    <div class="card border-0 shadow-sm p-4 text-start">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/avatar2.jpeg') }}" class="rounded-circle me-3" alt="James Wilson">
                            <div>
                                <strong>James Wilson</strong><br>
                                <small class="text-muted">United Kingdom</small>
                            </div>
                        </div>
                        <div class="text-warning mb-2">
                            ★★★★★
                        </div>
                        <p class="text-muted">
                            "The Inca Trail adventure was the trip of a lifetime. Everything was perfectly
                            organized. Watching the sunrise over Machu Picchu was an experience I'll never forget."
                        </p>
                    </div>
                </div>

                <div class="swiper-slide h-100 d-flex">
                    <div class="card border-0 shadow-sm p-4 text-start">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/avatar2.jpeg') }}" class="rounded-circle me-3" alt="Maria Rodriguez">
                            <div>
                                <strong>Maria Rodriguez</strong><br>
                                <small class="text-muted">Spain</small>
                            </div>
                        </div>
                        <div class="text-warning mb-2">
                            ★★★★☆
                        </div>
                        <p class="text-muted">
                            "Our Himalayan trek was challenging but incredibly rewarding. The views were absolutely
                            worth every step!"
                        </p>
                    </div>
                </div>
                <div class="swiper-slide h-100 d-flex">
                    <div class="card border-0 shadow-sm p-4 text-start">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/avatar2.jpeg') }}" class="rounded-circle me-3" alt="Maria Rodriguez">
                            <div>
                                <strong>Maria Rodriguez</strong><br>
                                <small class="text-muted">Spain</small>
                            </div>
                        </div>
                        <div class="text-warning mb-2">
                            ★★★★☆
                        </div>
                        <p class="text-muted">
                            "Our Himalayan trek was challenging but incredibly rewarding. The views were absolutely
                            worth every step!"
                        </p>
                    </div>
                </div>
            </div>

            <!--
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->

            <!-- Pagination dots -->
            <!-- <div class="swiper-pagination mt-3"></div> -->
        </div>
    </div>
</section>


@php
    $gallery_images = [
        'bg.jpg',
        'bg2.jpg',
        'bg3.jpg',
        'bg4.jpg',
        'bg6.jpg'
    ];
@endphp

<section class="gallery-section py-5">
    <div class="container  text-center">
        <h5 class="mb-4"> Gallery</h5>
        <div class="gallery-scroll-wrapper">
            <div class="gallery-scroll">
                @foreach ($gallery_images as $image)
                <div class="gallery-item">
                    <img src="{{ asset('images/' . $image) }}" alt="Gallery Image">
                </div>
                @endforeach
                    @foreach ($gallery_images as $image)
                    <div class="gallery-item">
                        <img src="{{ asset('images/' . $image) }}" alt="Gallery Image" class="lightbox-trigger" style="cursor:pointer;">
                    </div>
                @endforeach
            </div>
        </div>
         <a href="#" class="btn btn-outline-success mt-5">View All</a>
    </div>
</section>

<!-- Newsletter -->
<section class="adventure text-white">
    <div class="container text-center">
        <h4>Ready for Your Next Adventure?</h4>
        <p> Join us on an unforgettable journey through the world's most breathtaking landscapes.</p>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-white px-4 py-2">
                Browse Yatra
            </a>

            <a href="{{route('booking')}}" class="btn btn-white px-4 py-2">
                Book Now
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
 <script>
        $(document).ready(function () {
            const text = "ADVENTURE BEGINS WITH EVERY STEP";
            let i = 0;
            const speed = 50;

            function typeWriter() {
            if (i < text.length) {
                $("#typing").text($("#typing").text() + text.charAt(i));
                i++;
                setTimeout(typeWriter, speed);
            } else {
                // Wait a bit after finishing typing before fading out
                setTimeout(() => {
                $('#loader').fadeOut(700);
                }, 800);
            }
            }

            typeWriter();
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 4,
            spaceBetween: 15,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
            effect: 'slide',
            speed: 600,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loopAdditionalSlides: 1,
        });
    });
</script>



@endsection
