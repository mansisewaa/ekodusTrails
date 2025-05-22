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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('styles')


</head>

<body>
    <!-- Topbar with Address & Phone -->
    <div class="topbar">
        <div class="">
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


</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

@yield('scripts')
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


    $(document).ready(function() {

        $('.owl-carousel').owlCarousel({
            mouseDrag: false,
            loop: true,
            margin: 2,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });

        $('.owl-prev').click(function() {
            $active = $('.owl-item .item.show');
            $('.owl-item .item.show').removeClass('show');
            $('.owl-item .item').removeClass('next');
            $('.owl-item .item').removeClass('prev');
            $active.addClass('next');
            if ($active.is('.first')) {
                $('.owl-item .last').addClass('show');
                $('.first').addClass('next');
                $('.owl-item .last').parent().prev().children('.item').addClass('prev');
            } else {
                $active.parent().prev().children('.item').addClass('show');
                if ($active.parent().prev().children('.item').is('.first')) {
                    $('.owl-item .last').addClass('prev');
                } else {
                    $('.owl-item .show').parent().prev().children('.item').addClass('prev');
                }
            }
        });

        $('.owl-next').click(function() {
            $active = $('.owl-item .item.show');
            $('.owl-item .item.show').removeClass('show');
            $('.owl-item .item').removeClass('next');
            $('.owl-item .item').removeClass('prev');
            $active.addClass('prev');
            if ($active.is('.last')) {
                $('.owl-item .first').addClass('show');
                $('.owl-item .first').parent().next().children('.item').addClass('prev');
            } else {
                $active.parent().next().children('.item').addClass('show');
                if ($active.parent().next().children('.item').is('.last')) {
                    $('.owl-item .first').addClass('next');
                } else {
                    $('.owl-item .show').parent().next().children('.item').addClass('next');
                }
            }
        });

    });


</script>
<script>
    $(document).ready(function () {
        $("#mobileMenuToggle").click(function () {
            $("#mobileNav").toggleClass("show");
        });

        // Close menu when clicking outside
        $(document).click(function (event) {
            if (!$(event.target).closest("#mobileMenuToggle, #mobileNav").length) {
                $("#mobileNav").removeClass("show");
            }
        });
    });
</script>

</html>
