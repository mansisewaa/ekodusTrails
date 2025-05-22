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

    .badge {
        --bs-badge-padding-x: 1.65em !important;
        --bs-badge-padding-y: 0.70em !important;
        --bs-badge-font-size: 11px !important;
    }

    p {
        font-size: 14px !important;
    }

    .card img {
        height: 230px !important;
    }
</style>
@endsection

@section('content')

<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2>Yatra Packages</h2>
    <p class="lead">Explore our handpicked pilgrimage journeys across the Himalayas.</p>
</section>



<section class="treks-page py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
                <div class="filter-section bg-white p-4 shadow-sm rounded text-start">
                    <h5 class="fw-semibold">Filters</h5>
                    <form id="filter-form">
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <select class="form-select" id="location">
                                <option value="">All</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <select class="form-select" id="duration">
                                <option value="">All</option>
                                <option value="3 Days">3 Days</option>
                                <option value="4 Days">4 Days</option>
                                <option value="6 Days">6 Days</option>
                                <option value="10 Days">10 Days</option>
                                <option value="12 Days">12 Days</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="group-size" class="form-label">Max Group Size</label>
                            <select class="form-select" id="group-size">
                                <option value="">All</option>
                                <option value="12">Max 12</option>
                                <option value="15">Max 15</option>
                                <option value="20">Max 20</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Apply Filters</button>
                    </form>
                </div>
            </div>

            <!-- Yatra Packages -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" id="trek-cards-container">
                    @foreach($yatras as $yatra)
                    <div class="col">
                        <div class="card border-0 h-100 shadow-sm bg-white">
                            <img src="{{ asset('images/yatra.webp') }}" salt="">
                            <div class="card-body text-start">
                                <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                    <i class="bi bi-geo-alt-fill"></i> <span>{{ $yatra['location']['name'] }}</span>
                                </div>
                                <h5 class="card-title fw-semibold">{{ $yatra['name'] }}</h5>

                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="bi bi-calendar3"></i> {{ $yatra['days'] }}</span>
                                    <span><i class="bi bi-people-fill"></i> {{ $yatra['group'] }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-success fw-bold text-white">{{ $yatra['price'] }}</span>
                                    <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
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
    document.addEventListener('DOMContentLoaded', function () {
        const yatras = @json($yatras);

        function renderYatraCards(filtered) {
            const container = document.getElementById('trek-cards-container');
            container.innerHTML = '';
            filtered.forEach(yatra => {
                container.innerHTML += `
                <div class="col">
                    <div class="card border-0 h-100 shadow-sm bg-white">
                        <img src="{{ asset('images/yatra.webp') }}" alt="">
                        <div class="card-body text-start">
                            <div class="text-success mb-1 d-flex align-items-center gap-1 fs-6">
                                <i class="bi bi-geo-alt-fill"></i> <span>${yatra.location.name}</span>
                            </div>
                            <h5 class="card-title fw-semibold">${yatra.name}</h5>
                            <div class="d-flex justify-content-between text-muted small mb-3">
                                <span><i class="bi bi-calendar3"></i> ${yatra.days}</span>
                                <span><i class="bi bi-people-fill"></i> ${yatra.group}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success fw-bold text-white">${yatra.price}</span>
                                <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>`;
            });
        }

        renderYatraCards(yatras);

        document.getElementById('filter-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const location = document.getElementById('location').value;
            const duration = document.getElementById('duration').value;
            const groupSize = document.getElementById('group-size').value;

            const filtered = yatras.filter(item => {
                return (
                    (!location || item.location === location) &&
                    (!duration || item.days === duration) &&
                    (!groupSize || parseInt(item.group.replace('Max ', '')) <= groupSize)
                );
            });

            renderYatraCards(filtered);
        });
    });
</script>
@endsection
