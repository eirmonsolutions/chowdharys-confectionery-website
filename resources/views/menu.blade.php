@extends('layouts.app')

@section('meta_title', 'Our Menu |  Chowdhary’s Menu | Snacks, Ice Cream & Confectionery in Nawanshahr')

@section('meta_description',
' Explore Chowdhary’s menu in Nawanshahr featuring delicious snacks, creamy ice creams, fresh dairy products, bakery treats, and confectionery loved by local families.')

@section('content')

    <style>
        /* Banner */
        .menu-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)),
                url("{{ asset('images/banner-img/img-1.jpg') }}");
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            text-align: center;
            color: #fff;
        }
    </style>

    <!-- Banner -->
    <section class="menu-banner">
        <div class="container">
            <h1>Our Menu</h1>
            <p>Fresh Taste • Premium Quality • Delicious Food</p>
        </div>
    </section>

    <!-- Categories -->
    <section class="category-section">

        <div class="container">

            <div class="category-title">
                <h2>Food Categories</h2>
            </div>

            <div class="row g-4">

                @foreach($categories as $category)

                    <div class="col-lg-4 col-md-6">

                        <div class="category-card">

                            <div class="category-image">

                                <img src="{{ asset('images/category.jpg') }}" alt="">

                                <div class="category-overlay"></div>

                            </div>

                            <div class="category-content">

                                <h3>{{ $category->name }}</h3>

                                <p>
                                    Explore delicious {{ $category->name }}
                                    items made with fresh ingredients.
                                </p>

                                <a href="{{ route('menu.details', $category->id) }}" class="menu-btn">

                                    View Menu

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endsection