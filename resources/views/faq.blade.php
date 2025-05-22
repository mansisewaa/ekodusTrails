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

    .faq {
        padding: 2rem;
        font-family: Arial, sans-serif;
    }

    .faq h2 {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .faq-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1rem;
    }

    .faq-item {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        border-radius: 8px;
        overflow: hidden;
    }

    .faq-question {
        cursor: pointer;
        padding: 1rem;
        font-weight: bold;
        background-color: #28a745 !important;
        color: white;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        padding: 0 1rem;
        background-color: #f0fff4;
    }

    .faq-item.active .faq-answer {
        max-height: 200px;
        padding: 1rem;
    }

    .col-md-10 {
            flex: 0 0 auto;
            width: 64.333333% !important;
        }


    @media (max-width: 768px) {

        .contact-form,
        .contact-info {
            flex: 1 1 100%;
        }

        .faq h2 {
            font-size: 1.3rem;
        }
    
        .col-md-10 {
            flex: 0 0 auto;
            width: 64.333333% !important;
        }
    }
</style>
@endsection

@section('content')
<section class="subpage-hero d-flex align-items-center justify-content-center text-center" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
    <div class="container">
        <h2 class="text-white fs-1 fw-bold mb-3">Frequently Asked Questions</h2>
        <p class="lead text-white mb-0">Have questions or ready to book your next adventure? Get in touch with our team.</p>
    </div>
</section>

<section class="faq">
    <div class="container d-flex justify-content-center">
        <!-- <h2>Frequently Asked Questions</h2> -->
        <div class="col-md-10 ">
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">How do I book a hiking package?</div>
                    <div class="faq-answer">
                        You can book a hiking package through our website by choosing your preferred date and destination.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What fitness level is required for your hikes?</div>
                    <div class="faq-answer">
                        Most of our hikes are suitable for moderate fitness levels. We also offer options for beginners and advanced hikers.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What's included in the package price?</div>
                    <div class="faq-answer">
                        The package includes guided hikes, meals, accommodation, and transportation to and from the trailhead.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can you accommodate dietary restrictions?</div>
                    <div class="faq-answer">
                        Yes, we can accommodate vegetarian, vegan, gluten-free, and other dietary needs. Please mention them when booking.
                    </div>
                </div>
            </div>
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

    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            item.classList.toggle('active');
        });
    });
</script>
@endsection