@extends('layouts.app')

@section('meta_title', 'About Us | Chowdhary’s | Fresh Dairy, Snacks & Sweets in Nawanshahr, Punjab')

@section('meta_description',
'Discover fresh dairy products, delicious snacks, namkeen, sweets, and confectionery at Chowdhary’s in Nawanshahr, Punjab. Trusted for quality, freshness, and authentic taste for over 3 years.')

@section('content')

<div class="about-us bg-section">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="about-us-content">

                    <div class="section-title">

                        <h3 class="wow fadeInUp">About Us</h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Serving Freshness,
                            <span>Quality & Flavour Every Day</span>
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            For over 3 years, Chowdhary's has been a beloved food destination in the heart of Nawanshahr, Punjab. What began as a passion for serving pure, high-quality food to our community has grown into one of the most trusted names in dairy, snacks, and confectionery in the region.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            At Chowdhary's, we believe that great food starts with great ingredients. Our dairy products are sourced fresh daily, our snacks are prepared with the finest quality produce, and our confectionery selection is crafted to bring smiles to every generation — from children to grandparents.
                        </p>

                    </div>

                    <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">
                        <a href="{{ route('contact') }}" class="btn-default">
                            Get in Touch with Us
                        </a>
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="about-us-images">

                    <div class="about-image">
                        <figure class="image-anime reveal">
                            <img src="images/about-us-image-2.jpg" alt="">
                        </figure>
                    </div>

                    <div class="year-experience-circle">
                        <img src="images/year-experience-circle.svg" alt="">
                        <h2><span class="counter">3</span>+</h2>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="our-approach bg-section">
    <div class="container">

        <div class="row section-row">

            <div class="col-lg-12">

                <div class="section-title section-title-center">

                    <h3 class="wow fadeInUp">Our Approach</h3>

                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Fresh Quality & Authentic Taste
                        <span>in Every Product</span>
                    </h2>

                </div>

            </div>

        </div>

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="approach-image">

                    <div class="approach-img">
                        <figure class="image-anime">
                            <img src="images/12.jpeg" alt="">
                        </figure>
                    </div>

                    <div class="google-rating-box approach-review-box wow fadeInUp" data-wow-delay="0.2s">

                        <div class="google-rating-header">

                            <div class="google-rating-content">

                                <p>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </p>

                                <p>More Than 1K+ Trusted Clients</p>

                            </div>

                        </div>

                        <div class="review-images">

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-1.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-2.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-3.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-4.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image add-more">
                                <i class="fa-solid fa-plus"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="appraoch-content">

                    <div class="mission-vision-item wow fadeInUp">

                        <div class="mission-vision-header">

                            <div class="icon-box">
                                <img src="images/icon-mission.svg" alt="">
                            </div>

                            <div class="mission-vision-title">
                                <h3>our mission</h3>
                            </div>

                        </div>

                        <div class="mission-vision-content">

                            <p>
                                To provide fresh dairy products, delicious snacks, and quality confectionery that bring taste, happiness, and satisfaction to every customer while maintaining the highest standards of hygiene and freshness.
                            </p>

                        </div>

                    </div>

                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">

                        <div class="mission-vision-header">

                            <div class="icon-box">
                                <img src="images/icon-vision.svg" alt="">
                            </div>

                            <div class="mission-vision-title">
                                <h3>our vision</h3>
                            </div>

                        </div>

                        <div class="mission-vision-content">

                            <p>
                                To become Nawanshahr’s most trusted destination for dairy, snacks, and sweets by consistently delivering authentic flavours, premium quality, and excellent customer service.
                            </p>

                        </div>

                    </div>

                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">

                        <div class="mission-vision-header">

                            <div class="icon-box">
                                <img src="images/icon-value.svg" alt="">
                            </div>

                            <div class="mission-vision-title">
                                <h3>our value</h3>
                            </div>

                        </div>

                        <div class="mission-vision-content">

                            <p>
                                We value freshness, honesty, quality, and customer satisfaction. Every product at Chowdhary’s reflects our passion for serving the community with authentic taste and genuine care.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


