<header class="main-header">
    <div class="logo-area">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo">
        </a>
    </div>

    <div class="header-sticky bg-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://order.chowdharys.com/">
                                    Menu
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                            </li>

                        </ul>
                    </div>

                    <div class="header-social-links">
                        <ul>
                            <!-- <li>
                                <a target="_blank" href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li> -->

                            <li>
                                <a target="_blank" href="https://www.instagram.com/chowdharys_nsr/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-btn">
                        <a href="https://order.chowdharys.com/" class="btn-default">
                            Book Now
                        </a>
                    </div>

                </div>

                <div class="navbar-toggle"></div>

            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>
</header>