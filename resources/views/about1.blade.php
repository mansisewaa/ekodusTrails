@extends('layouts.master')
@section('styles')
<style>
    .subpage-hero {
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 20px;
    }


    p {
        font-size: 14px !important;
    }

    .story_image {
        position: relative;
        overflow: hidden;
        height: 320px;
        /* Slightly shorter than the text height */
    }

    h4 {
        font-size: 24px;
        font-weight: 700;
    }

    .info {
        margin-top: 4rem;
        min-height: 320px;
        text-align: start;
        /* Match the image height */
    }

    .row.g-5 {
        display: flex;
        align-items: flex-start;
        /* Align top for consistency */
    }

    .col-md-6 {
        display: flex;
        flex-direction: column;
    }

    .col-md-6 .info {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .team p {
        color: #3b7d59;
        font-weight: 600;
    }

    .team h6 {
        margin-top: .5rem;
        font-size: 1.25rem;
        line-height: 1rem;
    }

    .team .team-info {
        color: #808080;
        font-size: 1.2rem;
        font-weight: 200;
    }

    .team-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .values {
        background-color: rgb(6 95 70 / var(--tw-bg-opacity, 1));
        color: white;
    }


    .feature-box {
        background-color: rgb(4 120 87 / var(--tw-bg-opacity, 1));
        border-radius: 6px;
        padding: 20px;
        height: 100%;
        color: white;
        text-align: left;
    }

    .feature-box h3 {
        font-size: 18px;
        /* Adjust h3 size */
        font-weight: bold;
    }

    .feature-box p {
        font-size: 13px;
        /* Adjust paragraph size */
    }

    .row {
        --bs-gutter-x: 1.5rem !important;
        --bs-gutter-y: 1.5rem !important;
    }

    .ready_to_trek {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 0;
        background-color: lightgrey;

    }

    /* Add hover effect for buttons */
    .btn-hover-green {
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-hover-green:hover {
        background-color: #3b7d59;
        /* Green color on hover */
        border-color: #3b7d59;
        /* Border color on hover */
    }

    .ps-3 {
        padding-left: 22rem !important;
        text-align: justify !important;
        line-height: 2rem !important;
    }

    .slogan {
        background-color: #198754;
        padding: 50px 0;
        margin-top: 20px;
        font-style: italic;
        color: whitesmoke;
    }

    @media (max-width: 768px) {
        .story_image {
            height: 200px;
            /* Adjust height for smaller screens */
        }

        .info {
            min-height: 200px;
            text-align: justify;
        }

        .ps-3 {
            padding-left: 0 !important;
            text-align: start !important;
            line-height: 1.5rem !important;
        }

        .team .team-info {
            color: #808080;
            font-size: 1.2rem;
            font-weight: 10;
        }

        .team h6 {
            margin-top: .5rem;
            font-size: 1.25rem;
            line-height: 1rem;
        }

    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2 class="">About Exodus Trails</h2>
    <p class="lead">Authentic Himalayan adventures led by passion, purpose, and experience</p>
</section>

<!-- Our Story & Mission -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6 info">
            <h4 class="">Our Story</h4>
            <!-- <p>Exodus Trails was born from a simple passion: the love of exploring the Himalayas on foot. Founded in 2010 by a group of avid trekkers and outdoor enthusiasts from Uttarakhand, we set out to create trekking experiences that go beyond the ordinary tourist trail.</p> -->
            <p>Exodus Trails was born from Ram’s deep connection to the Himalayas – a place he proudly calls home. With thousands of miles trekked and countless memories made, Ram brings his love for nature, adventure, and local culture into every trail we walk together. For us, trekking isn’t just a journey – it’s a shared experience that connects people to nature and to each other.</p>
            <p>What started as a small operation with just three guides and a handful of treks in Uttarakhand has grown into a trusted adventure company offering carefully crafted hiking experiences across the Indian Himalayas. Despite our growth, we've remained true to our core values: authentic experiences, sustainable practices, and a deep respect for the natural world and local communities.</p>


        </div>
        <div class="col-md-6 story_image">
            <div class="bg-light rounded overflow-hidden">
                <img src="{{ asset('images/bg4.jpg') }}" alt="About Image" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        </div>
        <div class="col-md-6 order-md-2 info">
            <h4 class="">Our Mission</h4>
            <p> At Exodus Trails, our mission is to connect people with the natural world through transformative trekking experiences while preserving the environments and cultures we explore.
            <p>We believe that responsible trekking can be a force for good, creating sustainable livelihoods for local communities while fostering a deeper appreciation for the fragile mountain ecosystems.</p>
            <p>Our treks are designed to minimize environmental impact while maximizing authentic cultural exchanges and personal growth. Through our work, we aim to inspire a new generation of responsible travelers who understand the importance of treading lightly on the earth and supporting the communities that call these magnificent mountains home.
            </p>
        </div>
        <div class="col-md-6 order-md-1 story_image">
            <div class="bg-light rounded overflow-hidden">
                <img src="{{ asset('images/bg.jpg') }}" alt="About Image" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        </div>
    </div>

</div>
<section class="slogan py-5 text-center">
    <div class="container">
        <h3 class="fw-bold">Exodus Trails: Step Into the Heart of the Himalayas.</h3>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg border-light">
                <div class="card-body py-4">
                    <h4 class="text-center">Why Trek with Us?</h4>
                    <p class="text-center">Our treks are carefully crafted to fill each moment with wonder and discovery:</p>
                    <ul class="list-unstyled ps-3">
                        <li>🌄 <strong>Himalayan Sunrises & Sunsets:</strong> Watch the golden glow kiss snow-covered peaks from stunning vantage points.</li>
                        <li>🏔 <strong>Summit Expeditions:</strong> For seasoned adventurers, we guide challenging climbs to iconic Himalayan peaks.</li>
                        <li>❄️ <strong>Glacier Treks:</strong> Explore ancient glaciers and marvel at their raw, icy beauty.</li>
                        <li>🏞 <strong>High-Altitude Lakes:</strong> Discover tranquil, hidden lakes reflecting the majesty of surrounding peaks.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- Meet Our Team -->
<section class="team bg-white py-5 text-center">
    <div class="container">
        <h4 class="fw-bold mb-4">Meet Our Team</h4>
        <div class="d-flex justify-content-center mb-4">

            <p class="team-info">Our experienced guides and support staff are the heart of Exodus Trails.</br> With deep local knowledge and a passion for the mountains, they ensure your journey is safe, educational, and unforgettable.</p>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{ asset('images/team/vipin-founder.jpg') }}"
                        class="rounded-circle mb-2 team-img"
                        alt="Team" />
                </div>
                <h6 class="fw-bold">Vipin Panwar</h6>
                <p class="small">Founder</p>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('images/team/co-founder.jpg')}}" class="rounded-circle mb-2 team-img" alt="Team" />
                </div>
                <h6 class="fw-bold">Pramod Panwar</h6>
                <p class="small ">Co Founder</p>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('images/team/team3.jpg')}}" class="rounded-circle mb-2 team-img" alt="Team" />
                </div>
                <h6 class="fw-bold">Vikram Singh</h6>
                <p class="small">Senior Trek Guide</p>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('images/team/team5.jpg')}}" class="rounded-circle mb-2 team-img" alt="Team" />
                </div>
                <h6 class="fw-bold">Meera Rawat</h6>
                <p class="small ">Marketing Manager</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <div class="text-center">
                    <a href="{{route('team-members')}}" class="btn btn-outline-success btn-hover-green">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<!-- Features -->