<div class="why-choose-us bg-section">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="why-choose-content">

                    <div class="section-title">

                        <h3 class="wow fadeInUp">Why choose us</h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Fresh Quality &
                            <span>Authentic Taste</span>
                        </h2>

                    </div>

                    <div class="why-choose-item-list">

                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">

                            <div class="icon-box">
                                <img src="images/icon-why-choose-1.svg" alt="">
                            </div>

                            <div class="why-choose-item-content">

                                <h3>Freshness & Quality in Every Product</h3>

                                <p>
                                    We carefully select fresh ingredients and maintain high hygiene standards to ensure every dairy product, snack, and sweet delivers the best taste and quality.
                                </p>

                            </div>

                        </div>

                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">

                            <div class="icon-box">
                                <img src="images/icon-why-choose-2.svg" alt="">
                            </div>

                            <div class="why-choose-item-content">

                                <h3>Products for Every Occasion</h3>

                                <p>
                                    Whether it’s daily dairy essentials, evening snacks, festive sweets, or family treats, Chowdhary’s offers something delicious for every moment and celebration.
                                </p>

                            </div>

                        </div>

                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">

                            <div class="icon-box">
                                <img src="images/icon-why-choose-3.svg" alt="">
                            </div>

                            <div class="why-choose-item-content">

                                <h3>Traditional Taste with Modern Quality</h3>

                                <p>
                                    We proudly bring together authentic flavours and modern quality standards to create products that reflect the rich food culture of Punjab while meeting today’s expectations.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="why-choose-images">

                    <div class="why-choose-image-box-1">

                        <div class="why-choose-image wow fadeInUp">

                            <figure class="image-anime">
                                <img src="images/12.jpeg" alt="">
                            </figure>

                            <div class="why-choose-cta-box">

                                <div class="icon-box">
                                    <img src="images/icon-headset.svg" alt="">
                                </div>

                                <div class="why-choose-cta-content">
                                    <p>Got questions? we're here to help!</p>
                                </div>

                            </div>

                        </div>

                        <div class="google-rating-box wow fadeInUp" data-wow-delay="0.2s">

                            <div class="google-rating-content">

                                <p>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </p>

                                <p>More Than 1K+ Trusted Clients</p>

                            </div>

                            <div class="review-images">

                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="images/author-1.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="images/author-2.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="images/author-3.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="images/author-4.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="review-image add-more">
                                    <i class="fa-solid fa-plus"></i>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="why-choose-image-box-2">

                        <div class="why-choose-image">
                            <figure class="image-anime reveal">
                                <img src="images/new.jpeg" alt="">
                            </figure>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="what-we-do bg-section parallaxie">
    <div class="container-fluid">

        <div class="row no-gutters align-items-center">

            <div class="col-lg-6">

                <div class="what-we-video"></div>

            </div>

            <div class="col-lg-6">

                <div class="what-we-content">

                    <div class="section-title">

                        <h3 class="wow fadeInUp">What we do</h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Where Everyday Food Becomes
                            <span>Something Special</span>
                        </h2>

                    </div>

                    <div class="what-we-list">

                        <div class="what-we-item wow fadeInUp" data-wow-delay="0.2s">

                            <div class="what-we-header">
                                <h4>Fresh & Nutritious Dairy Products</h4>
                            </div>

                            <div class="what-we-body">
                                <p>
                                    Our dairy range includes fresh milk, paneer, curd,
                                    and more — all sourced to preserve natural goodness
                                    and deliver real nutrition to your table every morning.
                                </p>
                            </div>

                        </div>

                        <div class="what-we-item wow fadeInUp" data-wow-delay="0.4s">

                            <div class="what-we-header">
                                <h4>Bold, Flavourful Snacks</h4>
                            </div>

                            <div class="what-we-body">
                                <p>
                                    From crispy namkeen to satisfying packaged snacks,
                                    our range is curated to offer genuine flavour and value.
                                    Perfect for every occasion, big or small.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="what-we-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ route('contact') }}" class="btn-default">
                            Contact Us to Learn More
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



