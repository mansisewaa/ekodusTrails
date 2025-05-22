@extends('layouts.master')
@section('styles')
<style>
    .subpage-hero {
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 20px;
        text-align: center;
    }

    .booking .container {
        display: flex;
        justify-content: center;
        padding: 2rem;
    }

    .form-wrapper {
        width: 100%;
        max-width: 700px;
    }

    .step-indicator {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
        position: relative;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 1;
        /* width: 60px; */
        text-align: center;
        font-size: 12px;
    }

    .step .circle {
        width: 39px;
        height: 39px;
        border-radius: 50%;
        background-color: #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #000;
    }

    .step.active .circle,
    .step.completed .circle {
        background-color: #15803d;
        color: #fff;
    }

    .step p {
        font-size: 12px !important;
    }

    .line {
        flex-grow: 1;
        height: 4px;
        background-color: #e2e8f0;
        z-index: 0;
        margin-bottom: 2rem;
    }

    .line.completed {
        background-color: #15803d;
    }


    .form-section {
        display: none;
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .form-section {
        display: none;
        /* background: white; */
        padding: 20px;
        border-radius: 2px;
        box-shadow: 0 4px 6px rgba(172, 170, 170, 0.02);
        border: 1px solid lightgrey;
    }

    .form-section.active {
        display: block;
    }

    h2 {
        color: #198754 !important;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        justify-content: flex-start !important;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"],
    input[type="date"],
    select,
    textarea {
        font-size: 14px;
        width: 100%;
        padding: 8px 12px;
        margin-bottom: 12px;
        border: 1px solid #cbd5e0;
        border-radius: 3px;
        outline: none;
        transition: all 0.2s ease;
        /* background-color: #f9fafb; */
    }

    input:focus,
    select:focus,
    textarea:focus {
        border-color: #15803d !important;
        box-shadow: 0 0 0 2px rgba(21, 128, 61, 0.2) !important;
        background-color: #fff !important;
    }

    .btn-group {
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
    }

    button {
        padding: 6px 14px;
        font-size: 14px;
        background: #15803d;
        color: white;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }

    button:disabled {
        background: #ccc;
        cursor: not-allowed;
    }

    .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 14px;
        color: #4a5568;
        margin-bottom: 15px;
    }

    .radio-group {
        display: flex;
        gap: 20px;
        margin-bottom: 12px;
        font-size: 13px;
        align-items: center;
    }

    label {
        font-size: 13px;
        color: rgb(2 2 2 / 77%);
        text-align: left;
        display: inline-block;
        width: 100%;
        font-weight: 600;
    }

    /* h2 {
        font-size: 20px;
        /* margin-bottom: 20px;
        text-align: left;
    } */

    .trek-header {
        margin-bottom: 20px;
        /* Space below the entire header block */
    }

    .trek-header h2 {
        font-size: 20px;
        margin: 0;
        /* Remove default margins */
        text-align: left;
    }

    .trek-header p {
        margin: 0;
        font-size: 13px !important;
        /* Optional: tighten spacing */
    }

    .form-section p {
        font-size: 14px;
        margin-bottom: 8px;
        text-align: left;
    }

    .form-row {
        display: flex;
        gap: 16px;
        margin-bottom: 12px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1 1 48%;
    }

    @media (max-width: 600px) {
        .form-group {
            flex: 1 1 100%;
        }
    }

    .checkbox-group label,
    .radio-group label {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }

    .checkbox-group input[type="checkbox"] {
        width: 16px;
        height: 16px;
        accent-color: #15803d;
        cursor: pointer;
    }

    .col-md-6 {
        text-align: left;
        /* Ensure left alignment */
    }


    .booking-summary {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8f9fa;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 4px 0;
        font-size: 16px;
    }

    .summary-row .label {
        font-weight: 600;
        color: #333;
    }

    .summary-row.total {
        border-top: 1px solid #ccc;
        margin-top: 8px;
        padding-top: 8px;
        font-weight: 700;
    }

    .form-check-input:checked {
        background-color: #198754 !important;
        border-color: #198754 !important;
    }


    .trek-header h2 {
        font-weight: bold;
    }

    .nav {
        background-color: #f8f9fa;
        padding: .5rem;
    }

    .nav-tabs .nav-link {
        /* border: 1px solid #ddd; */
        border-radius: 5px;
        /* padding: 6px 15px; */
        /* Smaller padding for a smaller button height */
        font-size: 12px;
        /* Smaller font size */
        font-weight: 600;
        color: #555;
        /* background-color: #f8f9fa; */
        transition: all 0.3s ease;
        width: 100%;
        text-align: center;
        /* Aligns the text in the middle */
    }

    .nav-tabs .nav-link:hover {
        color: black;
        background-color: none !important;
        border: none !important;

    }

    .nav-tabs .nav-link.active {
        color: #198754f7;
        background-color: #ffffff;
        /* border-color: #cbd2cf; */
        /* Active tab border color */
        font-weight: bold;
        border: none !important;
    }


    /* .nav-tabs .nav-link:hover {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    } */


    .nav-tabs {
        display: flex;
        justify-content: space-between;
    }

    .nav-tabs .nav-item {
        flex: 1;

    }

    .tab-pane {
        display: none;
        /* Initially hide all tab panes */
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        /* Smooth fade effect */
        visibility: hidden;
    }

    .tab-pane.active {
        display: block;
        /* Show the active tab */
        opacity: 1;
        /* Full opacity for the active tab */
        visibility: visible;
    }

    .form-check-input {
        border: var(--bs-border-width) solid #095633 !important;
    }
</style>
@endsection

@section('content')
<section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg3.jpg') }}');">
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
                <div class="line"></div>
                <div class="step" data-step="2">
                    <div class="circle">2</div>
                    <p>Personal Info</p>
                </div>
                <div class="line"></div>
                <div class="step" data-step="3">
                    <div class="circle">3</div>
                    <p>Trek Details</p>
                </div>
                <!-- <div class="line"></div>
                <div class="step" data-step="4">
                    <div class="circle">4</div>
                    <p>Upload Documents</p>
                </div> -->

                <div class="line"></div>
                <div class="step" data-step="4">
                    <div class="circle">5</div>
                    <p>Payment</p>
                </div>
            </div>


            <div class="form-section active" id="step-1">

                <div class="trek-header">
                    <h2>Account Information</h2>
                    <!-- <h2>Welcome to Exodus Trails</h2> -->
                    <small>To book your trek, please create an account or Login</small>
                </div>

                <!-- Tabs for Login or Registration -->
                <ul class="nav nav-tabs mb-3" id="accountTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">
                            Register
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">
                            Login
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Register Tab -->
                    <div class="tab-pane fade show active" id="register" role="tabpanel">
                        <form id="registerForm" onsubmit="handleRegister(); return false;">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="name" placeholder="Full Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms">
                                <label class="form-check-label" for="terms">I agree to the <span style="color:#198754;">terms and conditions</span></label>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-success btn-sm" type="submit">Continue</button>
                            </div>
                            <div class="mt-3">
                                <p class="text-center">
                                    Already have an account?&nbsp;<a href="#" class="btn btn-link" id="goToLogin">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <!-- Login Tab -->
                    <div class="tab-pane fade" id="login" role="tabpanel">
                        <form id="loginForm" onsubmit="handleLogin(); return false;">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="loginEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-success btn-sm" type="submit">Login</button>
                            </div>


                            <div class="mt-3">
                                <p class="text-center">
                                    Don't have an account?&nbsp;<a href="#" class="btn btn-link" style="display: inline;" id="goToRegister">Register</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Step 2 Personal Info -->
            <div class="form-section" id="step-2">
                <div class="trek-header">
                    <h2>Personal Information</h2>
                    <p>Please provide details for all participants. This information is important for your safety.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fullName3" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName3" placeholder="Full Name" value="{{ Auth::guard('customer')->user()->name ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="age3" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age3" placeholder="Age">
                    </div>
                </div>

                <label class="form-label">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                    <label class="form-check-label" for="other">Other</label>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state3" class="form-label">State</label>
                        <input type="text" class="form-control" id="state3" placeholder="Nationality">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nationality3" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality3" placeholder="Nationality">
                    </div>
                </div>


                <div class="mb-3">
                    <label for="address3" class="form-label">Full Address</label>
                    <textarea class="form-control" id="address3" placeholder="Full Address"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="emergencyName" class="form-label">Emergency Contact Name</label>
                        <input type="text" class="form-control" id="emergencyName" nmae="emergency_contact_name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="emergencyPhone" class="form-label">Emergency Contact Phone</label>
                        <input type="text" class="form-control" id="emergencyPhone" name="emergency_contact_phone">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="medicalInfo" class="form-label">Medical Information</label>
                    <textarea class="form-control" id="medicalInfo" placeholder="Medical Information"></textarea>
                </div>

                <div class="d-flex justify-content-end  mt-4">
                    <!-- <button class="btn btn-outline-success btn-sm" onclick="prevStep(1)">Back</button> -->
                    <button class="btn btn-success btn-sm" onclick="nextStep()">Continue</button>
                </div>
            </div>
            <!-- Step 3: Trek Details -->
            <div class="form-section" id="step-3">
                <div class="trek-header">
                    <h2>Trek Details</h2>
                    <p>Select your trek, date, and number of participants</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="trekSelect" class="form-label">Select a Trek</label>
                        <select class="form-select" id="trekSelect">
                            <option>Select a trek</option>
                            <option value="trek-1">Trek</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trekDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="trekDate">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="participants" class="form-label">Number of Participants</label>
                        <input type="number" class="form-control" id="participants" value="1" min="1" max="12">
                        <small>Maximum 12 participants per group</small>
                    </div>
                </div>
                <label for="" class="form-check-label">Additional Services</label>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="porter">
                    <label class="form-check-label" for="porter">Porter service (Rs 1500)</label>
                </div>
                <!-- <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="photography">
                    <label class="form-check-label" for="photography">Photography service ($100)</label>
                </div> -->
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="insurance">
                    <label class="form-check-label" for="insurance">Travel insurance (Rs 2000)</label>
                </div>

                <div class="mb-3">
                    <label for="specialRequests" class="form-label">Special Requests</label>
                    <textarea class="form-control" id="specialRequests" placeholder="Any dietary requirements, medical conditions, or other special requests..."></textarea>
                </div>

                <div class="d-flex justify-content-between  mt-4">
                    <button class="btn btn-outline-success btn-sm" onclick="prevStep()">Back</button>
                    <button class="btn btn-success btn-sm" onclick="nextStep()">Continue</button>
                </div>
            </div>
            <!-- Step 3: Trek Details
            <div class="form-section" id="step-4">
                <div class="trek-header">
                    <h2>Upload Documents</h2>

                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="trekSelect" class="form-label">Upload Aadhar Card</label>
                        <input type="file" class="form-control" id="aadhar_card" name="aadhar_card">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trekSelect" class="form-label">Upload Paasport Image</label>
                        <input type="file" class="form-control" id="passport_photo" name="passport_photo">
                    </div>

                </div>
                <div class="d-flex justify-content-between  mt-4">
                    <button class="btn btn-outline-success btn-sm" onclick="prevStep()">Back</button>
                    <button class="btn btn-success btn-sm" onclick="nextStep()">Continue</button>
                </div>
            </div> -->


            <!-- Step 5: Payment -->
            <div class="form-section" id="step-4">
                <div class="trek-header">
                    <h2>Payment</h2>
                    <p>Review your booking details and complete the payment to confirm your trek</p>
                </div>
                <!-- <div class="booking-summary">
                    <div class="summary-row">
                        <span class="label">Trek:</span>
                        <span class="value">Valley of Flowers Trek</span>
                    </div>
                    <div class="summary-row">
                        <span class="label">Date:</span>
                        <span class="value">July 15, 2023</span>
                    </div>
                    <div class="summary-row">
                        <span class="label">Participants:</span>
                        <span class="value">1</span>
                    </div>
                    <div class="summary-row">
                        <span class="label">Duration:</span>
                        <span class="value">6 Days</span>
                    </div>
                    <div class="summary-row total">
                        <span class="label">Total:</span>
                        <span class="value">$878.90</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod">
                        <option>Credit/Debit Card</option>
                        <option>PayPal</option>
                        <option>Bank Transfer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cardName" class="form-label">Name on Card</label>
                    <input type="text" class="form-control" id="cardName" placeholder="Name on Card">
                </div>
                <div class="mb-3">
                    <label for="cardNumber" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Card Number">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cvc" class="form-label">CVC</label>
                        <input type="text" class="form-control" id="cvc" placeholder="CVC">
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="terms2">
                    <label class="form-check-label" for="terms2">I agree to the terms and cancellation policy</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-outline-success btn-sm" onclick="prevStep()">Back</button>
                    <button class="btn btn-success btn-sm">Pay Now & Confirm Booking</button>
                </div> -->

                <div class="booking-summary">
                    <div class="summary-row">
                        <span class="label">Trek:</span>
                        <span class="value" id="trekNameDisplay">Name</span>
                        <input type="hidden" name="trek_name" id="trekName" value="Valley of Flowers Trek">
                    </div>
                    <div class="summary-row">
                        <span class="label">Date:</span>
                        <span class="value" id="trekDateDisplay">Trek Date</span>
                        <input type="hidden" name="trek_date" id="trekDate" value="2023-07-15">
                    </div>
                    <div class="summary-row">
                        <span class="label">Participants:</span>
                        <span class="value" id="participantsDisplay">1</span>
                        <input type="hidden" name="participants" id="participants" value="1">
                    </div>
                    <div class="summary-row">
                        <span class="label">Duration:</span>
                        <span class="value" id="durationDisplay">6 Days</span>
                        <input type="hidden" name="duration" id="duration" value="6 Days">
                    </div>
                    <div class="summary-row total">
                        <span class="label">Total:</span>
                        <span class="value" id="totalDisplay">$878.90</span>
                        <input type="hidden" name="total_amount" id="totalAmount" value="878.90">
                    </div>
                    <div id="additionalServicesSummary"></div>

                    <div class="summary-row total">
                        <span class="label">Total Payable:</span>
                        <span class="value" id="totalPayableDisplay">₹878.90</span>
                        <input type="hidden" name="total_payable_amount" id="totalPayableAmount" value="878.90">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod">
                        <option value="UPI" selected>UPI</option>
                    </select>
                </div>

                <div class="form-check mb-3 text-center">
                    <input type="checkbox" class="form-check-input" id="terms2">
                    <label class="form-check-label" for="terms2">I agree to the terms and cancellation policy</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-outline-success btn-sm" onclick="prevStep()">Back</button>
                    <button class="btn btn-success btn-sm">Confirm Booking</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if(Auth::guard('customer')->check())

