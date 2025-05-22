<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exodus Trails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/newstyles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    @yield('styles')
</head>

<body>
  

    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- <i class="fas fa-mountain me-2 text-success fs-4"></i> -->
                <img src="{{asset('images/logo.png')}}" class="img-fluid" style="width:3rem;margin-right:.3rem;background-color:white;">
                <span class="logo-font-exodus">Exodus</span><span class="logo-font-trails ms-1">Trails</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav flex-column flex-lg-row">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('our-treks')}}">Treks</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('our-packages')}}">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                    <li class="nav-item"><a class="btn btn-success btn-sm ms-lg-2 mt-2 mt-lg-0" href="{{route('booking')}}">Book Now</a></li>

                    @if(Auth::guard('customer')->check())
                    <li class="nav-item dropdown ms-lg-2 mt-2 mt-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="userName">Hello, {{ Auth::guard('customer')->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer py-2 text-white">
        <div class="container">
            <div class="row gy-4" style="padding-top: 3rem;">
                <!-- Branding -->
                <div class="col-md-3">
                    <img src="{{asset('images/logo.png')}}" class="img-fluid">
                    <!-- <h5 class="fw-bold text-start">Exodus Trails</h5> -->
                    <p class="small text-start">
                        Your trusted partner for unforgettable hiking adventures around the world.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3">
                    <h6 class="fw-bold text-start">Quick Links</h6>
                    <ul class="list-unstyled small text-start">
                        <li><a href="#" class=" text-decoration-none">Home</a></li>
                        <li><a href="#" class=" text-decoration-none">Packages</a></li>
                        <li><a href="#" class=" text-decoration-none">Yatra </a></li>
                        <li><a href="#" class=" text-decoration-none">About Us</a></li>
                        <li><a href="#" class=" text-decoration-none">Blog</a></li>
                        <li><a href="#" class=" text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-3">
                    <h6 class="fw-bold text-start">Contact Info</h6>
                    <p class=" small mb-1 text-start">123 Adventure Way</p>
                    <p class=" small mb-1 text-start">Mountain View, CA 94043</p>
                    <p class=" small mb-1 text-start">info@exodustrails.com</p>
                    <p class=" small text-start">+1 (555) 123-4567</p>
                </div>

                <!-- Newsletter -->
                <div class="col-md-3">
                    <h6 class="fw-bold text-start"></h6>
                     <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.025904579885!2d78.0550382752972!3d31.040133674554962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390901e8d268f78d%3A0x41b305857601ecf3!2sSankri%2C%20Uttarakhand%20249128!5e0!3m2!1sen!2sin!4v1682694400200!5m2!1sen!2sin"
                    width="100%"
                    height="200"
                    style="border:0; border-radius: 3px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                    <!-- <p class=" small text-start">
                        Subscribe to get updates on new destinations and special offers.
                    </p> -->
                    <!-- <form class="d-flex">
                        <input type="email" class="form-control me-2 bg-dark text-white border-0" placeholder="Your email">
                        <button class="btn btn-success px-3 fw-semibold">Subscribe</button>
                    </form> -->
                </div>
            </div>

            <!-- Bottom line -->
            <hr class="border-secondary mt-5">
            <p class="text-center small">© 2025 Exodus Trails. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js" integrity="sha512-j12pXc2gXZL/JZw5Mhi6LC7lkiXL0e2h+9ZWpqhniz0DkDrO01VNlBrG3LkPBn6DgG2b8CDjzJT+lxfocsS1Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    @yield('scripts')
   

    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".col h4");

            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";
                const duration = 2000;
                const step = Math.ceil(target / (duration / 30));
                let count = 0;

                const updateCounter = () => {
                    count += step;
                    if (count < target) {
                        counter.textContent = count.toLocaleString();
                        setTimeout(updateCounter, 30);
                    } else {
                        counter.textContent = target.toLocaleString() + suffix;
                    }
                };

                updateCounter();
            });
        });
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>

</html>
