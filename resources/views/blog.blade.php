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

    h6 {
        font-size: 16px !important;
    }

    p {
        font-size: 14px !important;
    }

    .filter-section {
        text-align: left;
    }

    .card {
        border-radius: 1rem;
        transition: all 0.3s ease;
        border: 1px solid #80808026;
        border-radius: 7px !important;
    }

    .card:hover {
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-top-left-radius: 7px !important;
        border-top-right-radius: 7px !important;
        object-fit: cover;
        height: 200px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start !important;
        text-align: start !important;
        gap: -12px;
    }

    .filter {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg3.jpg') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2 class="">Our Blogs</h2>
    <p class="lead">Insights, tips, and stories from the Himalayan trails</p>
</section>

<section class="blogs-page py-5 bg-light">
    <div class="container my-5">
        <!-- Filter and Search (Top) -->
        <div class="row filter mb-4 align-items-end">
            <div class="col-md-3 mb-2">
                <input type="text" class="form-control" placeholder="Search blogs...">
            </div>
            <div class="col-md-1 mb-2">
                <button class="btn btn-success w-100"> <i class="fa fa-search"></i> </button>
            </div>
        </div>
        <div class="row">
            <!-- Blog Card 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/things.webp') }}" class="card-img-top" alt="Trekking Essentials">
                    <div class="card-body text-start">
                        <small class="text-muted d-block mb-2">
                            May 10, 2023 &nbsp; • &nbsp; <span class="text-success fw-semibold">Trekking Tips</span>
                        </small>
                        <h6 class="card-title fw-bold">Essentials to Pack for Your Himalayan Trek</h6>
                        <p class="card-text text-muted">Preparing for a Himalayan trek? These essential items that will make your journey comfortable and safe.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <small class="text-muted">
                                <span class="text-success fw-semibold">By Vipin Panwar</span>
                            </small>
                            <a href="{{route('blog-details')}}" class="text-success fw-semibold text-decoration-none">Read More &nbsp;<i class="bi bi-arrow-right "></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/vof.jpeg') }}" class="card-img-top" alt="Valley of Flowers">
                    <div class="card-body text-start">
                        <small class="text-muted d-block mb-2">
                            May 14, 2023 &nbsp; • &nbsp; <span class="text-success fw-semibold">Destination</span>
                        </small>
                        <h6 class="card-title fw-bold">The Best Time to Visit Valley of Flowers</h6>
                        <p class="card-text text-muted">Learn about the optimal seasons and months to experience the Valley of Flowers in full bloom glory.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <small class="text-muted">
                                <span class="text-success fw-semibold">By Vipin Panwar</span>
                            </small>
                            <a href="#" class="text-success fw-semibold text-decoration-none">Read More &nbsp;<i class="bi bi-arrow-right "></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/sickness.webp') }}" class="card-img-top" alt="Altitude Sickness">
                    <div class="card-body text-start">
                        <small class="text-muted d-block mb-2">
                            May 18, 2023 &nbsp; • &nbsp; <span class="text-success fw-semibold">Health & Safety</span>
                        </small>
                        <h6 class="card-title fw-bold">Altitude Sickness: Symptoms and Prevention</h6>
                        <p class="card-text text-muted">Altitude sickness can affect anyone. Learn how to recognize the symptoms.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <small class="text-muted">
                                <span class="text-success fw-semibold">By Vipin Panwar</span>
                            </small>
                            <a href="#" class="text-success fw-semibold text-decoration-none">Read More &nbsp;<i class="bi bi-arrow-right "></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 4 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/villages.webp') }}" class="card-img-top" alt="Himalayan Culture">
                    <div class="card-body text-start">
                        <small class="text-muted d-block mb-2">
                            May 21, 2023 &nbsp; • &nbsp; <span class="text-success fw-semibold">Culture</span>
                        </small>
                        <h6 class="card-title fw-bold">The Cultural Heritage of Himalayan Villages</h6>
                        <p class="card-text text-muted">Discover rich cultural traditions, festivals, and lifestyle of the communities living in the Himalayan regions.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <small class="text-muted">
                                <span class="text-success fw-semibold">By Vipin Panwar</span>
                            </small>
                            <a href="#" class="text-success fw-semibold text-decoration-none">Read More &nbsp;<i class="bi bi-arrow-right "></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 5 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/sustainable-trekking.jpeg') }}" class="card-img-top" alt="Sustainable Trekking">
                    <div class="card-body text-start">
                        <small class="text-muted d-block mb-2">
                            May 29, 2023 &nbsp; • &nbsp; <span class="text-success fw-semibold">Environment</span>
                        </small>
                        <h6 class="card-title fw-bold">Sustainable Trekking: Leave No Trace Principles</h6>
                        <p class="card-text text-muted">Learn how to minimize your environmental impact while trekking in the fragile Himalayan ecosystem.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <small class="text-muted">
                                <span class="text-success fw-semibold">By Vipin Panwar</span>
                            </small>
                            <a href="#" class="text-success fw-semibold text-decoration-none">Read More &nbsp;<i class="bi bi-arrow-right "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination soft-pagination">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </nav>
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
@endsection