<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById('step-1').classList.remove('active');
        document.getElementById('step-2').classList.add('active');

        // update step indicator
        document.querySelector('.step[data-step="1"]').classList.add('completed');
        document.querySelector('.step[data-step="2"]').classList.add('active');

        const step1 = document.querySelector('.step[data-step="1"]');
        const line = step1.nextElementSibling;
        if (line && line.classList.contains('line')) {
            line.classList.add('completed');
        }
    });
</script>
@endif
<script>
    document.getElementById('goToRegister').addEventListener('click', function() {
        document.getElementById('register-tab').click();
    });
    document.getElementById('goToLogin').addEventListener('click', function() {
        document.getElementById('login-tab').click();
    });
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    function handleRegister() {
        const data = {
            name: $('#fullName').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            password: $('#password').val(),
            password_confirmation: $('#confirmPassword').val(),
            terms: $('#terms').is(':checked') ? 1 : 0,
            _token: '{{ csrf_token() }}'
        };

        if (!data.name || !data.email || !data.phone || !data.password || !data.password_confirmation) {
            alert('Please fill in all fields');
            return;
        }
        if (data.password !== data.password_confirmation) {
            alert('Passwords do not match');
            return;
        }
        if (!data.terms) {
            alert('You must agree to the terms and conditions');
            return;
        }

        // console.log(data);
        $.ajax({
            url: "{{ route('customer.register') }}",
            method: 'POST',
            data: {
                name: document.getElementById('fullName').value, // Dynamically get the full name from an input field
                email: document.getElementById('email').value, // Dynamically get the email from an input field
                phone: document.getElementById('phone').value, // Dynamically get the phone number from an input field
                password: document.getElementById('password').value, // Dynamically get the password from an input field
                password_confirmation: document.getElementById('confirmPassword').value, // Dynamically get the password confirmation from an input field
                terms: document.getElementById('terms').checked ? 1 : 0, // Dynamically get whether terms are checked
                _token: '{{ csrf_token() }}' // Dynamically insert the CSRF token
            },
            success: function(res) {
                console.log(res);
                if (res.user || res.id) {
                    nextStep(1);

                } else {
                    console.log(res);
                    alert('Registration failed');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Server error occurred. Check console for details.');
            }
        });

    }

    function handleLogin() {
        const email = $('#loginEmail').val();
        const password = $('#loginPassword').val();

        if (!email || !password) {
            alert('Please fill in both email and password');
            return;
        }

        $.ajax({
            url: "{{ route('customer.login') }}", // Adjust route as needed
            method: 'POST',
            data: {
                email: email,
                password: password,
                _token: '{{ csrf_token() }}'
            },
            success: function(res) {
                if (res.authenticated) {
                    window.location.href = "{{ route('booking') }}"
                    document.getElementById('fullName3').value = res.user.name;
                    nextStep(1);
                } else {
                    console.log(res);
                    alert('Login failed: ' + res.message);
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Server error occurred. Check console for details.');
            }
        });
    }

    let currentStep = 1;

    function showStep(step) {
        // Hide all sections and show the current one
        document.querySelectorAll('.form-section').forEach(section => section.classList.remove('active'));
        document.getElementById('step-' + step).classList.add('active');

        // Update step indicators
        const steps = document.querySelectorAll('.step');
        const lines = document.querySelectorAll('.line');

        steps.forEach((s, index) => {
            s.classList.remove('active');
            s.classList.remove('completed');
            if (index < step) s.classList.add('completed'); // completed if before current step
            if (index + 1 === step) s.classList.add('active'); // current step
        });

        // Update connecting lines
        lines.forEach((line, index) => {
            if (index < step - 1) {
                line.classList.add('completed'); // mark lines before the current step as green
            } else {
                line.classList.remove('completed');
            }
        });

        currentStep = step;
    }


    function nextStep() {
        if (currentStep < 4) {
            showStep(currentStep + 1);
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            showStep(currentStep - 1);
        }
    }
    // Registration Submit
    document.querySelector('#register-tab').addEventListener('click', () => {
        document.querySelector('#register').classList.add('show', 'active');
        document.querySelector('#login').classList.remove('show', 'active');
    });

    document.querySelector('#login-tab').addEventListener('click', () => {
        document.querySelector('#login').classList.add('show', 'active');
        document.querySelector('#register').classList.remove('show', 'active');
    });
</script>

<script>
    $('#step-5 .btn-success').on('click', function(e) {
        e.preventDefault();

        if (!$('#terms2').is(':checked')) {
            alert('Please agree to the terms and conditions.');
            return;
        }

        const formData = {
            _token: "{{ csrf_token() }}", // Directly inject the token from Blade

            full_name: $('#fullName3').val(),
            age: $('#age3').val(),
            gender: $('input[name="gender"]:checked').val(),
            state: $('#state3').val(),
            nationality: $('#nationality3').val(),
            address: $('#address3').val(),
            emergency_contact_name: $('#emergencyName').val(),
            emergency_contact_phone: $('#emergencyPhone').val(),
            medical_info: $('#medicalInfo').val(),

            trek: $('#trekSelect').val(),
            trek_date: $('#trekDate').val(),
            participants: $('#participants').val(),
            porter: $('#porter').is(':checked'),
            insurance: $('#insurance').is(':checked'),
            special_requests: $('#specialRequests').val(),

            payment_method: $('#paymentMethod').val(),

        };

        $.ajax({
            url: "{{ route('submit-booking') }}",
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    alert('Booking confirmed!');

                } else {
                    alert('Failed: ' + response.message);
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Something went wrong. Please try again.');
            }
        });
    });
</script>

<script>
    const baseAmount = 878.90;
    const totalPayableDisplay = document.getElementById('totalPayableDisplay');
    const totalPayableInput = document.getElementById('totalPayableAmount');
    const servicesSummary = document.getElementById('additionalServicesSummary');

    const services = [
        { id: 'porter', label: 'Porter service', price: 1500 },
        { id: 'insurance', label: 'Travel insurance', price: 2000 },
    ];

    services.forEach(service => {
        const checkbox = document.getElementById(service.id);
        checkbox.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = baseAmount;
        let selectedServices = '';

        services.forEach(service => {
            const checkbox = document.getElementById(service.id);
            if (checkbox.checked) {
                total += service.price;
                selectedServices += `<div class="summary-row"><span class="label">${service.label}:</span><span class="value">₹${service.price}</span></div>`;
            }
        });

        servicesSummary.innerHTML = selectedServices;
        totalPayableDisplay.textContent = `₹${total.toFixed(2)}`;
        totalPayableInput.value = total.toFixed(2);
    }
    updateTotal();
</script>



@endsection