<div class="our-testimonials bg-section dark-section">
    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <div class="testimonials-content">

                    <div class="section-title">

                        <h3 class="wow fadeInUp">Our testimonials</h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            What Our Customers Say
                            <span>About us</span>
                        </h2>

                    </div>

                    <div class="testimonial-slider">

                        <div class="swiper">

                            <div class="swiper-wrapper" data-cursor-text="Drag">

                                <div class="swiper-slide">

                                    <div class="testimonial-item">

                                        <div class="testimonial-item-content">

                                            <p>
                                                "Chowdhary's is my go-to shop in Nawanshahr. Their fresh paneer and lassi are absolutely unmatched. The quality is always consistent and the staff is so friendly."
                                            </p>

                                        </div>

                                        <div class="testimonial-author">

                                            <div class="author-content">
                                                <h3>Gurpreet Singh</h3>
                                                <p>Regular Customer, Nawanshahr</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="testimonial-item">

                                        <div class="testimonial-item-content">

                                            <p>
                                                "I love stopping by Chowdhary's after work. Their namkeen and snacks are the best in the area and the sweets are perfect for gifting during festivals. I highly recommend it!"
                                            </p>

                                        </div>

                                        <div class="testimonial-author">

                                            <div class="author-content">
                                                <h3>Simran Kaur</h3>
                                                <p>Local Customer</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="testimonial-item">

                                        <div class="testimonial-item-content">

                                            <p>
                                                "We have been regular customers for over two years now. The dairy products are always fresh and the confectionery section has the most amazing variety. A true gem in our city!"
                                            </p>

                                        </div>

                                        <div class="testimonial-author">

                                            <div class="author-content">
                                                <h3>Rajinder Sharma</h3>
                                                <p>Local Customer</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="testimonials-counter-list">

                        <div class="testimonial-counter-item">

                            <div class="testimonial-counter-header">

                                <div class="icon-box">
                                    <img src="images/icon-testimonial-counter-1.svg" alt="">
                                </div>

                                <div class="testimonial-counter-title">
                                    <h2><span class="counter">15</span>K+</h2>
                                </div>

                            </div>

                            <div class="testimonial-counter-body">
                                <p>Products Delivered</p>
                            </div>

                        </div>

                        <div class="testimonial-counter-item">

                            <div class="testimonial-counter-header">

                                <div class="icon-box">
                                    <img src="images/icon-testimonial-counter-2.svg" alt="">
                                </div>

                                <div class="testimonial-counter-title">
                                    <h2><span class="counter">98</span>%</h2>
                                </div>

                            </div>

                            <div class="testimonial-counter-body">
                                <p>Customer Satisfaction</p>
                            </div>

                        </div>

                        <div class="testimonial-counter-item">

                            <div class="testimonial-counter-header">

                                <div class="icon-box">
                                    <img src="images/icon-testimonial-counter-3.svg" alt="">
                                </div>

                                <div class="testimonial-counter-title">
                                    <h2><span class="counter">25</span>+</h2>
                                </div>

                            </div>

                            <div class="testimonial-counter-body">
                                <p>Years of Experience</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="testimonials-image wow fadeInUp" data-wow-delay="0.2s">

                    <div class="testimonial-img">
                        <figure class="image-anime">
                            <img src="images/15.jpeg" alt="">
                        </figure>
                    </div>

                    <div class="why-choose-cta-box testimonial-cta-box">

                        <div class="icon-box">
                            <img src="images/icon-headset.svg" alt="">
                        </div>

                        <div class="why-choose-cta-content">
                            <p>Need Answers? Let's Clear Things Up For You!</p>
                            <h3>
                                <a href="tel:+919115554066">
                                    +91 91155 54066
                                </a>
                            </h3>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="our-faqs bg-section">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="faqs-content">

                    <div class="section-title">

                        <h3 class="wow fadeInUp">
                            frequently Asked Questions
                        </h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Have questions? we've got crumbly
                            <span>kindly answers!</span>
                        </h2>

                    </div>

                    <div class="google-rating-box faq-cta-box wow fadeInUp" data-wow-delay="0.2s">

                        <div class="google-rating-header">

                            <div class="google-rating-content">

                                <p>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </p>

                                <p>More Than 1K+ Trusted Clients</p>

                            </div>

                        </div>

                        <div class="review-images">

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-1.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-2.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-3.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image">
                                <figure class="image-anime">
                                    <img src="images/author-4.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-image add-more">
                                <i class="fa-solid fa-plus"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="faq-accordion" id="accordion">

                    <div class="accordion-item wow fadeInUp">

                        <h2 class="accordion-header" id="heading1">

                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse1"
                                aria-expanded="true"
                                aria-controls="collapse1">

                                What products can I buy at Chowdhary’s in Nawanshahr?

                            </button>

                        </h2>

                        <div id="collapse1"
                            class="accordion-collapse collapse show"
                            aria-labelledby="heading1"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">

                                <p>
                                    At Chowdhary’s, we offer a wide range of fresh dairy products, snacks, namkeen, confectionery items, sweets, beverages, and daily food essentials for the whole family.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">

                        <h2 class="accordion-header" id="heading2">

                            <button class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse2"
                                aria-expanded="false"
                                aria-controls="collapse2">

                                Are your dairy products fresh and made daily?
                            </button>

                        </h2>

                        <div id="collapse2"
                            class="accordion-collapse collapse "
                            aria-labelledby="heading2"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">

                                <p>
                                    Yes, we source and prepare our dairy products fresh daily to ensure the highest quality, purity, and taste for our customers in Nawanshahr and nearby areas.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">

                        <h2 class="accordion-header" id="heading3">

                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse3"
                                aria-expanded="false"
                                aria-controls="collapse3">

                                Do you offer traditional Punjabi sweets and snacks?

                            </button>

                        </h2>

                        <div id="collapse3"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading3"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">

                                <p>
                                    Absolutely! We specialise in authentic Punjabi flavours, including traditional sweets, namkeen, and freshly prepared snacks loved by customers across Punjab.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">

                        <h2 class="accordion-header" id="heading4">

                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse4"
                                aria-expanded="false"
                                aria-controls="collapse4">

                                Is Chowdhary’s suitable for family shopping?

                            </button>

                        </h2>

                        <div id="collapse4"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading4"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">

                                <p>
                                    Yes, Chowdhary’s is a family-friendly food destination where customers can enjoy quality dairy, snacks, sweets, and beverages all under one roof.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">

                        <h2 class="accordion-header" id="heading5">

                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse5"
                                aria-expanded="false"
                                aria-controls="collapse5">

                                Where is Chowdhary’s located in Nawanshahr?

                            </button>

                        </h2>

                        <div id="collapse5"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading5"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">

                                <p>
                                    Chowdhary’s is conveniently located in Nawanshahr, Punjab, making it easy for locals and visitors to enjoy fresh dairy products, delicious snacks, and handcrafted sweets anytime.
                                </p>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>
</div>

@endsection