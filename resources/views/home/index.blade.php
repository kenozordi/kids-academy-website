@extends('layout.layout')

@section('content')
    
<!-- start of hero -->
<section class="static-hero-s3">
    <div class="hero-container">
        <div class="hero-inner">
            <div class="container-fluid">
                <div class="hero-content">
                    <div data-swiper-parallax="300" class="slide-title">
                        <h2>
                            ...At DKA, Every Child is a Success"
                            <span>
                                <small id='changing'></small>
                                <i class="s1"></i>
                                <i class="s2"></i>
                                <i class="s3"></i>
                                <i class="s4"></i>
                            </span>
                        </h2>
                    </div>
                    <div data-swiper-parallax="400" class="slide-text">
                        <p>Welcome to where Curiosity Meets Confidence; 
                        A place where Learning, Growth, and Community Thrive.
                        Welcome to Distinguished Kids Academy

                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div data-swiper-parallax="500" class="slide-btns">
                        <a href="about.html" class="theme-btn-s3">Get Started Today</a>
                    </div>
                    <div class="student-pic">
                        <img src="assets/images/slider/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of hero slider -->
<!-- start of features -->
<section class="wpo-features-area-s2 section-padding pb-0">
    <div class="container-fluid">
        <div class="features-wrap">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fi flaticon-training-1"></i>
                            </div>
                            <div class="feature-text">
                                <h2><a href="course.html">Learn About DKA</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="feature-item-wrap active">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fi flaticon-team"></i>
                            </div>
                            <div class="feature-text">
                                <h2><a href="course.html">Meet Our teachers</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fi flaticon-video-lesson"></i>
                            </div>
                            <div class="feature-text">
                                <h2><a href="course.html">Tour the campus</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fi flaticon-training"></i>
                            </div>
                            <div class="feature-text">
                                <h2><a href="course.html">Learn with us</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of features slider -->
<!-- start of wpo-about-section -->
<section class="wpo-about-section-s3 section-padding">
    <div class="container">
        <div class="wpo-about-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-img">
                        <img src="assets/images/about/img-4.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <small>About DKA</small>
                            <h2>
                             WE SEE IT THROUGH.
                            </h2>
                        </div>
                        <p>
                        At DKA we are more than a school—we are a family dedicated to shaping hearts and minds for a brighter future, cultivating academic success while instilling
                        leadership qualities rooted in faith, integrity, and compassion.
                        
                        </p>
                        <p>
                        Our mission is simple: to inspire students to dream boldly, lead confidently, and serve others with God-given purpose through personalized teaching and a
                        nurturing environment. Every student is valued, supported, and equipped for a future of significance.
A                       Academics & Enrichment Programs
                        </p>
                        <a href="about.html" class="theme-btn-s2">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-about-section -->
<!-- start wpo-subscribe-section -->
<section class="wpo-subscribe-section section-padding">
    <div class="container">
        <div class="wpo-subscribe-wrap">
            <div class="subscribe-text">
                <h3>
                Questions about DKA? Our team’s waiting eagerly to hear from you. Schedule a visit or get in touch today!"
                .
                </h3>
            </div>
            <div class="subscribe-form">
                <form action="#">
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end subscribe-section -->
<!-- start of wpo-courses-section -->
<section class="wpo-courses-section-s3 section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title-s2">
                    <small>Our Services</small>
                    <h2>Explore Our options</h2>
                </div>
            </div>
        </div>
        <div class="wpo-courses-wrap wpo-courses-slider owl-carousel">
            <div class="wpo-courses-item">
                <div class="courses-img">
                    <img src="assets/images/courses/img-1.jpg" alt="">
                </div>
                <div class="wpo-courses-text">
                    <h2><a href="course-single.html">UI/UX Design</a></h2>
                    <p>We are providing you the best UI/UX design guideline. That help you be professional.</p>
                </div>
            </div>
            <div class="wpo-courses-item">
                <div class="courses-img">
                    <img src="assets/images/courses/img-2.jpg" alt="">
                </div>
                <div class="wpo-courses-text">
                    <h2><a href="course-single.html">Digital Marketing</a></h2>
                    <p>We are providing you the best UI/UX design guideline. That help you be professional.</p>
                </div>
            </div>
            <div class="wpo-courses-item">
                <div class="courses-img">
                    <img src="assets/images/courses/img-3.jpg" alt="">
                </div>
                <div class="wpo-courses-text">
                    <h2><a href="course-single.html">Development</a></h2>
                    <p>We are providing you the best UI/UX design guideline. That help you be professional.</p>
                </div>
            </div>
            <div class="wpo-courses-item">
                <div class="courses-img">
                    <img src="assets/images/courses/img-4.jpg" alt="">
                </div>
                <div class="wpo-courses-text">
                    <h2><a href="course-single.html">Self Improvement</a></h2>
                    <p>We are providing you the best UI/UX design guideline. That help you be professional.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-courses-section -->
<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title-s2">
                    <small>Contact</small>
                    <h2>Reach out to us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-maps-and-flags"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Address</h2>
                                    <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <p>Eduko@gmail.com</p>
                                    <p>helloyou@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p>+1 800 123 456 789</p>
                                    <p>+1 800 123 654 987</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-contact-pg-section -->
<!-- start wpo-blog-section -->
<section class="wpo-blog-section section-padding" id="blog">
    <div class="container">
        <div class="wpo-section-title-s2">
            <small>Our Blogs</small>
            <h2>Our Latest News</h2>
        </div>
        <div class="wpo-blog-items">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="assets/images/blog/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-blog-content">
                            <ul>
                                <li>25 Sep 2023</li>
                                <li>By <a href="blog-single.html">Anne William</a></li>
                            </ul>
                            <h2>
                                <a href="blog.html">The Surprising Reason Tuition Is Crazy Expensive</a>
                            </h2>
                            <a href="blog-single.html" class="more">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="assets/images/blog/img-2.jpg" alt="">
                        </div>
                        <div class="wpo-blog-content">
                            <ul>
                                <li>26 Sep 2023</li>
                                <li>By <a href="blog-single.html">Robert Fox</a></li>
                            </ul>
                            <h2><a href="blog.html">Maximizing the learing experience.</a></h2>
                            <a href="blog-single.html" class="more">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="assets/images/blog/img-3.jpg" alt="">
                        </div>
                        <div class="wpo-blog-content">
                            <ul>
                                <li>28 Sep 2023</li>
                                <li>By <a href="blog-single.html">Devon Lane</a></li>
                            </ul>
                            <h2><a href="blog.html">A critical review of online learning integration</a></h2>
                            <a href="blog-single.html" class="more">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-blog-section -->

@endsection