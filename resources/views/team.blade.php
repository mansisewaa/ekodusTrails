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
        width: 183px;
        height: 180px;
        object-fit: cover;
        /* border: 5px solid #f0f0f0; */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .card:hover .team-img {
        transform: scale(1.05);
    }

    .hover-shadow:hover {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1) !important;
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


    @media (max-width: 768px) {
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
    <h2 class="mb-3">Meet Our Team</h2>
    <p class="lead mx-auto" style="max-width: 700px; font-weight: 300; font-size: 1.2rem;">
        Guided by passion, driven by purpose – discover the people behind your Himalayan adventures.
    </p>
</section>

<!-- Meet Our Team -->
<section class="team  py-5 text-center">
    <div class="container">
        <!-- <h4 class="fw-bold mb-4" data-aos="fade-up">Meet Our Team</h4> -->
        <p class="team-info mb-5 mx-auto" data-aos="fade-up" data-aos-delay="100" style="max-width: 700px;">
            At the heart of Exodus Trails are our expert guides and dedicated support staff.<br>
            Their deep-rooted local knowledge and love for the mountains ensure your adventure is not just safe, but truly enriching and unforgettable.
        </p>
        <div class="row justify-content-center g-4">
            @php
            $team = [
            ['name' => 'Vipin Panwar', 'title' => 'Founder', 'img' => 'vipin-founder.jpg'],
            ['name' => 'Pramod Panwar', 'title' => 'Co-Founder', 'img' => 'co-founder.jpg'],
            ['name' => 'Vikram Singh', 'title' => 'Senior Trek Guide', 'img' => 'team3.jpg'],
            ['name' => 'Trek Leader', 'title' => 'Marketing Manager', 'img' => 'team5.jpg'],
            ['name' => 'Trek Leader', 'title' => 'Marketing Manager', 'img' => 'team6.jpg'],
            ['name' => 'Trek Leader', 'title' => 'Marketing Manager', 'img' => 'team4.jpg'],
            ['name' => 'Trek Leader', 'title' => 'Marketing Manager', 'img' => 'team8.jpg'],
            ];
            @endphp

            @foreach ($team as $index => $member)
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                <div class="card border-0 shadow-sm rounded-4 py-4 px-3 h-100 hover-shadow" style="background: #ffffff;">
                    <img src="{{ asset('images/team/' . $member['img']) }}" class="rounded-circle mb-3 mx-auto team-img" alt="{{ $member['name'] }}" />
                    <h6 class="fw-bold mb-1">{{ $member['name'] }}</h6>
                    <p class="small text-muted mb-0">{{ $member['title'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
@section('scripts')


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