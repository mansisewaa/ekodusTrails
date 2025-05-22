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

    .blog-content {
        text-align:start;
    }

    .blog-content h3 {
        font-size: 25px;
        font-weight: bold;
    }

    .blog-content p {
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .blog-content ul {
        padding-left: 1.5rem;
    }

    .blog-content ul li {
        margin-bottom: 10px;
        line-height: 1.6;
        margin-left: 2rem;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: 20px 0;
    }

    .blog-writter {
        padding: 1rem;
        --tw-bg-opacity: 5;
        background-color: rgb(25 135 84 / 4%);
    }

    .more-blogs {
        text-align: start;
    }


    .more-blogs li {
        list-style: none;
        border-bottom: 1px solid #19875438;
    
    }

    .more-blogs h5 {
        font-size: 22px;
        /* margin-top: 30px; */
        font-weight: bold;
    }

    .more-blogs p {
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    
    .more-blogs ul li {
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .more-blogs i {
        font-size: 25px;
    }

    .more-blogs .info {
        margin-top: 0.2rem;
        margin-left: 0.2rem;
    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/things.webp') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2 class="">Essentials to Pack for Your Himalayan Trek</h2>
    <p class="mt-3 mb-0 text-white-50 small">
        <span class="text-white fw-semibold">May 10, 2023 &nbsp; • &nbsp; Trekking Tips</span>
        <span class="fw-semibold text-white"> &nbsp;• &nbsp;Team Exodus Trails</span>
    </p>
</section>

<section class="blogs-page py-5 bg-light">
    <div class="container my-5">
        
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <div class="blog-content">
                    <!-- <img src="{{ asset('images/things.webp') }}" alt="Essentials to Pack" class="img-fluid"> -->

                    <h3>Why Packing Right Matters</h3>
                    <p>
                        Trekking in the Himalayas is a life-changing experience—but it also demands careful preparation.
                        The terrain, weather, and remote locations require you to be self-sufficient while staying lightweight.
                        Whether you're going on a multi-day trek or a shorter hike, packing smart can make your adventure
                        safer and more enjoyable.
                    </p>

                    <h3>Essential Items to Pack</h3>
                    <ul>
                        <li><strong>Backpack:</strong> A durable, comfortable 50-65L backpack with a rain cover.</li>
                        <li><strong>Clothing Layers:</strong> Base layer, insulating fleece/down, and waterproof outer shell.</li>
                        <li><strong>Footwear:</strong> Sturdy trekking boots, plus extra socks and sandals for camp use.</li>
                        <li><strong>Sleeping Gear:</strong> Sleeping bag rated for sub-zero temperatures (if camping).</li>
                        <li><strong>Health & Hygiene:</strong> Personal medications, toiletries, wet wipes, sunscreen, and lip balm.</li>
                        <li><strong>Navigation Tools:</strong> Map, compass, or a GPS-enabled device.</li>
                        <li><strong>First Aid Kit:</strong> Include essentials like band-aids, antiseptics, and altitude sickness meds.</li>
                        <li><strong>Snacks & Hydration:</strong> Energy bars, trail mix, a reusable water bottle or hydration bladder.</li>
                    </ul>

                    <h3>Optional but Useful</h3>
                    <ul>
                        <li>Trekking poles for joint support on steep trails</li>
                        <li>Headlamp or flashlight with extra batteries</li>
                        <li>Power bank for charging devices</li>
                        <li>Lightweight camp towel</li>
                    </ul>

                    <h3>Final Thoughts</h3>
                    <p>
                        Packing for a Himalayan trek doesn’t mean carrying everything you can. It means carrying everything you need—and nothing more.
                        Test your gear beforehand, organize with packing cubes or dry bags, and always double-check the weather and trail conditions.
                        A well-packed bag is your best companion in the mountains.
                    </p>
                </div>
                <div class="blog-writter">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/avatar2.jpeg') }}" alt="Author" class="img-fluid rounded-circle me-3" style="width: 50px; height: 50px;">
                            <div class="info align-items-start">
                                <h6 class="fw-bold mb-0">Team Exodus Trails</h6>
                                <small class="text-muted">May 10, 2023</small>
                            </div>
                        </div>
                        <div class="socials">
                            <a href="#" class="text-success me-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-success me-2 ml-2"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-success me-2 ml-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-success me-2 ml-2"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="more-blogs bg-white p-3 rounded shadow-sm">
                    <h5 class="fw-bold mb-3" style="color: #198754;">More Blogs</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-file-earmark-text-fill text-success me-2 mt-1"></i>
                            <div class="info">
                                <a href="#" class="fw-semibold text-dark text-decoration-none d-block">The Best Time to Visit Valley of Flowers</a>
                                <small class="text-muted">by Team Himalayan Trails</small>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-file-earmark-text-fill text-success me-2 mt-1"></i>
                            <div class="info">
                                <a href="#" class="fw-semibold text-dark text-decoration-none d-block">Altitude Sickness: Symptoms and Prevention</a>
                                <small class="text-muted">by Team Himalayan Trails</small>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-file-earmark-text-fill text-success me-2 mt-1"></i>
                            <div class="info">
                                <a href="#" class="fw-semibold text-dark text-decoration-none d-block">Sustainable Trekking Tips</a>
                                <small class="text-muted">by Team Himalayan Trails</small>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-file-earmark-text-fill text-success me-2 mt-1"></i>
                            <div class="info">
                                <a href="#" class="fw-semibold text-dark text-decoration-none d-block">The Cultural Heritage of Himalayan Villages</a>
                                <small class="text-muted">by Team Himalayan Trails</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection
