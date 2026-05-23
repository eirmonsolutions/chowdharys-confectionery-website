@extends('layouts.app')

@section('content')

    <!-- Contact Us Section -->
    <section class="contact-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="fw-bold">Contact Us</h1>
                <p class="text-muted">Feel free to contact us anytime</p>
            </div>

            <div class="row g-4">

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-box">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Your Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                        required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number"
                                        required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject"
                                        required>
                                </div>

                                <div class="col-12 mb-4">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" rows="6" placeholder="Write Your Message"
                                        required></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">

                                        <button type="submit" class="btn-default border-0">
                                            Send Message
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="info-box">

                        <div class="overlay"></div>

                        <div class="info-content">

                            <span class="contact-tag">Contact Info</span>

                            <h3 class="info-title">
                                Visit Our Restaurant
                            </h3>

                            <p class="info-text">
                                Experience delicious food, cozy atmosphere,
                                and unforgettable dining moments with us.
                            </p>

                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div>
                                    <h6>Address</h6>
                                    <p>Opp. Sarb Hospital, Chandigarh Road, Nawanshahr, Punjab, India</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div>
                                    <h6>Phone</h6>
                                    <p><a href="tel:+919115554066">+91 91155 54066</a></p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>

                                <div>
                                    <h6>Email</h6>
                                    <p><a href="mailto:achowdharys.nsr@gmail.com">achowdharys.nsr@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>

                                <div>
                                    <h6>Working Hours</h6>
                                    <p>Mon - Sun : 9AM - 10PM</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </section>

    <style>
        .contact-section {
            background: #f8f9fa;
        }

        .contact-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .info-box {
            position: relative;
            background: url('https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=1974&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            padding: 20px 20px;
            border-radius: 25px;
            overflow: hidden;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.65),
                    rgba(0, 0, 0, 0.85));
        }

        .info-content {
            position: relative;
            z-index: 2;
            color: #fff;
            width: 100%;
        }

        .contact-tag {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 14px;
            margin-bottom: 20px;
            backdrop-filter: blur(5px);
        }

        .info-title {
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 15px;
            color: #fff;
        }

        .info-text {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            margin-bottom: 10px;
        }

        .icon {
            width: 55px;
            height: 55px;
            min-width: 55px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            backdrop-filter: blur(6px);
        }

        .contact-item h6 {
            font-size: 18px;
            margin-bottom: 6px;
            font-weight: 600;
            color: #fff;
        }

        .contact-item p a {
            margin: 0;
            color: rgba(255, 255, 255, 0.8);
        }

        @media(max-width:991px) {

            .info-box {
                min-height: auto;
            }

            .info-title {
                font-size: 30px;
            }

        }

        .form-control {
            height: 50px;
            border-radius: 10px;
        }

        textarea.form-control {
            height: auto;
        }

        .btn-dark {
            border-radius: 10px;
        }
    </style>

@endsection