@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/trek-details.css')}}">
@endsection

@section('content')
<section class="hero">
    <div class="hero-overlay"></div>

    <div class="tour-card">
        <div class="tour-header">
            <div class="tour-location">
                <i class="fas fa-map-marker-alt"></i> {{$trekdetails->locations->name}}
            </div>
            <div class="tour-rating">
                <div class="stars">
                    @php
                    $fullStars = floor($trekdetails->rating);
                    $halfStar = ($trekdetails->rating - $fullStars) >= 0.5;
                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                    @endphp

                    @for ($i = 0; $i < $fullStars; $i++)
                        <i class="fas fa-star"></i>
                        @endfor

                        @if ($halfStar)
                        <i class="fas fa-star-half-alt"></i>
                        @endif

                        @for ($i = 0; $i < $emptyStars; $i++)
                            <i class="far fa-star"></i>
                            @endfor
                </div>
                <span style="color:black;">
                    {{ number_format($trekdetails->rating, 1) }} ({{ $trekdetails->review_count }} reviews)
                </span>
            </div>
        </div>
        <div class="tour-heading">
            <h1 class="tour-title">{{$trekdetails->name}}</h1>
            <div class="tour-price">
                <div class="price">₹ {{$trekdetails->price}}</div>
                <div class="per-person">per person</div>
            </div>
        </div>
        <div class="tour-details">

            <div class="tour-info">
                <div class="info-item">
                    <span class="badge bg-success"><i class="far fa-calendar"></i>&nbsp;&nbsp;{{$trekdetails->duration}}</span>
                </div>
                <div class="info-item">
                    <span class="badge bg-success"><i class="fas fa-users"></i>&nbsp;&nbsp;Max {{$trekdetails->max_group_size}}</span>
                </div>
                <div class="info-item">
                    <span class="badge bg-success"><i class="fas fa-mountain"></i>&nbsp;&nbsp;{{$trekdetails->difficulty}}</span>
                </div>
            </div>
            <a href="{{route('booking')}}" class="btn btn-primary btn-sm book-trip">Book This Trip</a>
        </div>
    </div>

</section>

