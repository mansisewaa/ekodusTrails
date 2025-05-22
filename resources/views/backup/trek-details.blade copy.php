@extends('layouts.master')

@section('styles')
<style>
    .col-md-2 {
        flex: 0 0 auto;
        width: 19.666667%;
    }

    .info-section {
        /* background: linear-gradient(to right, #ff6a00, #ffbb00); */
        /* color: #0d3c22; */
        color: #ff6a00;
        border-radius: 10px;
        box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.2);
    }

    .info-box {
        background: rgba(255, 255, 255, 0.15);
        padding: 10px;
        border-radius: 15px;
        margin: 5px;
        box-shadow: 0 2px 5px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .info-section svg {
        font-size: 27px !important;
        color: #ff6a00;
    }

    .info-box:hover {
        transform: scale(1.15);
    }

    .info-box i {
        margin-bottom: 8px;
    }

    .info-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: .3rem;
    }

    .info-detail {
        font-size: 1rem;
        margin-bottom: .3rem;
    }


    .amount-section {
        position: relative;
        /* Needed for absolute positioning of overlay */
        background-image: url('images/bg6.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        /* Enables parallax effect */
        color: white;
        padding: 40px 0;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .amount-section::before {
        content: "";
        /* Necessary for the pseudo-element */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.13);
        /* Semi-transparent black overlay */
        z-index: 1;
        /* Ensures overlay is above the background */
        pointer-events: none;
        /* Allows interactions to pass through */
    }



    .amount-box {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        color: black;
    }

    .amount-box:hover,
    .date-box:hover {
        transform: scale(1.05);
    }

    .amount-title,
    .date-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #e65c00;
        text-align: left;
    }


    /* Container Styling */
    .date-box {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem + 8px) !important;
    }


    /* Select Box Styling */
    select.form-control {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 2px solid #ff6a00;
        border-radius: 8px;
        background: #fff;
        color: #333;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    /* Hover & Focus Effects */
    select.form-control:hover,
    select.form-control:focus {
        border-color: rgb(87, 63, 47);
        box-shadow: 0 0 8px rgba(255, 106, 0, 0.3);
        outline: none;
    }

    /* Adjust Margin for Consistency */
    .trek-dates {
        margin-top: 10px;
    }

    /* Button Styling */
    .btn-primary {
        background: #ff6a00;
        border: none;
        padding: 8px 16px;
        font-size: 1rem;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: #e65c00;
        transform: scale(1.05);
    }

    .amount-price {
        font-size: 2rem;
        font-weight: bold;
        color: #ff6a00;
    }

    .amount-note {
        font-size: 13px;
        opacity: 0.8;
    }

    .btn-primary {
        background: #ff6a00;
        color: #f8f9fa;
        border: none;
        padding: 10px 15px;
        border-radius: 25px;
        font-weight: bold;
        transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: #ff6a00;
    }

    .itinerary-section h2,
    .inclusions-section h2,
    .faq-section h2,
    .gallery-section h2 .amount-section h2 {
        margin-bottom: 15px;
        color: #ff6a00;
        font-weight: bold;
    }

    /* .itinerary-day {
        margin-bottom: 20px;
        padding: 15px;
        border-left: 5px solid #ff6a00;
        background: white;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    } */

    .itenerary-title {
        text-align: left;
    }

    .timeline {
        position: relative;
        /* max-width: 800px; */
        margin: 0 auto;
        padding: 20px 0;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .timeline-icon {
        width: 50px;
        height: 50px;
        background: #ff6a00;
        color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.2rem;
        margin-right: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .timeline-content {
        background: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        flex: 1;
        transition: transform 0.3s ease-in-out;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
    }

    .timeline-title {
        font-size: 18px !important;
        color: #ff6a00;
        margin-bottom: 5px;
    }

    /* Initially Hidden Full Description */
    .full-description {
        display: none;
        margin-top: 10px;
        font-size: 13px !important;
        color: #333;
    }

    .short-description {
        font-size: 14px;
        color: #333;
    }

    /* Show full description when active */
    .timeline-item.active .full-description {
        display: block;
    }




    .accordion-button {
        font-weight: bold;
        color: #ff6a00;
    }

    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .overview-section {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .overview-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: #ff6a00;
        margin-bottom: 20px;
    }

    .overview-title p {
        text-align: left;
    }

    /* Fix image dimensions and smooth scaling */
    #trekCarousel img {
        border-radius: 10px;
        width: 100%;
        /* Ensures the image covers the entire carousel container */
        height: 350px;
        /* Fixed height for consistency */
        object-fit: cover;
        /* Prevents image distortion */
    }

    /* Smooth transition effect */
    .carousel-item {
        will-change: transform;
        transition: transform 0.5s ease-out;
    }


    .italic {
        font-style: italic;
    }

    .key-points-section {
        /* background: #f8f9fa; */
        /* padding: 20px; */
        border-radius: 10px;
        /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
    }

    .key-points-box,
    .highlights-box {
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .key-points-box h4,
    .highlights-box h4 {
        color: #ff6a00;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .key-points-box ul,
    .highlights-box ul {
        list-style-type: none;
        padding-left: 0;
    }

    .key-points-box ul li,
    .highlights-box ul li {
        font-size: 1rem;
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .key-points-box ul li::before,
    .highlights-box ul li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #ff6a00;
        font-weight: bold;
    }

    .tab-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Tab Buttons */
    .tab-buttons {
        display: flex;
        justify-content: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .tab-btn {
        background: #ff6a00;
        color: white;
        border: none;
        padding: 3px 14px;
        font-size: 13px;
        font-weight: bold;
        border-radius: 25px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .tab-btn.active,
    .tab-btn:hover {
        background: #e65c00;
        transform: scale(1.05);
    }

    /* Tab Content */
    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease-in-out;
    }

    .tab-content.active {
        display: block;
    }

    /* List Styling */
    .tab-container ul {
        list-style: none;
        padding: 0;
    }

    .tab-container ul li {
        font-size: 16px;
        padding: 10px;
        text-align: left;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #333;
        font-weight: 500;
    }

    .tab-container ul li i {
        color: #ff6a00;
        font-size: 20px;
    }

    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .gallery-section h2 {
        margin-bottom: 20px;
        color: #ff6a00;
        font-weight: bold;
    }


    /* Gallery Box for Consistent Layout */
    .gallery-box {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        height: 250px;
        /* Fixed height */
    }

    /* Images inside gallery */
    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    /* Hover Effect */
    .gallery-img:hover {
        transform: scale(1.05);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .gallery-box {
            height: 200px;
            /* Adjust height for tablets */
        }
    }

    @media (max-width: 576px) {
        .gallery-box {
            height: 180px;
            /* Adjust height for mobile */
        }
    }

    @media (max-width: 768px) {

        .info-section .text-center {
            text-align: center !important;
            display: flex;
            justify-content: center;
        }

        .info-section .col-md-2 {
            flex: 0 0 auto;
            width: 50%;
            margin-bottom: 1rem;
        }

        .info-section svg {
            font-size: 27px !important;
            color: #ff6a00;
        }

        .timeline-item {
            display: flex;
            align-items: center;
        }

        .timeline-icon {
            margin-bottom: 10px;
        }

        .info-box {
            padding: 10px;
        }

        .amount-section {
            padding: 20px;
        }

        .amount-title,
        .date-title {
            font-size: 15px !important;
            text-align: center !important;
        }

        .amount-price {
            font-size: 1.5rem;
        }

        select.form-control {
            font-size: 0.9rem;
        }

        .btn-primary {
            font-size: 0.9rem;
            padding: 8px 12px;
        }


        .amount-box,
        .date-box {
            width: 90%;
            margin: 0 auto;
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(2.1rem + 8px) !important;
        }

        .overview-section {
            text-align: center;
        }

        .overview-section p {
            font-size: 15px;
            text-align: justify;
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-in-out forwards;
        }

        /* Animation Keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .key-points-box h4,
        .highlights-box h4 {
            text-align: center;
        }

        .itinerary-section {
            padding: 20px;
        }

        .itenerary-title {
            text-align: center;
        }

        .itinerary-day {
            padding: 15px;
        }

        .timeline-icon {
            width: 35px;
            height: 35px;
            background: #ff6a00;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            margin-right: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

    }



    @media (max-width: 480px) {
        .timeline-content {
            padding: 10px;
        }

        .timeline-title {
            font-size: 16px;
        }

        .amount-title,
        .date-title {
            font-size: 15px !important;
            text-align: center !important;
        }

        .amount-price {
            font-size: 1.3rem;
        }

        .btn-primary {
            font-size: 0.8rem;
            padding: 6px 10px;
        }

        .info-section svg {
            font-size: 27px !important;
            color: #ff6a00;
        }
    }
</style>



@endsection

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <h1> Trek Name</h1>
</div>


<div class="info-section py-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="800">
                <div class="info-box">
                    <i class="fas fa-clock"></i>
                    <p class="info-title">Duration</p>
                    <p class="info-detail">6 Days / 5 Nights</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="info-box">
                    <i class="fas fa-mountain "></i>
                    <p class="info-title">Altitude</p>
                    <p class="info-detail">6,638m</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="info-box">
                    <i class="fas fa-chart-line"></i>
                    <p class="info-title">Difficulty</p>
                    <p class="info-detail">Moderate</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1400">
                <div class="info-box">
                    <i class="fas fa-cloud-sun "></i>
                    <p class="info-title">Best Season</p>
                    <p class="info-detail">May - September</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1600">
                <div class="info-box">
                    <i class="fas fa-map-marker-alt "></i>
                    <p class="info-title">Region</p>
                    <p class="info-detail">Nepal-Tibet</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="amount-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Trek Cost Box -->
            <div class="col-md-4 col-sm-10 mb-4" data-aos="fade-left" data-aos-duration="1400">
                <div class="amount-box text-center">
                    <h3 class="amount-title italic">Trek Cost</h3>
                    <p class="amount-price" id="amount-price">₹275,000</p>
                    <p class="amount-note">Per Person | Includes Permits & Meals</p>
                    <button class="btn btn-primary btn-sm" id="convert-button" onclick="convertCurrency()">Convert to USD</button>
                </div>
            </div>
            <!-- Batches Box -->
            <div class="col-md-4 col-sm-10">
                <div class="date-box text-center" data-aos="fade-right" data-aos-duration="1400">
                    <h3 class="date-title italic">Batches</h3>
                    <select class="form-control">
                        <option value="">Select Month</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                    </select>
                    <select class="form-control trek-dates mt-2">
                        <option value="">Upcoming Batches</option>
                        <option>April 10 - April 24</option>
                        <option>May 5 - May 19</option>
                        <option>June 15 - June 29</option>
                        <option>July 20 - Aug 3</option>
                    </select>
                    <button class="btn btn-primary btn-sm mt-3">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container overview-section my-5">
    <h2 class="overview-title"> Overview - Trek Name</h2>
    <div class="row mb-0">
        <div class="col-md-6">
            <p data-aos="fade-right" data-aos-duration="800">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel tempus urna, vitae tempus ligula. Donec luctus mattis congue. Ut non mauris tincidunt, aliquam odio ut, convallis erat. Integer bibendum blandit elit varius congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel tempus urna, vitae tempus ligula. Donec luctus mattis congue. Ut non mauris tincidunt, aliquam odio ut, convallis erat. Integer bibendum blandit elit varius congue.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel tempus urna, vitae tempus ligula. Donec luctus mattis congue. Ut non mauris tincidunt, aliquam odio ut, convallis erat. Integer bibendum blandit elit varius congue.
            </p>
        </div>
        <div class="col-md-6">
            <!-- Bootstrap Carousel -->
            <div id="trekCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/bg.jpg') }}" class="d-block w-100" alt="Trek Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bg2.jpg') }}" class="d-block w-100" alt="Trek Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bg3.jpg') }}" class="d-block w-100" alt="Trek Image 3">
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#trekCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#trekCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>


<!-- Key Points & Highlights Section -->
<div class="container key-points-section my-5">
    <div class="row">
        <!-- Key Points -->
        <div class="col-md-6">
            <div class="key-points-box p-4">
                <h4>Key Points</h4>
                <ul>
                    <li><strong>Destination Covered:</strong> Dehradun, Sankri, Juda ka Talab, Kedarkantha Base, Kedarkantha Summit, Hargaon, Sankri, Dehradun</li>
                    <li><strong>Country:</strong> India</li>
                    <li><strong>Adventure Type:</strong> Trekking, Adventure</li>
                    <li><strong>Duration:</strong> 9 Days</li>
                    <li><strong>Base Camp:</strong> Sankri</li>
                    <li><strong>Altitude:</strong> Varies</li>
                    <li><strong>Stay:</strong> Hotels & Guesthouses</li>
                    <li><strong>Season:</strong> All Year Round</li>
                    <li><strong>Difficulty Level:</strong> Moderate</li>
                    <li><strong>Food:</strong> Meals included</li>
                    <li><strong>Trail Type:</strong> Sacred Temples & Scenic Routes</li>
                    <li><strong>Rail Head:</strong> Haridwar</li>
                    <li><strong>Month:</strong> May to November</li>
                </ul>
            </div>
        </div>

        <!-- Highlights -->
        <div class="col-md-6">
            <div class="highlights-box p-4">
                <h4>Highlights</h4>
                <ul>
                    <li>Summit climb to the Kedarkantha peak at 12,500 ft with 360-degree views of the Himalayas.</li>
                    <li>Camping amidst snow-covered landscapes at Juda ka Talab and Kedarkantha Base.</li>
                    <li>Trekking through dense pine forests, open meadows, and experiencing the beauty of winter in the Himalayas.</li>
                </ul>

                <h4>Pickup & Drop Details</h4>
                <ul>
                    <li><strong>Pickup / Drop Point:</strong> Haridwar</li>
                    <li><strong>Reporting Time:</strong> Flexible based on arrival</li>
                    <li><strong>Drop Time:</strong> Flexible based on departure</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- Itinerary Section -->
<div class="container itinerary-section">
    <h2 class="itenerary-title mb-4">Trek Itinerary</h2>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-icon"><i class="fas fa-plane-arrival"></i></div>
            <div class="timeline-content">
                <h4 class="timeline-title">Day 1: Arrival in Kathmandu</h4>
                <p class="short-description">Click to see more details...</p>
                <div class="full-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vivamus laoreet libero vel erat scelerisque. Curabitur nec justo elit.
                        Suspendisse at libero et lectus sodales pharetra. Duis tristique metus.</p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon"><i class="fas fa-city"></i></div>
            <div class="timeline-content">
                <h4 class="timeline-title">Day 2: Kathmandu Sightseeing</h4>
                <p class="short-description">Click to see more details...</p>
                <div class="full-description">
                    <p>Donec imperdiet, magna ut consectetur egestas, mi libero interdum sapien,
                        eu tempor dui nisl ut ligula. Curabitur vel purus vitae velit bibendum euismod.</p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon"><i class="fas fa-bus"></i></div>
            <div class="timeline-content">
                <h4 class="timeline-title">Day 3: Drive to Syabrubesi</h4>
                <p class="short-description">Click to see more details...</p>
                <div class="full-description">
                    <p>Integer vel lorem ut metus scelerisque aliquet.
                        Duis at felis ac felis pellentesque ultrices.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="tab-container">
        <div class="tab-buttons">
            <button class="tab-btn active" onclick="openTab('included')">What's Included</button>
            <button class="tab-btn" onclick="openTab('excluded')">What's Not Included</button>
        </div>
        <div class="tab-content active" id="included">
            <ul>
                <li><i class="fas fa-hotel"></i> Accommodation in Kathmandu</li>
                <li><i class="fas fa-bus"></i> Transportation from Kathmandu to Syabrubesi</li>
                <li><i class="fas fa-utensils"></i> Meals during the trek</li>
                <li><i class="fas fa-user-tie"></i> Experienced trekking guide</li>
            </ul>
        </div>
        <div class="tab-content" id="excluded">
            <ul>
                <li><i class="fas fa-plane"></i> International flight tickets</li>
                <li><i class="fas fa-wallet"></i> Personal expenses</li>
                <li><i class="fas fa-shield-alt"></i> Travel insurance</li>
                <li><i class="fas fa-ambulance"></i> Emergency evacuation costs</li>
            </ul>
        </div>
    </div>
</div>


<!-- FAQ Section -->
<!-- <div class="container faq-section my-5">
    <h2 class="text-center">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                    What is the difficulty level of this trek?
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    The Kailash Mansarovar Yatra is of moderate difficulty and requires physical fitness.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                    What is the highest altitude of the trek?
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    The highest point of the trek is approximately 6,638m.
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Gallery Section -->
<div class="container gallery-section my-5">
    <h2 class="text-center mb-4">Gallery</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="gallery-box">
                <img src="{{ asset('images/harkidun.webp') }}" alt="Trek Image" class="gallery-img">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="gallery-box">
                <img src="{{ asset('images/kedarkanthabanner.webp') }}" alt="Trek Image" class="gallery-img">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="gallery-box">
                <img src="{{ asset('images/bg3.jpg') }}" alt="Trek Image" class="gallery-img">
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    let conversionRate = 80.5; // 1 USD = 80.5 INR
    let isInINR = true; // Track current currency state

    function convertCurrency() {
        let amountElement = document.getElementById('amount-price');
        let buttonElement = document.getElementById('convert-button');

        if (isInINR) {
            // Convert INR to USD
            let inrAmount = 275000;
            let usdAmount = (inrAmount / conversionRate).toFixed(2);
            amountElement.innerText = `$${usdAmount}`;
            buttonElement.innerText = "Convert to INR";
        } else {
            // Convert USD to INR
            let usdAmount = 275000 / conversionRate;
            let inrAmount = (usdAmount * conversionRate).toFixed(2); // Ensures round-trip consistency
            amountElement.innerText = `₹${inrAmount}`;
            buttonElement.innerText = "Convert to USD";
        }

        isInINR = !isInINR; // Toggle currency state
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const timelineItems = document.querySelectorAll(".timeline-item");

        timelineItems.forEach(item => {
            item.addEventListener("click", function() {
                this.classList.toggle("active");
            });
        });
    });

    function openTab(tabName) {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));

        document.getElementById(tabName).classList.add('active');
        document.querySelector(`[onclick="openTab('${tabName}')"]`).classList.add('active');
    }
</script>
@endsection
