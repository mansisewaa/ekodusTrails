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

    .contact .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 2rem;
        gap: 2rem;
    }

    .contact-form,
    .contact-info {
        background: white;
        padding: 2rem;
        flex: 1 1 45%;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2,
    .contact-info h2 {
        margin-bottom: 1rem;
    }

    .form-group {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea,
    .contact-form button {
        padding: 0.5rem;
        font-size: 0.9rem;
        border-radius: 6px;
        margin: 0.5rem 0;
        width: 100%;
        border: 1px solid #ccc;
    }

    /* Adjust submit button styling */
    .contact-form button[type="submit"] {
        background-color: #008060;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    input,
    select,
    textarea,
    button {
        width: 100%;
        padding: 0.75rem;
        margin: 0.5rem 0;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 0.95rem;
    }

    button[type="submit"] {
        background-color: #008060;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    .map {
        margin-top: 2rem;
        /* background-color: #e0e0e0; */
        /* height: 150px; */
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
    }

    .faq {
        padding: 2rem;
        background: #f9f9f9;
        font-size: 0.9rem;
    }

    .faq h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        color: #333;
    }

    .faq-grid {
        display: grid;
        gap: 1rem;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .faq-item {
        padding: 1rem;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
        color: #444;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .info-item svg {
        /* font-size: 1.2rem; */
        color: #008060 !important;
        /* Optional: brand color */
        min-width: 20px;
        margin-top: 8px !important;
    }

    .office-hours span {
        line-height: 1.5;
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
        grid-template-columns: repeat(2, 1fr);
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
        background-color: #28a745;
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

    h5 {
        color: #3b7d59;
    }

    @media (max-width: 768px) {

        .contact-form,
        .contact-info {
            flex: 1 1 100%;
        }

        .faq h2 {
            font-size: 1.3rem;
        }
    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}');">
    <h2>Contact Us</h2>
    <p class="lead">Have questions or ready to book your next adventure? Get in touch with our team</p>
</section>

<section class="contact">
    <div class="container">
        <div class="contact-form">
            <form id="contactForm">
                <h5>Reach Out to Our Team</h5>

                <input type="text" placeholder="Your Name" required />

                <input type="email" placeholder="Email" required />

                <input type="tel" placeholder="Phone (optional)" />

                <select>
                    <option selected disabled>Select an option</option>
                    <option>Booking</option>
                    <option>Support</option>
                    <option>General Inquiry</option>
                </select>

                <textarea placeholder="Your message"></textarea>

                <button type="submit">Send Message</button>
            </form>

        </div>

        <aside class="contact-info">
            <h5> Contact Information</h5>

            <p class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <span><strong>Address:</strong> Sankri, Dehradun, Uttarakhand</span>
            </p>

            <p class="info-item">
                <i class="fas fa-phone-alt"></i>
                <span><strong>Phone:</strong> 9999999999</span>
            </p>

            <p class="info-item">
                <i class="fas fa-envelope"></i>
                <span><strong>Email:</strong> info@exodustrails.com</span>
            </p>

            <p class="info-item office-hours">
                <i class="fas fa-clock"></i>
                <span>
                    <strong>Office Hours:</strong><br />
                    Mon - Fri: 9 AM - 6 PM<br />
                    Sat: 10 AM - 4 PM<br />
                    Sun: Closed
                </span>
            </p>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.025904579885!2d78.0550382752972!3d31.040133674554962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390901e8d268f78d%3A0x41b305857601ecf3!2sSankri%2C%20Uttarakhand%20249128!5e0!3m2!1sen!2sin!4v1682694400200!5m2!1sen!2sin"
                    width="100%"
                    height="200"
                    style="border:0; border-radius: 6px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </aside>
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