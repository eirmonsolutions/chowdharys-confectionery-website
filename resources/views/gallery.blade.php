@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="gallery-banner">
    <div class="container">
        <div class="gallery-banner-content text-center">
            <h1>Our Gallery</h1>
            <p>Delicious Moments & Beautiful Memories</p>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/1.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Restaurant View</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/2.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Luxury Dining</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/3.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Fine Food</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-6 col-md-6">
                <div class="gallery-item">
                    <img src="images/4.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Family Dinner</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-6 col-md-6">
                <div class="gallery-item">
                    <img src="images/5.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Special Dishes</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/6.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Happy Customers</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/7.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Food Presentation</h4>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/8.jpeg"
                        alt="Gallery Image">

                    <div class="gallery-overlay">
                        <h4>Chef Special</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>

    .gallery-banner{
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        padding: 120px 0;
    }

    .gallery-banner-content h1{
        color: #fff;
        font-size: 60px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .gallery-banner-content p{
        color: #ddd;
        font-size: 18px;
    }

    .gallery-section{
        background: #f8f8f8;
    }

    .gallery-item{
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        cursor: pointer;
    }

    .gallery-item img{
        width: 100%;
        height: 350px;
        object-fit: cover;
        transition: 0.5s;
    }

    .gallery-overlay{
        position: absolute;
        inset: 0;
        background: linear-gradient(to top,
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.1));
        display: flex;
        align-items: flex-end;
        padding: 25px;
        opacity: 0;
        transition: 0.5s;
    }

    .gallery-overlay h4{
        color: #fff;
        margin: 0;
        transform: translateY(20px);
        transition: 0.5s;
    }

    .gallery-item:hover img{
        transform: scale(1.1);
    }

    .gallery-item:hover .gallery-overlay{
        opacity: 1;
    }

    .gallery-item:hover .gallery-overlay h4{
        transform: translateY(0);
    }

    @media(max-width:991px){

        .gallery-banner-content h1{
            font-size: 40px;
        }

        .gallery-item img{
            height: 280px;
        }

    }

</style>

@endsection