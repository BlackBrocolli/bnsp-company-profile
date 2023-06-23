@extends('layouts.main')

@section('title', 'Blog')

@section('link')
    <!-- Favicons -->
    <link href="{{ asset('assets-dashboard/img/bag-logo.png') }}" rel="icon">
    <link href="{{ asset('assets-dashboard/img/bag-logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-landing/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-landing/css/style.css') }}" rel="stylesheet">
@endsection

@section('style')
    <style></style>
@endsection

<!-- =======================================================
  * Template Name: Flattern
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

@section('content')

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">trmc.contact@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo d-flex align-items-center">
                <!-- Uncomment below if you prefer to use an image logo -->
                {{-- <a href="/"><img src="{{ asset('assets-dashboard/img/bag-logo.png') }}" alt=""
                        class="img-fluid"></a> --}}
                <h1 class="text-light"><a href="/">Thunder Riders Motorcycle Club</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a class="active" href="{{ route('blog') }}">Blog</a></li>
                    {{-- <li><a href="testimonials.html">Testimonials</a></li> --}}
                    {{-- <li><a href="pricing.html">Pricing</a></li> --}}
                    <li><a href="/shop">Product</a></li>
                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            {{-- LOGIN BUTTON --}}
            <a href="/login" class="btn btn-sm text-white my-auto px-3" style="background-color: #f03c02">LOGIN</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('assets-landing/img/blog/blog-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Discover the Thrill of Thunder Riders Motorcycle Club</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">Thunder Riders Motorcycle Club</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2023-06-23">Jun 23, 2023</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Welcome to the thrilling world of Thunder Riders Motorcycle Club! We are a passionate
                                    community of motorcycle enthusiasts who live for the open road. Join us as we embark on
                                    unforgettable journeys, explore breathtaking landscapes, and create lifelong memories.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('assets-landing/img/blog/blog-6.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Top Motorcycle Routes for Adventurous Riders</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">Thunder Riders Motorcycle Club</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2023-06-23">Jun 23, 2023</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">2 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Calling all adventure seekers! Get ready to rev your engines and embark on the most
                                    thrilling motorcycle routes. Discover breathtaking landscapes, winding roads, and hidden
                                    gems that will leave you awe-inspired. Join Thunder Riders Motorcycle Club as we share
                                    our top picks for adventurous riders.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('assets-landing/img/blog/blog-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Safety Tips for Motorcyclists: Ride with Confidence</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">Thunder Riders Motorcycle Club</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2023-06-23">Jun 23, 2023</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">1 Comment</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Safety should always be a top priority for motorcyclists. At Thunder Riders Motorcycle
                                    Club, we believe in riding with confidence while ensuring the utmost safety on the road.
                                    In this blog post, we share essential safety tips, gear recommendations, and best
                                    practices to enhance your riding experience and protect yourself from potential risks.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('assets-landing/img/blog/blog-8.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">The Thrill of Motorcycle Racing: Join the Thunder Riders
                                    Team</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">Thunder Riders Motorcycle Club</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2023-06-23">Jun 23, 2023</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">3 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Are you a speed enthusiast? Join the Thunder Riders Motorcycle Club racing team and
                                    experience the adrenaline rush of motorcycle racing. In this blog post, we share the
                                    excitement, challenges, and opportunities that await you as a member of our racing team.
                                    Discover how you can become a part of our competitive and passionate community.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">Events <span>(10)</span></a></li>
                                    <li><a href="#">Rides <span>(5)</span></a></li>
                                    <li><a href="#">Tips &amp; Tricks <span>(8)</span></a></li>
                                    <li><a href="#">Motorcycle Maintenance <span>(12)</span></a></li>
                                    <li><a href="#">Gear &amp; Accessories <span>(15)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Articles</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets-landing/img/blog/blog-recent-6.jpg') }}" alt="">
                                    <h4><a href="blog-single.html">The Thrill of Group Riding: Exploring the Open Roads
                                            Together</a></h4>
                                    <time datetime="2023-06-23">Jun 23, 2023</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets-landing/img/blog/blog-recent-7.jpg') }}" alt="">
                                    <h4><a href="blog-single.html">Choosing the Right Motorcycle Helmet: Safety First</a>
                                    </h4>
                                    <time datetime="2023-06-22">Jun 22, 2023</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets-landing/img/blog/blog-recent-8.jpg') }}" alt="">
                                    <h4><a href="blog-single.html">Essential Gear for Long-Distance Motorcycle Trips</a>
                                    </h4>
                                    <time datetime="2023-06-21">Jun 21, 2023</time>
                                </div>
                            </div><!-- End sidebar recent posts -->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Motorcycle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Riding Gear</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Safety</a></li>
                                    <li><a href="#">Maintenance</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Group Riding</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->


                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Thunder Riders Motorcycle Club</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> trmc.contact@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog') }}">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('shop') }}">Product</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Exciting Rides</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Expert Maintenance</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Safety Measures</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Community Events</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Exclusive Membership</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Motor Club Newsletter</h4>
                        <p>Stay up to date with the latest news, events, and exclusive offers for motorcycle enthusiasts.
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>M. Noval Hidayat</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

@endsection

@section('js')
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>
@endsection
