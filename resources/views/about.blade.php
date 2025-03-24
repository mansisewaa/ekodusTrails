@extends('layouts.app')
@section('styles')
<style>
    /* About Section Styling */
    .about {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 80px 0;
        /* background: #f8f9fa; */
    }

    .about .col-md-6 {
        flex: 1;
        padding: 0 40px;
    }

    /* Section Title */
    .about h2 {
        font-size: 36px;
        font-weight: bold;
        color: #ff5733;
        margin-bottom: 20px;
        position: relative;
    }

    .about h2 .highlight {
        color: #333;
    }

    /* Paragraph Styling */
    .about p {
        font-size: 15px;
        color: #444;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    /* List Styling */
    .about-list {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .about-list li {
        font-size: 18px;
        color: #333;
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .about-list li svg {
        font-size: 22px;
        color: #ff5733;
        margin-right: 10px;
    }


    /* About Section */
    .about {
        padding: 50px 0;
        /* background: #f9f9f9; */
    }

    .highlight {
        color: #ff5733;
        font-weight: bold;
    }

    /* Image Grid */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .image-box {
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .image-box img {
        width: 100%;
        display: block;
        transition: transform 0.3s ease;
    }

    .image-box:hover img {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .image-grid {
            grid-template-columns: 1fr;
        }
    }

    section {
        margin-bottom: 2rem;
        background-color: #f0f0f0 !important;
    }

    /* General Section Styling */
    .section-title {
        /* font-size: 36px; */
        font-weight: bold;
        color: #ff5733;
        text-transform: uppercase;
        margin-bottom: 20px;
        letter-spacing: 1px;
        position: relative;
        margin-bottom: 1rem;
    }

    /* Add a decorative underline */
    .section-title::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: #ff5733;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    /* Distinct Journey Section */
    .journey-section {
        padding: 40px 0;
        background: linear-gradient(135deg, #fff 0%, #fef5f2 100%);
        text-align: center;
        border-top: 3px solid #ff5733;
        border-bottom: 3px solid #ff5733;
    }

    /* Journey Text */
    .journey-text {
        font-size: 18px;
        color: #444;
        max-width: 750px;
        margin: auto;
        line-height: 1.7;
        padding: 10px 0;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .journey-section {
            padding: 50px 20px;
        }

        .section-title {
            font-size: 30px;
        }

        .journey-text {
            font-size: 16px;
        }
    }


    .why-us {
        background: #f8f9fa;
        padding: 60px 0;
        text-align: center;
    }

    /* .section-title {
        font-size: 36px;
        color: #ff5733;
        margin-bottom: 30px;
        font-weight: bold;
    } */

    /* Grid Layout */
    .why-us-grid {
        display: flex;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 10px;
        justify-content: center;
    }

    /* Individual Card Styling */
    .why-us-item {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .why-us-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    }

    .why-us-item svg {
        font-size: 41px !important;
        padding: 12px !important;
        margin-bottom: 15px;
        color: #ff5733;
        transition: transform 0.3s ease;
    }

    .why-us-item svg:hover {
        transform: scale(1.1);
    }

    /* Icon Styling */
    .why-us-item i {
        font-size: 5rem;
        margin-bottom: 15px;
        color: #ff5733;
        transition: transform 0.3s ease;
    }


    /* Text Styling */
    .why-us-item h3 {
        font-size: 17px;
        margin-bottom: 10px;
        color: #333;
        font-weight: 600;
    }

    .why-us-item p {
        font-size: 14px;
        color: #555;
    }

    /* Fade-In Animation */
    .why-us-item {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Founders */
    .founders {
        background: white;
        padding: 50px 0;
        text-align: center;
    }

    .founder-cards {
        display: flex;
        gap: 40px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .founder {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        text-align: center;
        width: 250px;
    }

    .founder:hover {
        transform: translateY(-5px);
    }

    .founder img {
        width: 120px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    /* Core Values */
    .core-values {
        background: #ff5733;
        color: white;
        padding: 50px 0;
        text-align: center;
    }

    .values-grid {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .value-box {
        background: white;
        color: #ff5733;
        padding: 15px 20px;
        border-radius: 5px;
        font-weight: bold;
        min-width: 150px;
    }

    /* Facilities */
    .facilities {
        padding: 50px 0;
        text-align: center;
        background: #f0f0f0;
    }

    .facility-list {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .facility {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .facility i {
        color: #ff5733;
        font-size: 24px;
    }

    .btn-custom {
        background-color: #ff5733;
        color: white;
        /* padding: 10px 20px; */
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }


    .team-facilities {
        background: #f8f9fa;
        padding: 60px 0;
        text-align: center;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 10px;
        text-align: center;
    }

    .details {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .details img {
        max-width: 80px;
        margin-bottom: 10px;
        display: none;
    }

    .details h3 {
        font-size: 17px;
        margin-bottom: 10px;
        color: #333;
        font-weight: 600;
    }

    .details p {
        font-size: 14px;
        color: #555;
    }

    .details:hover {
        transform: translateY(-5px);
    }


</style>

@endsection

@section('content')
<!-- <section class="about-section"> -->
<div class="hero-section">
    <div class="container">
        <h1>Welcome to Ekodus Trails</h1>
        <p>Your gateway to breathtaking trekking adventures!</p>
    </div>
</div>
<!-- About Us Section -->
<div class="container about">
    <div class="row align-items-center">
        <section class="about ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image Grid -->
                    <div class="col-md-6">
                        <div class="image-grid">
                            <div class="image-box">
                                <img src="images/banner3.png" alt="Trekking Adventure" class="img-fluid rounded shadow">
                            </div>
                            <div class="image-box">
                                <img src="images/banner2.webp" alt="Mountain View" class="img-fluid rounded shadow">
                            </div>
                            <div class="image-box">
                                <img src="images/banner1.jpg" alt="Hiking Trail" class="img-fluid rounded shadow">
                            </div>
                            <div class="image-box">
                                <img src="images/banner1.jpg" alt="Hiking Trail" class="img-fluid rounded shadow">
                            </div>
                        </div>
                    </div>

                    <!-- About Content -->
                    <div class="col-md-6">
                        <h2 class="fade-in">About <span class="highlight">Ekodus Trails</span></h2>
                        <p class="fade-in delay-1">
                            Welcome to <strong>Ekodus Trails</strong>, where we create <strong>extraordinary trekking experiences</strong> through some of the world's most breathtaking landscapes. Whether you're a beginner or an experienced trekker, we ensure a safe, thrilling, and unforgettable adventure.
                        </p>
                        <!-- <ul class="about-list fade-in delay-2">
                            <li><i class="fa-solid fa-hiking"></i> Guided treks for all skill levels</li>
                            <li><i class="fa-solid fa-mountain"></i> Hidden trails & majestic peaks</li>
                            <li><i class="fa-solid fa-user-shield"></i> Expert guides ensuring safety</li>
                            <li><i class="fa-solid fa-leaf"></i> Sustainable eco-friendly adventures</li>
                        </ul>
                        <a href="#our-journey" class="btn btn-custom btn-sm fade-in delay-3">Discover More</a> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Started -->
        <section class="journey-section">
            <div class="container">
                <h2 class="section-title">Our Journey</h2>
                <p class="journey-text">
                    What started as a deep passion for the mountains has transformed into a mission to share the magic of trekking.
                    Founded by experienced trekkers, <strong>Ekodus Trails</strong> is dedicated to crafting memorable and safe adventures for every explorer.
                </p>
                <p class="journey-text">
                    With years of expertise and an unwavering love for nature, we design journeys that go beyond just trekking—offering a profound connection to the wilderness.
                </p>
            </div>
        </section>



        <!-- Why Choose Us -->
        <section class="why-us">
            <div class="container">
                <h2 class="section-title">Why Choose Us?</h2>
                <div class="why-us-grid">
                    <div class="why-us-item">
                        <i class="fa-solid fa-shield-heart"></i>
                        <h3>100% Safety Guaranteed</h3>
                        <p>We prioritize your safety with expert guides and top-tier equipment.</p>
                    </div>
                    <div class="why-us-item">
                        <i class="fa-solid fa-user-tie"></i>
                        <h3>Certified Guides & Experts</h3>
                        <p>Our team consists of highly trained professionals with years of experience.</p>
                    </div>
                    <div class="why-us-item">
                        <i class="fa-solid fa-leaf"></i>
                        <h3>Eco-Friendly Trekking</h3>
                        <p>We follow sustainable practices to preserve nature's beauty.</p>
                    </div>
                    <div class="why-us-item">
                        <i class="fa-solid fa-hiking"></i>
                        <h3>High-Quality Equipment</h3>
                        <p>Only the best gear is used to ensure a smooth trekking experience.</p>
                    </div>
                    <div class="why-us-item">
                        <i class="fa-solid fa-mountain-sun"></i>
                        <h3>Unforgettable Experiences</h3>
                        <p>Explore breathtaking landscapes with expert-led adventures.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet Our Founders -->
        <!-- <section class="founders">
                <div class="container">
                    <h2>Meet Our Founders</h2>
                    <div class="founder-cards">
                        <div class="founder">
                            <img src="images/founder1.jpg" alt="Founder 1">
                            <h3>Rakesh Pant</h3>
                            <p>Founder & CEO - Passionate Mountaineer & Trek Leader</p>
                        </div>
                        <div class="founder">
                            <img src="images/founder2.jpg" alt="Founder 2">
                            <h3>Sandeep Rawat</h3>
                            <p>Founder & CEO - Expert in Trekking & Expeditions</p>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Facilities -->
        <!-- <section class="team-facilities">
            <div class="container">
                <h2>Team and Facilities</h2>
                <div class="grid">
                    <div class="details">
                        <img src="icons/trek-leader.png" alt="Trek Leaders">
                        <h3>Trek Leaders</h3>
                        <p>Qualified with Basic & Advanced Mountaineering Courses. Certified in Wilderness First Aid.</p>
                    </div>
                    <div class="details">
                        <img src="icons/team.png" alt="Team">
                        <h3>Team</h3>
                        <p>Every trek has support staff including guides, cooks, and helpers for a smooth journey.</p>
                    </div>
                    <div class="details">
                        <img src="icons/food.png" alt="Food">
                        <h3>Food</h3>
                        <p>Hygienic, energizing meals, mainly vegetarian with occasional egg-based dishes.</p>
                    </div>
                    <div class="details">
                        <img src="icons/equipment.png" alt="Equipment">
                        <h3>Equipment</h3>
                        <p>High-quality tents, ropes, and climbing gear, maintained for safety and comfort.</p>
                    </div>
                    <div class="details">
                        <img src="icons/emergency.png" alt="Emergency Equipment">
                        <h3>Emergency Equipment</h3>
                        <p>Stretchers, oxygen cylinders, and fully stocked first-aid kits available for safety.</p>
                    </div>
                    <div class="details">
                        <img src="icons/high-altitude.png" alt="High Altitude Chambers">
                        <h3>High Altitude Chambers</h3>
                        <p>GEMO Bags available for high-altitude treks like Roopkund and Stok Kangri.</p>
                    </div>
                    <div class="details">
                        <img src="icons/accommodation.png" alt="Accommodation">
                        <h3>Accommodation</h3>
                        <p>Comfortable and eco-friendly lodging with beautiful mountain views.</p>
                    </div>
                    <div class="details">
                        <img src="icons/transport.png" alt="Transport">
                        <h3>Transport</h3>
                        <p>Safe and comfortable rides from pick-up points to the base camp in MUVs.</p>
                    </div>
                </div>
            </div>
        </section> -->


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