<section class="content">
    <div class="container">
        <div class="content-wrapper">
            <div class="main-content">
                <!-- Tabs -->
                <div class="tabs grid grid-cols-4 gap-2 mb-6">
                    <button class="tab-button active" data-tab="overview">Overview</button>
                    <button class="tab-button" data-tab="itinerary">Itinerary</button>
                    <button class="tab-button" data-tab="includes">Includes</button>
                    <button class="tab-button" data-tab="reviews">Reviews</button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content text-muted" id="overview">
                    <div class="space-y-6">
                        {!!$trekdetails->trekDetails->overview!!}
                        <div>
                            {!!$trekdetails->trekDetails->highlights!!}

                        </div>
                        <!-- <div class="rounded-img-container">
                            <img src="{{ asset('images/kedarkanthabanner.webp') }}" alt="Kedarkantha Banner">
                        </div> -->
                    </div>
                </div>

                <div class="tab-content hidden" id="itinerary">
                    <div class="accordion">
                        <!-- <details>
                            <summary>
                                <div><span class="day-tag">Day 1</span> Arrival in Zurich</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </summary>
                            <div class="accordion-content">
                                Explore Zurich’s old town and enjoy a welcome dinner.
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div><span class="day-tag">Day 2</span> Lauterbrunnen Valley</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </summary>
                            <div class="accordion-content">
                                Hike past waterfalls and alpine scenery in Lauterbrunnen.
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div><span class="day-tag">Day 3</span> Eiger Trail</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </summary>
                            <div class="accordion-content">
                                Trek along the famous Eiger Trail with breathtaking views.
                            </div>
                        </details> -->

                        {!!$trekdetails->trekDetails->itinerary!!}
                    </div>
                </div>

                <div class="tab-content hidden" id="includes">
                    <div class="space-y-6">
                        <div>
                            <h5 class="">What's Included</h5>
                            {!!$trekdetails->trekDetails->includes!!}
                        </div>

                        <div>
                            <h5 class="">What's Not Included</h5>
                            {!!$trekdetails->trekDetails->excludes!!}
                        </div>
                    </div>
                </div>

                <div class="tab-content hidden" id="reviews">
                    <h5 class="">Customer Reviews</h5>

                    {!!$trekdetails->trekDetails->reviews!!}

                    <!-- <div class="review">
                        <div class="review-header">
                            <div class="reviewer">Sarah Johnson</div>
                            <div class="review-date">May 15, 2023</div>
                        </div>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="review-text">
                            The Swiss Alps tour exceeded all my expectations. Our guide was knowledgeable and passionate, and the scenery was absolutely breathtaking. I'll definitely be booking another trip with this company!
                        </div>
                    </div>

                    <div class="review">
                        <div class="review-header">
                            <div class="reviewer">Michael Brown</div>
                            <div class="review-date">April 22, 2023</div>
                        </div>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="review-text">
                            Great experience overall. The itinerary was well-planned and the accommodations were comfortable. The only reason I'm not giving 5 stars is because one of the days felt a bit rushed. Otherwise, highly recommended!
                        </div>
                    </div>

                    <div class="review">
                        <div class="review-header">
                            <div class="reviewer">Emma Wilson</div>
                            <div class="review-date">March 10, 2023</div>
                        </div>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="review-text">
                            This was my third trip with Exodus Trails and they never disappoint. The Swiss Alps package was perfectly organized, with a good balance of challenging hikes and relaxation time. Our guide Thomas was exceptional!
                        </div>
                    </div> -->

                </div>


            </div>

            <div class="sidebar">
                <div class="booking-widget">
                    <h5>Book This Trip</h5>
                    <div class="available-dates">
                        <h6>Next Available Dates:</h6>
                        <div class="date-option">
                            <input type="radio" name="date" id="date1">
                            <label for="date1">June 15, 2023</label>
                        </div>
                        <div class="date-option">
                            <input type="radio" name="date" id="date2">
                            <label for="date2">July 8, 2023</label>
                        </div>
                        <div class="date-option">
                            <input type="radio" name="date" id="date3">
                            <label for="date3">August 12, 2023</label>
                        </div>
                    </div>
                    <button class="btn btn-primary full-width">Check Availability</button>
                </div>

                <div class="help-widget">
                    <h3>Need Help?</h3>
                    <p>Our travel experts are here to assist you in planning your perfect hiking adventure.</p>
                    <button class="btn btn-outline full-width">Contact Us</button>
                </div>

                <!-- <div class="similar-packages">
                    <h3>Similar Packages</h3>
                    <div class="package">
                        <div class="package-image placeholder"></div>
                        <div class="package-details">
                            <h4>Inca Trail Adventure</h4>
                            <div class="package-meta">10 days</div>
                            <div class="package-price">$899</div>
                        </div>
                    </div>
                    <div class="package">
                        <div class="package-image placeholder"></div>
                        <div class="package-details">
                            <h4>Himalayan Heights</h4>
                            <div class="package-meta">14 days</div>
                            <div class="package-price">$1499</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>



        @php
        $trekdetails->gallery_images = [
        'bg.jpg',
        'bg2.jpg',
        'bg3.jpg',
        'bg4.jpg',
        'bg6.jpg'
        ];
        @endphp

        <section class="gallery-section py-5">
            <div class="container">
                <h5 class="mb-4"> Gallery</h5>
                <div class="gallery-scroll-wrapper">
                    <div class="gallery-scroll">
                        @foreach ($trekdetails->gallery_images as $image)
                        <div class="gallery-item">
                            <img src="{{ asset('images/' . $image) }}" alt="Gallery Image">
                        </div>
                        @endforeach
                        @foreach ($trekdetails->gallery_images as $image)
                        <div class="gallery-item">
                            <img src="{{ asset('images/' . $image) }}" alt="Gallery Image">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="similar-packages py-5">
            <h5 class="mb-4">Similar Packages</h5>
            <div class="similar-packages-cards">
                @foreach ($similarPackages as $package)
                <div class="package-card">
                    <div class="package-card-image" style="background-image: url('../images/bg3.jpg');"></div>
                    <div class="package-card-details">
                        <h4>{{ $package->name }}</h4>
                        <div class="package-meta">{{ $package->duration }} days</div>
                        <!-- <div class="package-price">${{ number_format($package->price, 2) }}</div> -->
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

</section>
@endsection
@section('scripts')
<script>
    const buttons = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            // Hide all tab contents
            contents.forEach(content => content.classList.add('hidden'));

            // Activate current
            button.classList.add('active');
            document.getElementById(button.getAttribute('data-tab')).classList.remove('hidden');
        });
    });
</script>
@endsection
