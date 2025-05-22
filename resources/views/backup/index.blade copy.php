@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="hero">
    <section class="position-relative w-100 hero-container d-flex align-items-center justify-content-center bg-dark">
        <!-- Background Image Carousel -->
        <div id="heroCarousel" class="carousel slide position-absolute top-0 start-0 w-100 " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/bg4.jpg')}}" class="d-block w-100 " alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/bg2.jpg')}}" class="d-block w-100 " alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/bg3.jpg')}}" class="d-block w-100 " alt="Slide 3">
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>

        <!-- Dark Overlay -->
        <div class="overlay"></div>

        <!-- Text Content -->
        <div class="position-relative text-white text-center px-4 hero-text">
            <h1 class="display-4 fw-bold animate-fade-in-1">Your Next Great Adventure Starts Here</h1>
            <p class="lead animate-fade-in-2">
                <i>Discover breathtaking landscapes, thrilling experiences, and unforgettable moments.</i>
            </p>
            <!-- <a href="#" class="btn btn-primary btn-lg animate-fade-in-3">Book Now</a> -->
        </div>
    </section>
</section>


<!-- Card Slider Section -->
<section class="card-slider-section">
    <h2 class="text-center mb-5">Upcoming Popular Treks</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="card-overlay" style="background-image: url('images/brahmatal1.webp');">
                    <div class="card-content">
                        <h3>Brahmatal Trek</h3>
                        <p>5 Days / 4 Nights</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card-overlay" style="background-image: url('images/kedarkanthabanner.webp');">
                    <div class="card-content">
                        <h3>Kedarkantha Trek</h3>
                        <p>5 Days / 4 Nights</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card-overlay" style="background-image: url('images/dayarabugyal.webp');">
                    <div class="card-content">
                        <h3>Dayara Bugyal Trek</h3>
                        <p>7 Days / 6 Nights</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card-overlay" style="background-image: url('images/harkidun2.webp');">
                    <div class="card-content">
                        <h3>Har Ki Dun Trek</h3>
                        <p>6 Days / 5 Nights</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card-overlay" style="background-image: url('images/harkidun.webp');">
                    <div class="card-content">
                        <h3>Hampta Pass Trek</h3>
                        <p>6 Days / 5 Nights</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>


        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination Dots -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>

<!-- About Us Section with Parallax -->
<section id="about-us" class="parallax-section text-white">
    <div class="container">
        <div class="row align-items-right">
            <!-- About Us Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold">About Ekodus Trails</h2>
                <p class="lead">
                    At <strong>Ekodus Trails</strong>, we craft unforgettable trekking experiences that bring you closer to nature and adventure.
                    Our expert guides ensure a safe and thrilling journey through breathtaking landscapes.
                    Whether you're a beginner or an experienced trekker, we have the perfect trek for you. Explore the Himalayas, immerse yourself in local culture,
                    and create lasting memories with us.
                </p>
                <a href="{{route('about-us')}}" class="learn-more-btn">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Image Grid & Text Section -->
<section id="image-text-section" class="image-text-section ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side - Image Grid -->
            <div class="col-lg-6">
                <div class="image-grid">
                    <div class="image-large">
                        <img src="images/bg2.jpg" alt="Trekking Image 2">
                    </div>
                    <div class="image-small">
                        <img src="images/bg.jpg" alt="Trekking Image 1">

                        <img src="images/bg3.jpg" alt="Trekking Image 3">
                        <img src="images/brahmatal1.webp" alt="Trekking Image 4">
                    </div>
                </div>
            </div>

            <!-- Right Side - Text Content -->
            <div class="info-text col-lg-6 text-light" style="font-style: italic;">
                <h2 class="fw-bold mb-3">Discover Garhwal Treks with Me</h2>
                <p class="lead">
                    I’m <strong>Ram Chauhan</strong>, a native of Gangar Village near <strong>Har Ki Dun Trek</strong>.
                    Growing up in these mountains, I offer an experience beyond the ordinary—hidden trails, local stays, and authentic Pahari cuisine.
                </p>
                <p>
                    With deep knowledge of the region’s nature and traditions, plus years of leading treks, I tailor each journey to your needs—be it a solo, family, or group adventure.
                </p>
                <p>
                    My treks are safe, eco-friendly, and enriching for both trekkers and locals.
                    Come, explore the <strong>Himalayas like a true Pahadi</strong>.
                </p>
                <h1 class="mt-4 fst-italic">~ Ram</h1>
            </div>


        </div>
    </div>
</section>

<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Our Services</h2>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/tour-guide.png')}}" alt="Guided Tours" class="service-icon">
                    <h4 class="fw-bold">Guided Treks</h4>
                    <p>Experience breathtaking Himalayan trails with expert local guides ensuring safety and adventure.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/camp.png')}}" alt="Camping" class="service-icon">
                    <h4 class="fw-bold">Camping & Stay</h4>
                    <p>Stay in scenic campsites, cozy homestays, and experience the warmth of Pahadi hospitality.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/cooking.png')}}" alt="Local Cuisine" class="service-icon">
                    <h4 class="fw-bold">Local Cuisine</h4>
                    <p>Enjoy authentic Pahadi meals made with fresh, local ingredients for a true mountain experience.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/bus.png')}}" alt="Transport" class="service-icon">
                    <h4 class="fw-bold">Transport Assistance</h4>
                    <p>Seamless transportation from your arrival to the trek start point for a hassle-free journey.</p>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/hiking-new.png')}}" alt="Custom Trekking Plans" class="service-icon">
                    <h4 class="fw-bold">Custom Trek Plans</h4>
                    <p>Tailor-made treks based on your experience, fitness level, and interests.</p>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <img src="{{asset('icon/training.png')}}" alt="Safety and Training" class="service-icon">
                    <h4 class="fw-bold">Safety & Training</h4>
                    <p>Pre-trek training, gear guidance, and high-altitude safety measures for a smooth adventure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container" style="max-width: 1126px;">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="icon">➤</span> What is the best time for trekking?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        The best time for trekking depends on the region, but generally, pre-monsoon (March to June) and post-monsoon (September to November) offer the best weather and views.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="icon">➤</span> What should I pack for the trek?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Essential trekking items include proper trekking shoes, warm clothes, rain gear, a first aid kit, a flashlight, and sufficient water and snacks.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="icon">➤</span> Is prior trekking experience required?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        No, beginners can start with easy treks. However, basic fitness and endurance training are recommended for a better experience.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="icon">➤</span> Are guides and porters available?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we provide experienced guides and porters to ensure a safe and enjoyable trekking experience.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section">
    <div class="container-fluid px-3 px-sm-5 my-5 text-center">
        <h2 class="mb-5 font-weight-bold">What Our Client Say</h2>
        <div class="owl-carousel owl-theme">
            <div class="item first prev">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/beas6.webp')}}" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">Marielle Haag</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item show">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/beas6.webp')}}" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item next">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/beas6.webp')}}" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">John Paul</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item last">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/beas6.webp')}}" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">William Doe</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item next">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/beas6.webp')}}" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">John Paul</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>s
        </div>
    </div>
</section>
@endsection
