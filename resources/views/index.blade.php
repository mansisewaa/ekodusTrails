<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekodus Trails</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
</head>

<body>
    <!-- Topbar with Address & Phone -->
    <div class="topbar d-flex justify-content-between align-items-center p-2">
        <p><i class="fa fa-location"></i> 123 Street, City, Country | &nbsp;&nbsp;<i class="fa fa-phone"></i> +123 456 7890 </p>
        <!-- <p><a href="" class="btn btn-danger btn-sm"></a> </p> -->

    </div>

    <!-- Navbar -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-light shadow-sm">
        <div class="logo  fs-4">Ekodus Trails</div>
        <nav>
            <ul class="nav-links d-flex list-unstyled mb-0">
                <li class="px-3"><a href="#" class=" text-decoration-none">Home</a></li>
                <li class="px-3"><a href="#" class=" text-decoration-none">About</a></li>
                <li class="px-3"><a href="#" class=" text-decoration-none">Our Treks</a></li>
                <li class="px-3"><a href="#" class=" text-decoration-none">Gallery</a></li>
                <li class="px-3"><a href="#" class=" text-decoration-none">Contact</a></li>
            </ul>
        </nav>
        <!-- <div>
            <img src="https://via.placeholder.com/50" alt="Profile" class="rounded-circle">
        </div> -->
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <section class="position-relative w-100 hero-container d-flex align-items-center justify-content-center bg-dark">
            <!-- Background Image Carousel -->
            <div id="heroCarousel" class="carousel slide position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/bg4.jpg')}}" class="d-block w-100 h-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/bg2.jpg')}}" class="d-block w-100 h-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/bg3.jpg')}}" class="d-block w-100 h-100" alt="Slide 3">
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
                <h1 class="display-4 fw-bold">Your Next Great Adventure Starts Here</h1>
                <p class="lead">
                    <i>Discover breathtaking landscapes, thrilling experiences, and unforgettable moments.</i>
                </p>
                <a href="#" class="btn btn-primary btn-lg">Book Now</a>
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
                            <h3>Hampta Pass</h3>
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
                    <a href="#" class="learn-more-btn">Learn More</a>
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
                <div class="info-text col-lg-6 text-light">
                    <h2 class="fw-bold mb-3">Experience the of Garhwal Treks with Me</h2>
                    <p class="lead">
                        I’m <strong>Ram Chauhan</strong>, a resident of Gangar Village nestled in the valley on the way to <strong>Har Ki Dun Trek</strong>.
                        I have grown with these mountains, rivers, and trees. With me, you beat the ordinary visiting places that others miss,
                        staying with locals, and enjoying authentic Pahari cuisine in their homes.
                    </p>
                    <p>
                        My deep knowledge of plants, wildlife, local traditions, and mountain life will leave you enriched in many ways.
                        Having led treks for top adventure companies, I understand the challenges and risks that come with mountain trekking.
                        Whether you're a group, a family, or an individual, I ensure your trek is tailored to your interests, age, and health conditions.
                    </p>
                    <p>
                        I am committed to sustainable trekking keeping it safe and ecological for trekkers, locals, and the environment.
                        Let me invite you to be my guest and explore the <strong> Himalayas like a true Pahadi</strong>.
                    </p>
                    <h1 class="mt-4 fst-italic">~ Ram</h1>
                </div>

            </div>
        </div>
    </section>




    <!-- Floating Action Buttons -->
    <div class="floating-buttons">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/1234567890" target="_blank" class="whatsapp-btn">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
        </a>

        <!-- Call Button -->
        <a href="tel:+1234567890" class="call-btn">
            <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Call">
        </a>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <!-- Address & Contact -->
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Adventure St, Kathmandu, Nepal</p>
                    <p><i class="fas fa-phone-alt"></i> +977-123-4567890</p>
                    <p><i class="fas fa-envelope"></i> info@adventuretreks.com</p>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Treks</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Popular Treks -->
                <div class="footer-section">
                    <h4>Popular Treks</h4>
                    <ul>
                        <li><a href="#">Everest Base Camp</a></li>
                        <li><a href="#">Annapurna Circuit</a></li>
                        <li><a href="#">Langtang Valley</a></li>
                        <li><a href="#">Manaslu Circuit</a></li>
                        <li><a href="#">Mardi Himal Trek</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2024 Adventure Treks | All Rights Reserved</p>
        </div>
    </footer>


</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("scroll", function() {
            let topbar = document.querySelector(".topbar");
            let navbar = document.querySelector("header");

            if (window.scrollY > 50) {
                document.body.classList.add("scrolled");
            } else {
                document.body.classList.remove("scrolled");
            }
        });
    });
</script>

<script>
    var myCarousel = new bootstrap.Carousel(document.querySelector('#heroCarousel'), {
        interval: 3000,
        pause: "hover"
    });
</script>

</html>
