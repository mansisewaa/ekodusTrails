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
        text-align: left;
    }

    .badge {
    --bs-badge-padding-x: 1.65em !important;
    --bs-badge-padding-y: 0.70em !important;
    --bs-badge-font-size: 11px !important;
    }

    .card img {
        height: 230px !important;
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
           <!-- <div class="col-md-3">
                <div class="filter-section bg-white p-4 shadow-sm rounded">
                    <h5 class="fw-semibold">Filters</h5>
                    <form id="filter-form">
                      
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <select class="form-select" id="location">
                                <option value="">Select Location</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Chopta">Chopta</option>
                                <option value="Yamunotri & Gangotri">Yamunotri & Gangotri</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Kashmir">Kashmir</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Nepal">Nepal</option>
                            </select>
                        </div>

                        
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <select class="form-select" id="duration">
                                <option value="">Select Duration</option>
                                <option value="3 Days">3 Days</option>
                                <option value="5 Days">5 Days</option>
                                <option value="6 Days">6 Days</option>
                                <option value="7 Days">7 Days</option>
                                <option value="8 Days">8 Days</option>
                                <option value="9 Days">9 Days</option>
                                <option value="10 Days">10 Days</option>
                                <option value="12 Days">12 Days</option>
                                <option value="14 Days">14 Days</option>
                                <option value="16 Days">16 Days</option>
                            </select>
                        </div>

                        
                        <div class="mb-3">
                            <label for="group-size" class="form-label">Max Group Size</label>
                            <select class="form-select" id="group-size">
                                <option value="">Select Group Size</option>
                                <option value="6">Max 6</option>
                                <option value="8">Max 8</option>
                                <option value="10">Max 10</option>
                                <option value="12">Max 12</option>
                                <option value="15">Max 15</option>
                                <option value="20">Max 20</option>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-success w-100">Apply Filters</button>
                    </form>
                </div>
            </div> -->


            <!-- Trek Packages Section (Right side) -->
            <div class="col-md-12 col-sm-6">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3"  id="trek-cards-container">
                    @foreach($treks as $trek)
                    <div class="col-lg-3">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <!-- <div class="card-img-top bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-image fs-1 text-secondary"></i>
                            </div> -->
                            <img src="{{asset('images/bg4.jpg')}}" alt="">
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>{{ $trek['locations']['name'] }}</span>
                                </div>
                                <h5 class="card-title fw-semibold">{{ $trek['name'] }}</h5>

                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> {{ $trek['duration'] }}</span>
                                    <span><i class="bi bi-people-fill"></i> {{ $trek['max_group_size'] }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success fw-bold text-white">₹ {{ $trek['price'] }}</span>
                                    <a href="{{ route('our-treks-details', $trek['id']) }}" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
