@extends('layouts.app')

@section('content')

<style>



</style>

<section class="menu-page">

    <div class="container">

        <div class="row">

            <!-- LEFT SIDEBAR -->
            <div class="col-lg-4">

                <div class="menu-sidebar">

                    <h3>
                        {{ $category->name }} Menu
                    </h3>

                    <div class="sidebar-line"></div>

                    @foreach($category->subCategories as $sub)

                        <a href="#sub{{ $sub->id }}"
                           class="subcategory-link">

                            {{ $sub->name }}

                        </a>

                    @endforeach

                </div>

            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-8">

                <!-- Banner Image -->
                <div class="menu-detail-banner">

                    <img src="{{ asset('images/about-us-image-1.jpg') }}"
                         alt="">

                </div>

                <!-- LOOP SUB CATEGORIES -->
                @foreach($category->subCategories as $sub)

                    <div id="sub{{ $sub->id }}"
                         class="mb-5">

                        <h2 class="menu-title">

                            {{ $sub->name }} Items

                        </h2>

                        <!-- ITEMS -->
                        @foreach($sub->items as $item)

                            <div class="menu-item">

                                <div class="item-box">

                                    <div>

                                        <div class="item-name">

                                            {{ $item->name }}

                                        </div>

                                        <div class="item-desc">

                                            Fresh and delicious item prepared
                                            with premium ingredients.

                                        </div>

                                    </div>

                                    <div class="item-price">

                                        ₹{{ $item->price }}

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

@endsection