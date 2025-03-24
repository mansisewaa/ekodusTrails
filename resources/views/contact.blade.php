@extends('layouts.app')
@section('styles')
<style>
    /* .hero-section {
        background: #0d3c22;
        color: white;
        padding: 50px 0;
        text-align: center;
    } */


    .contact-details {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: -40px;
    }

    .contact-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 250px;
    }

    .contact-card svg {
        font-size: 30px;
        color: #E76F51;
        margin-bottom: 10px;
    }

    .contact-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        align-items: center;
        margin-top: 40px;
    }

    .card-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 2px 4px 10px 10px rgba(0, 0, 0, 0.1);
        color:rgb(8, 36, 21);
    }

    .card-form h4 {
        color:rgb(8, 36, 21);
        font-weight: 600;
    }

    .btn-custom {
        background-color: #E76F51;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        transition: background 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #c8563f;
    }

    @media (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
    }

    .contact-social-section{
        text-align: center;
        margin-top: 40px;
        padding: 40px 0;
        /* background: #0d3c22; */
        color:rgb(8, 36, 21);
        font-weight: 600;
    }
    .contact-social-section .social-icons a {
        /* color: #E76F51; */
        font-size: 17px;
        /* margin: 0 10px; */
        transition: color 0.3s ease;
        border-radius: 24% !important;
    }
    .contact-social-section .social-icons a:hover {
        color: white;
        text-decoration: none;
        background-color:  #E76F51;
    }
</style>
@endsection

@section('content')
<div class="hero-section">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="container py-5 pt-4">
    <div class="contact-details">
        <div class="contact-card">
            <i class="fas fa-map-marker-alt"></i>
            <p><strong>Address:</strong><br>456 Mountain Trail, Adventure Valley</p>
        </div>
        <div class="contact-card">
            <i class="fas fa-phone"></i>
            <p><strong>Phone:</strong><br>+987 654 3210</p>
        </div>
        <div class="contact-card">
            <i class="fas fa-envelope"></i>
            <p><strong>Email:</strong><br>explore@trekkingadventures.com</p>
        </div>
    </div>
    <div class="contact-social-section">
        <h2>Join Our Community of Adventurers and Get in Touch.</h2>
        <p>Chat with Us and Get a Detailed Reply to Your Queries</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <div class="contact-container">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509364!2d144.95592831550446!3d-37.817209979751824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577a2f7b64c15d!2sAdventure%20Trails!5e0!3m2!1sen!2sus!4v1625246802700!5m2!1sen!2sus"
                width="100%" height="430" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="card-form">
            <h4 class="text-center mb-3">Get in Touch</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Type your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

@endsection