<section class="values py-5">
    <div class="container">
        <h4 class="fw-bold mb-4  text-center">Our Values</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Respect for Nature</h3>
                    <p>We practice and promote sustainable trekking, minimizing our environmental footprint and preserving the natural beauty of the Himalayas for future generations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Community Support</h3>
                    <p>We employ local guides and staff, use locally-owned accommodations, and contribute to community development projects in the regions we trek.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Safety First</h3>
                    <p>The safety of our trekkers is our highest priority. Our guides are trained in wilderness first aid and carry comprehensive medical kits on all treks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Educational Experience</h3>
                    <p>We believe in sharing knowledge about local culture, history, and ecology, creating a deeper connection between our trekkers and the places they visit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Authentic Connections</h3>
                    <p>We foster genuine interactions between trekkers and local communities, promoting cultural exchange and mutual respect.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3 class="h4">Continuous Improvement</h3>
                    <p>We constantly seek feedback and innovate our practices to better serve our trekkers, communities, and the environment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ready_to_trek">
    <div class="container text-center"> <!-- Added text-center to center the content -->
        <div class="col-md-12">
            <h3 style="color:black;">Ready to Trek with Us?</h3>
            <p>Join us for an unforgettable Himalayan adventure. Whether you're a beginner or an <br>experienced trekker, we have the perfect journey waiting for you.</p>

            <!-- Buttons -->
            <a href="#" class="btn btn-outline-success btn-hover-green">Contact Us</a>
            <a href="#" class="btn  btn-outline-success btn-hover-green">Explore Treks</a>
        </div>
    </div>
</section>



@endsection
@section('scripts')
<script>
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".fade-in");
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = "1";
                el.style.transform = "translateY(0)";
            }, 500 * (index + 1));
        });
    });
</script>
@endsection