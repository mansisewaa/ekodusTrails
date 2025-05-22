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

    .filter-section {
        text-align:left;
    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2 class="">Our Treks</h2>
    <p class="lead">Choose from our carefully curated selection of hiking adventures for all experience levels.</p>
</section>
<section class="treks-page py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Filter Section (Left side) -->
            <div class="col-md-3">
                <div class="filter-section bg-white p-4 shadow-sm rounded">
                    <h5 class="fw-semibold">Filters</h5>
                    <form>
                        <!-- Filter by Location -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <select class="form-select" id="location">
                                <option value="">Select Location</option>
                                <option value="swiss">Swiss Alps</option>
                                <option value="peru">Peru</option>
                                <option value="nepal">Nepal</option>
                            </select>
                        </div>

                        <!-- Filter by Duration -->
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <select class="form-select" id="duration">
                                <option value="">Select Duration</option>
                                <option value="7days">7 Days</option>
                                <option value="10days">10 Days</option>
                                <option value="14days">14 Days</option>
                            </select>
                        </div>

                        <!-- Filter by Max Group Size -->
                        <div class="mb-3">
                            <label for="group-size" class="form-label">Max Group Size</label>
                            <select class="form-select" id="group-size">
                                <option value="">Select Group Size</option>
                                <option value="8">Max 8</option>
                                <option value="10">Max 10</option>
                                <option value="12">Max 12</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success w-100">Apply Filters</button>
                    </form>
                </div>
            </div>

            <!-- Trek Packages Section (Right side) -->
            <div class="col-md-9">
                <!-- <div class="mb-4 text-center">
                    <h2 class="fs-1 fw-semibold">Popular Treks</h2>
                    <p class="text-muted">Choose from our carefully curated selection of hiking adventures for all experience levels.</p>
                </div> -->

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    <!-- CARD 1 -->
                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Swiss Alps</span>
                                </div>
                                <h5 class="card-title fw-semibold">Alpine Explorer</h5>
                                <p class="text-muted small">Experience the majestic Swiss Alps with expert guides.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 7 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 12</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹1,08,000</span>
                                    <a href="{{route('our-treks-details')}}" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Peru</span>
                                </div>
                                <h5 class="card-title fw-semibold">Inca Trail Adventure</h5>
                                <p class="text-muted small">Trek the legendary path to Machu Picchu.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 10 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 10</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹1,58,000</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Nepal</span>
                                </div>
                                <h5 class="card-title fw-semibold">Himalayan Heights</h5>
                                <p class="text-muted small">Explore the breathtaking landscapes of the Himalayas.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 14 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 8</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹2,10,000</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Nepal</span>
                                </div>
                                <h5 class="card-title fw-semibold">Himalayan Heights</h5>
                                <p class="text-muted small">Explore the breathtaking landscapes of the Himalayas.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 14 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 8</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹2,10,000</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Nepal</span>
                                </div>
                                <h5 class="card-title fw-semibold">Himalayan Heights</h5>
                                <p class="text-muted small">Explore the breathtaking landscapes of the Himalayas.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 14 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 8</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹2,10,000</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div>
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>Nepal</span>
                                </div>
                                <h5 class="card-title fw-semibold">Himalayan Heights</h5>
                                <p class="text-muted small">Explore the breathtaking landscapes of the Himalayas.</p>
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> 14 Days</span>
                                    <span><i class="bi bi-people-fill"></i> Max 8</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">₹2,10,000</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            
            </div>
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
