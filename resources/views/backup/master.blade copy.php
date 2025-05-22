<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekodus Trails</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Parisienne&display=swap" rel="stylesheet">


    @yield('styles')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-mountain"></div>
        <p class="mt-3">Ekodus Trails</p>
    </div>

    <!-- Topbar with Address & Phone -->
    <div class="topbar">
        <div class="container">
            <div class="topbar-content">
                <p class="location">
                    <i class="fa fa-location"></i> Sankri, Uttarakhand
                </p>
                <p class="contact">
                    <i class="fa fa-phone"></i> +123 456 7890
                </p>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="d-flex justify-content-between align-items-center bg-light shadow-sm">
        <div class="logo">Ekodus Trails</div>

        <!-- Hamburger Menu (Only Visible on Mobile) -->
        <div class="menu-toggle d-block d-md-none" id="mobileMenuToggle">
            <i class="fa fa-bars"></i>
        </div>

        <nav class="nav-links-container" id="mobileNav">
            <ul class="nav-links d-flex list-unstyled mb-0">
                <li class="px-3"><a href="{{route('home')}}" class="text-decoration-none">Home</a></li>
                <li class="px-3"><a href="{{route('about-us')}}" class="text-decoration-none">About</a></li>
                <li class="px-3"><a href="{{route('our-treks')}}" class="text-decoration-none">Our Treks</a></li>
                <li class="px-3"><a href="{{route('contact-us')}}" class="text-decoration-none">Contact</a></li>
                <li class="px-3"><a href="" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="custom-btn">Enquiry</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">📩 Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="enquiryName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="enquiryName" placeholder="Enter your name" required>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="enquiryEmail" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="enquiryEmail" placeholder="Enter your email" required>
                        </div>

                        <!-- Message Input -->
                        <div class="mb-3">
                            <label for="enquiryMessage" class="form-label">Your Message</label>
                            <textarea class="form-control" id="enquiryMessage" rows="4" placeholder="Type your message" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn custom-submit-btn w-100">🚀 Submit Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="{{route('our-treks')}}">Our Treks</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact-us')}}">Contact</a></li>
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
            &copy; 2025 Ekodus Trails | Adventure Beyond Limits
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js"></script>


    @yield('scripts')

    <script>
        $(document).ready(function() {
            $("#mobileMenuToggle").click(function() {
                $("#mobileNav").toggleClass("show");
            });

            // Close menu when clicking outside
            $(document).click(function(event) {
                if (!$(event.target).closest("#mobileMenuToggle, #mobileNav").length) {
                    $("#mobileNav").removeClass("show");
                }
            });
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4, // Display 4 slides
            spaceBetween: 10, // Adjust spacing between slides
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 4,
                }
            }
        });

        // Main animations file for Ekodus Trails
        document.addEventListener("DOMContentLoaded", () => {
            // Initialize AOS (Animate On Scroll)
            if (typeof AOS !== "undefined") {
                AOS.init({
                    duration: 1000,
                    once: false,
                    mirror: true,
                })
            } else {
                console.warn("AOS is not defined. Make sure the library is included.")
            }

            // Parallax effect for mountain backgrounds
            const parallaxElements = document.querySelectorAll(".parallax-element")

            window.addEventListener("scroll", () => {
                const scrollPosition = window.pageYOffset

                parallaxElements.forEach((element) => {
                    const speed = element.getAttribute("data-speed") || 0.5
                    element.style.transform = `translateY(${scrollPosition * speed}px)`
                })
            })

            // Animated counter for statistics
            const counters = document.querySelectorAll(".counter")
            const speed = 200

            const animateCounters = () => {
                counters.forEach((counter) => {
                    const target = +counter.getAttribute("data-target")
                    const count = +counter.innerText
                    const increment = target / speed

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment)
                        setTimeout(animateCounters, 1)
                    } else {
                        counter.innerText = target
                    }
                })
            }

            // Start counter animation when section is in viewport
            const statsSection = document.querySelector(".stats-section")
            if (statsSection) {
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        animateCounters()
                    }
                })

                observer.observe(statsSection)
            }

            // Animated trail path for trek routes
            const drawTrailPath = () => {
                const paths = document.querySelectorAll(".trail-path path")

                paths.forEach((path) => {
                    const length = path.getTotalLength()

                    // Set up the starting position
                    path.style.strokeDasharray = length
                    path.style.strokeDashoffset = length

                    // Trigger the animation
                    path.getBoundingClientRect() // Force a reflow
                    path.style.transition = "stroke-dashoffset 2s ease-in-out"
                    path.style.strokeDashoffset = "0"
                })
            }

            // Initialize trail path animations
            const trailMaps = document.querySelectorAll(".trail-map")
            if (trailMaps.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        drawTrailPath()
                    }
                })

                trailMaps.forEach((map) => {
                    observer.observe(map)
                })
            }

            // Smooth scroll for navigation links
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function(e) {
                    e.preventDefault()

                    const targetId = this.getAttribute("href")
                    if (targetId === "#") return

                    const targetElement = document.querySelector(targetId)
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: "smooth",
                        })
                    }
                })
            })

            // Trek card hover effects
            const trekCards = document.querySelectorAll(".card-overlay")

            trekCards.forEach((card) => {
                card.addEventListener("mouseenter", function() {
                    this.querySelector(".card-content").classList.add("card-content-hover")
                })

                card.addEventListener("mouseleave", function() {
                    this.querySelector(".card-content").classList.remove("card-content-hover")
                })
            })

            // Animated mountain silhouette
            const mountainSilhouette = document.querySelector(".mountain-silhouette")
            if (mountainSilhouette) {
                window.addEventListener("scroll", () => {
                    const scrollPosition = window.pageYOffset
                    const viewportHeight = window.innerHeight

                    if (scrollPosition > viewportHeight * 0.2) {
                        mountainSilhouette.classList.add("mountain-animate")
                    }
                })
            }

            // Initialize the 3D tilt effect for trek cards
            if (typeof VanillaTilt !== "undefined") {
                VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
                    max: 10,
                    speed: 400,
                    glare: true,
                    "max-glare": 0.3,
                })
            } else {
                console.warn("VanillaTilt is not defined. Make sure the library is included.")
            }

            // Initialize Owl Carousel for testimonials
            if (typeof $ !== "undefined" && typeof $.fn.owlCarousel !== "undefined") {
                $(".owl-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                        },
                    },
                    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                })
            } else {
                console.warn("Owl Carousel or jQuery is not defined. Make sure the library is included.")
            }
        })

        // Preloader animation
        window.addEventListener("load", () => {
            const preloader = document.querySelector(".preloader")
            if (preloader) {
                preloader.classList.add("preloader-finish")
                setTimeout(() => {
                    preloader.style.display = "none"
                }, 1500)
            }
        })
    </script>
</body>

</html>
