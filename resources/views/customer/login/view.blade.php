@extends('layouts.master')
@section('styles')
    <style>

       
        .navbar-custom {
            background: #47464696 !important;
        }

        .auth-wrapper {
            min-height: 50vh;
        }
        .tab-pane input {
            margin-bottom: 10px;
        }
        .brand-title {
            font-size: 2rem;
            font-weight: bold;
        }
    
        .form-control-lg
        {
            min-height: calc(1.5em + 1rem + calc(var(--bs-border-width) * 2));
            padding: 6px 12px;
            font-size: 13px;
            border-radius: var(--bs-border-radius-lg);
        }


    </style>
@endsection

@section('content')
<!-- <section class="subpage-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; color: white; text-align: center; padding: 100px 20px;">
    <h2 class="">Exodus Trails</h2>
    <p class="lead">Authentic Himalayan adventures led by passion, purpose, and experience</p>
</section> -->
<div class="login-content">
    <div class="container-fluid auth-wrapper d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow rounded-4 p-4 border-0">
                    <div class="text-center mb-4">
                        <h3 style="color: #198754;">Welcome to Exodus Trails</h3>
                        <p class="text-muted mb-1">Adventure starts with a single step</p>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-pills nav-justified mb-4" id="authTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab">
                                Login
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" >
                                Register
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="authTabsContent">
                        <!-- Login -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <form action="{{route('customer.login')}}" method="POST">
                                @csrf
                                <!-- @csrf for Laravel -->
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" id="loginEmail" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password" id="loginPassword" placeholder="Password" required>
                                </div>
                                <button class="btn btn-lg w-100 text-white" type="submit" style="background-color: #198754;">Login</button>
                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form  action="{{route('customer.register')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" name="name" id="fullName"  placeholder="Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="number" class="form-control form-control-lg" name="phone" id="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password_confirmation" id="confirmPassword" placeholder="Confirm Password" required>
                                </div>

                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms">
                                    <label class="form-check-label" for="terms">I agree to the <span style="color:#198754;">terms and conditions</span></label>
                                </div>
                                <button type="submit" class="btn btn-lg w-100 text-white" style="background-color: #198754;">Register</button>
                            </form>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <small>Back to <a href="/" class="text-decoration-none" style="color: #198754;font-weight:600;">Home</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
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
                name: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                password: document.getElementById('password').value,
                password_confirmation: document.getElementById('confirmPassword').value,
                terms: document.getElementById('terms').checked ? 1 : 0,
                _token: '{{ csrf_token() }}'
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
</script>
@endsection
