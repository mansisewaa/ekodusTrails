@extends('layouts.master')

@section('styles')
<style>
    .search-bar {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    .search-bar input {
        padding: 8px 15px;
        border: 1px solid #ccc;
        border-radius: 20px;
        outline: none;
        transition: all 0.3s ease-in-out;
    }

    .search-bar input:focus {
        border-color: #ff6a00;
        box-shadow: 0 0 8px rgba(255, 105, 180, 0.3);
    }

    .treks-section {
        padding: 80px 0;
        text-align: center;
    }

    .treks-section h2 {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 40px;
    }

    .trek-card {
        position: relative;
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        cursor: pointer;
        width: 291px;
        height: 100%;
    }

    .trek-card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
    }

    .trek-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .trek-card .card-body {
        padding: 20px;
        text-align: center;
    }

    .trek-card h3 {
        font-size: 20px;
        color: #222;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .trek-card p {
        font-size: 13px;
        color: #777;
        margin-bottom: 15px;
    }

    .trek-card .btn {
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        color: #fff;
        padding: 5px 6px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: bold;
        transition: 0.3s ease-in-out;
    }

    .trek-card .btn:hover {
        /* background: linear-gradient(to right, #feb47b, #ff7e5f); */
    }

    .pagination {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
        width: 100%;
        max-width: 1200px;
    }

    .pagination a {
        padding: 8px 12px;
        margin: 0 5px;
        text-decoration: none;
        color: white;
        background-color: #ff6a00;
        border-radius: 5px;
    }

    .pagination .active {
        background-color: #ee0979;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .treks-section h2 {
            font-size: 18px;
        }

        .search-bar {
            justify-content: center;
        }

        .trek-card {
            max-width: 100%;
        }

        .trek-card img {
            height: 180px;
        }

        .pagination {
            flex-wrap: wrap;
        }

        .pagination a {
            padding: 6px 10px;
            margin: 5px;
        }

        .hero-section {
            height: 44vh;
        }

        .hero-section h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-top: 8rem;
        }

        .hero-section p {
            font-size: 16px;
            color: white;
        }

    }

    @media (max-width: 480px) {
        .search-bar input {
            width: 100%;
            max-width: 250px;
        }

        .trek-card {
            width: 100%;
        }

        .trek-card h3 {
            font-size: 16px;
        }

        .trek-card p {
            font-size: 12px;
        }

        .trek-card img {
            height: 150px;
        }
    }
</style>
@endsection

@section('content')
<div class="hero-section">
    <div class="container">
        <h1>Explore Our Treks</h1>
    </div>
</div>


<div class="treks-section">
    <div class="container">
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search for treks...">
        </div>
    </div>
    <div class="container">
        <h2>Discover Your Next Adventure</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{route('our-treks-details')}}">
                    <div class="trek-card">
                        <img src="{{ asset('images/banner1.jpg')}}" alt="Everest Base Camp">
                        <div class="card-body">
                            <h3>Everest Base Camp</h3>
                            <p>Duration: 12 Days | Difficulty: Moderate</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Langtang Valley">
                    <div class="card-body">
                        <h3>Langtang Valley</h3>
                        <p>Duration: 10 Days | Difficulty: Easy</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="trek-card">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Annapurna Circuit">
                    <div class="card-body">
                        <h3>Annapurna Circuit</h3>
                        <p>Duration: 14 Days | Difficulty: Challenging</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('search-input').addEventListener('input', function() {
        let filter = this.value.toLowerCase();
        let cards = document.querySelectorAll('.trek-card');

        cards.forEach(card => {
            let title = card.querySelector('h3').textContent.toLowerCase();
            if (title.includes(filter)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
</script>
@endsection
