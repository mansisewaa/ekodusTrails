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

    .booking .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 2rem;
        gap: 2rem;
    }
    .step-indicator {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin-bottom: 40px;
    /* padding: 0 10%; */
    }

    .step-indicator::before {
    content: "";
    position: absolute;
    top: 15px;
    left: 10%;
    right: 10%;
    height: 2px;
    background-color: #e2e8f0;
    z-index: 0;
    }

    .step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
    }

    .step .circle {
    width: 40px;
    height: 40px;
    font-weight: bold;
    font-size: 16px;
    border-radius: 50%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #e2e8f0;
    color: #000;
    transition: background-color 0.3s, color 0.3s;
    }

    .step.active .circle {
    background-color: #15803d;
    color: white;
    }

    .step p {
    margin-top: 8px;
    font-size: 15px;
    color: #2d3748;
    }


    .form-section {
      display: none;
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-section.active {
      display: block;
    }
    input, select, textarea {
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn-group {
      display: flex;
      justify-content: space-between;
    }
    button {
      padding: 10px 20px;
      border: none;
      background: #15803d;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    button:disabled {
      background: #ccc;
    }
    .checkbox-group {
      margin-bottom: 15px;
    }


</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}');">
    <h2>Book Your Trek</h2>
    <p class="lead">Start your Himalayan adventure with Exodus Trails</p>
</section>

<section class="booking">
    <div class="container">
    <div class="form-wrapper" style="width: 100%; max-width: 800px; margin: auto;">
    <div class="step-indicator">
    <div class="step active" data-step="1">
      <div class="circle">1</div>
      <p>Account</p>
    </div>
    <div class="step" data-step="2">
      <div class="circle">2</div>
      <p>Trek Details</p>
    </div>
    <div class="step" data-step="3">
      <div class="circle">3</div>
      <p>Personal Info</p>
    </div>
    <div class="step" data-step="4">
      <div class="circle">4</div>
      <p>Payment</p>
    </div>
  </div>

  <!-- Account Info -->
  <div class="form-section active" id="step-1">
    <h2>Account Information</h2>
    <input type="text" placeholder="Full Name">
    <input type="text" placeholder="Phone Number">
    <input type="email" placeholder="Email Address">
    <input type="password" placeholder="Password">
    <input type="password" placeholder="Confirm Password">
    <div class="checkbox-group">
      <input type="checkbox" id="terms1">
      <label for="terms1"> I agree to the terms and conditions</label>
    </div>
    <div class="btn-group">
      <button disabled>Cancel</button>
      <button onclick="nextStep(1)">Continue</button>
    </div>
  </div>

  <!-- Trek Details -->
  <div class="form-section" id="step-2">
    <h2>Trek Details</h2>
    <select><option>Select a trek</option></select>
    <input type="date">
    <input type="number" value="1" min="1" max="12">
    <div class="checkbox-group">
      <label><input type="checkbox"> Porter service ($50/day)</label><br>
      <label><input type="checkbox"> Photography service ($100)</label><br>
      <label><input type="checkbox"> Travel insurance ($75)</label>
    </div>
    <textarea placeholder="Special Requests..."></textarea>
    <div class="btn-group">
      <button onclick="prevStep(2)">Back</button>
      <button onclick="nextStep(2)">Continue</button>
    </div>
  </div>

  <!-- Personal Info -->
  <div class="form-section" id="step-3">
    <h2>Personal Information</h2>
    <input type="text" placeholder="Full Name">
    <input type="number" placeholder="Age">
    <select><option>Male</option><option>Female</option><option>Other</option></select>
    <input type="text" placeholder="Nationality">
    <textarea placeholder="Full Address"></textarea>
    <input type="text" placeholder="Emergency Contact Name">
    <input type="text" placeholder="Emergency Contact Phone">
    <textarea placeholder="Medical Information"></textarea>
    <div class="btn-group">
      <button onclick="prevStep(3)">Back</button>
      <button onclick="nextStep(3)">Continue</button>
    </div>
  </div>

  <!-- Payment -->
  <div class="form-section" id="step-4">
    <h2>Payment</h2>
    <p>Trek: Valley of Flowers Trek</p>
    <p>Date: July 15, 2023</p>
    <p>Participants: 1</p>
    <p>Duration: 6 Days</p>
    <p>Total: $878.90</p>
    <select>
      <option>Credit/Debit Card</option>
      <option>PayPal</option>
      <option>Bank Transfer</option>
    </select>
    <input type="text" placeholder="Name on Card">
    <input type="text" placeholder="Card Number">
    <input type="text" placeholder="Expiry Date">
    <input type="text" placeholder="CVC">
    <div class="checkbox-group">
      <input type="checkbox" id="terms2">
      <label for="terms2"> I agree to the terms and cancellation policy</label>
    </div>
    <div class="btn-group">
      <button onclick="prevStep(4)">Back</button>
      <button>Pay Now & Confirm Booking</button>
    </div>
  </div>
    </div>
</div>
</section>

@endsection

@section('scripts')
<script>
    function nextStep(current) {
      document.getElementById(`step-${current}`).classList.remove('active');
      document.getElementById(`step-${current + 1}`).classList.add('active');
      document.querySelector(`.step[data-step='${current}']`).classList.remove('active');
      document.querySelector(`.step[data-step='${current + 1}']`).classList.add('active');
    }

    function prevStep(current) {
      document.getElementById(`step-${current}`).classList.remove('active');
      document.getElementById(`step-${current - 1}`).classList.add('active');
      document.querySelector(`.step[data-step='${current}']`).classList.remove('active');
      document.querySelector(`.step[data-step='${current - 1}']`).classList.add('active');
    }
  </script>
@endsection
