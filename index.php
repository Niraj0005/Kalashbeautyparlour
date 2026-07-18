
<?php
include('include/header.php');
?>
    <!-- 4. Full Screen Hero Carousel -->
    <section id="home" class="hero-section">
        <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-100">
                <!-- Slide 1 -->
                <div class="carousel-item active h-100" style="background-image: url('assets/img/slide1.png');">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption d-flex align-items-center h-100 text-start">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="text-uppercase text-accent tracking-widest mb-3 animate-up">Luxury Salon Experience</h5>
                                    <h1 class="display-2 fw-bold text-white mb-4 animate-up dynamic-heading">Unveil Your Divine & Radiant </h1>
                                 
                                    <div class="d-flex flex-wrap gap-3 animate-up">
                                        <a href="#contact" class="btn btn-gradient btn-lg text-white">Book Appointment</a>
                                        <a href="#services" class="btn btn-outline-white btn-lg">Explore Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item h-100" style="background-image: url('assets/img/slide2.jpg');">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption d-flex align-items-center h-100 text-start">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="text-uppercase text-accent tracking-widest mb-3 animate-up">Flawless Bridal Artistry</h5>
                                    <h1 class="display-2 fw-bold text-white mb-4 animate-up dynamic-heading">Exquisite Bridal Makeovers</h1>
                                  
                                    <div class="d-flex flex-wrap gap-3 animate-up">
                                        <a href="#contact" class="btn btn-gradient btn-lg text-white">Book Appointment</a>
                                        <a href="#services" class="btn btn-outline-white btn-lg">Explore Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item h-100" style="background-image: url('assets/img/slide3.png');">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption d-flex align-items-center h-100 text-start">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="text-uppercase text-accent tracking-widest mb-3 animate-up">Advanced Skin Therapy</h5>
                                    <h1 class="display-2 fw-bold text-white mb-4 animate-up dynamic-heading">Rejuvenate Your Natural Glow</h1>
                                
                                    <div class="d-flex flex-wrap gap-3 animate-up">
                                        <a href="#contact" class="btn btn-gradient btn-lg text-white">Book Appointment</a>
                                        <a href="#services" class="btn btn-outline-white btn-lg">Explore Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- 5. About Section -->
    <section id="about" class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image-wrapper position-relative">
                        <img src="assets/img/habout.jpg" class="img-fluid rounded-4 shadow-lg lazy-img">
                        <div class="experience-badge bg-gradient-premium shadow text-white text-center rounded-3 p-3 position-absolute">
                            <span class="d-block display-5 fw-bold">12+</span>
                            <span class="text-uppercase small tracking-wider">Years of Luxury</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h5 class="text-uppercase  tracking-widest mb-2 font-secondary" style="color: #e91e63!important;">About The Parlour</h5>
                    <h2 class="display-5 fw-bold text-dark mb-4">Redefining Premium Beauty & Wellness Traditions</h2>
                    <p class="text-muted mb-4 lead">Kalash Beauty Parlour is an ultimate haven for discerning individuals seeking impeccable aesthetic refinement and tailored pampering treatments.</p>
                    <p class="text-muted mb-4">We maintain strict adherence to absolute sanitation protocols, utilizing solely top-tier signature formulas curated globally to promise flawless enhancements for our elite clientele.</p>
                    
                    <div class="row g-3 mb-5">
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <div class="about-icon-box bg-white shadow-sm pink rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-patch-check-fill"></i></div>
                            <span class="fw-semibold text-dark">Certified Beauticians</span>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <div class="about-icon-box bg-white shadow-sm pink rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-diamond-fill"></i></div>
                            <span class="fw-semibold text-dark">Premium Global Brands</span>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <div class="about-icon-box bg-white shadow-sm pink rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-cpu-fill"></i></div>
                            <span class="fw-semibold text-dark">Latest Equipment</span>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <div class="about-icon-box bg-white shadow-sm pink rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-heart-pulse-fill"></i></div>
                            <span class="fw-semibold text-dark">100% Medical Hygiene</span>
                        </div>
                    </div>
                    
                    <a href="#services" class="btn btn-gradient btn-lg text-white px-4">Read More Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Our Services Section -->
    <section id="services" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase tracking-widest mb-2" style="color: #e91e63!important;">Our Signature Menu</h5>
                <h2 class="display-5 fw-bold text-dark mb-3">Luxurious Treatments Curated For You</h2>
                <div class="section-divider mx-auto"></div>
            </div>
            
            <div class="row g-4">
              
                <!-- Service 2 -->
              
              
                <!-- Service 4 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card rounded-4 shadow-sm overflow-hidden bg-light h-100 d-flex flex-column">
                        <div class="img-overflow-hidden position-relative">
                            <img src="assets/img/s2.png" class="img-fluid w-100 service-img lazy-img">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h4 class="fw-bold text-dark mb-2">Luxury Facial</h4>
                            <p class="text-muted small mb-4 flex-grow-1">Deep structural hydration infused with organic serums and micro-exfoliation essentials.</p>
                            <a href="#contact" class="btn btn-outline-dark mt-auto align-self-start rounded-pill px-3 py-1 btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>

                  <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card rounded-4 shadow-sm overflow-hidden bg-light h-100 d-flex flex-column">
                        <div class="img-overflow-hidden position-relative">
                            <img src="assets/img/s1.png" class="img-fluid w-100 service-img lazy-img">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h4 class="fw-bold text-dark mb-2">Hair Styling</h4>
                            <p class="text-muted small mb-4 flex-grow-1">Premium structural blowouts, modern trends, and intricate editorial event braids.</p>
                            <a href="#contact" class="btn btn-outline-dark mt-auto align-self-start rounded-pill px-3 py-1 btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card rounded-4 shadow-sm overflow-hidden bg-light h-100 d-flex flex-column">
                        <div class="img-overflow-hidden position-relative">
                            <img src="assets/img/s3.png" class="img-fluid w-100 service-img lazy-img">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h4 class="fw-bold text-dark mb-2">Skin Care</h4>
                            <p class="text-muted small mb-4 flex-grow-1">Targeted dermal therapies addressing hyperpigmentation and early anti-aging protection.</p>
                            <a href="#contact" class="btn btn-outline-dark mt-auto align-self-start rounded-pill px-3 py-1 btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>

                 <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card rounded-4 shadow-sm overflow-hidden bg-light h-100 d-flex flex-column">
                        <div class="img-overflow-hidden position-relative">
                            <img src="assets/img/s4.png" class="img-fluid w-100 service-img lazy-img">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h4 class="fw-bold text-dark mb-2">Hair Spa</h4>
                            <p class="text-muted small mb-4 flex-grow-1">Targeted dermal therapies addressing hyperpigmentation and early anti-aging protection.</p>
                            <a href="#contact" class="btn btn-outline-dark mt-auto align-self-start rounded-pill px-3 py-1 btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
               
              
            </div>
        </div>
    </section>

        <!-- 11. CTA Section -->
    <section class="cta-section text-white text-center position-relative overflow-hidden">
        <div class="cta-parallax-bg" style="background-image: url('assets/img/cta.png');"></div>
        <div class="cta-overlay"></div>
        <div class="container position-relative z-index-2 py-5" data-aos="zoom-in">
            <h2 class="display-4 fw-bold mb-3">Ready to Unlock Your Ultimate Elegance?</h2>
            <p class="lead mb-4 max-w-600 mx-auto">Secure your prioritized custom appointment slot today and receive customized beauty guidance from our master artisans.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#contact" class="btn btn-outline-white btn-lg px-4">Book An Appointment</a>
                <a href="tel:+1234567890" class="btn btn-outline-white btn-lg px-4"><i class="bi bi-telephone-inbound me-2"></i>Call Now</a>
            </div>
        </div>
    </section>

    <!-- 7. Why Choose Us Section -->
    <section id="why-choose-us" class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 order-lg-2" data-aos="fade-left">
                    <img src="assets/img/why.jpg" alt="Esthetician working" class="img-fluid rounded-4 shadow-lg lazy-img">
                </div>
                <div class="col-lg-7 order-lg-1" data-aos="fade-right">
                    <h5 class="text-uppercase pink tracking-widest mb-2" style="color: #e91e63!important;">Why Choose Us</h5>
                    <h2 class="display-5 fw-bold text-dark mb-4">Elite Salon Care Set to Gold Standards</h2>
                    <p class="text-muted mb-5">We go significantly beyond typical standard hair cutting or styling parameters, rendering complete customizable, artistic sensory enhancements.</p>
                    
                    <div class="row g-4">
                        <!-- Box 1 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-person-workspace"></i></div>
                                <h5 class="fw-bold text-dark">Artisan Masters</h5>
                                <p class="text-muted small mb-0">Staff members complete monthly advanced aesthetic coaching.</p>
                            </div>
                        </div>
                        <!-- Box 2 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-flower1"></i></div>
                                <h5 class="fw-bold text-dark">Organic Extracts</h5>
                                <p class="text-muted small mb-0">Free of aggressive chemicals, dynamic vegan base products.</p>
                            </div>
                        </div>
                        <!-- Box 3 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-clock-history"></i></div>
                                <h5 class="fw-bold text-dark">Timely Schedules</h5>
                                <p class="text-muted small mb-0">Strict priority formatting entirely prevents overbooked delays.</p>
                            </div>
                        </div>
                        <!-- Box 4 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-stars"></i></div>
                                <h5 class="fw-bold text-dark">Bespoke Styling</h5>
                                <p class="text-muted small mb-0">Visual strategies mapped perfectly to balance individual jaw structures.</p>
                            </div>
                        </div>
                        <!-- Box 5 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-shield-check"></i></div>
                                <h5 class="fw-bold text-dark">Hospital Grade Clean</h5>
                                <p class="text-muted small mb-0">Sterilization systems applied immediately upon tool utilization.</p>
                            </div>
                        </div>
                        <!-- Box 6 -->
                        <div class="col-sm-6">
                            <div class="feature-box p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="feature-icon mb-3 bg-light-primary pink rounded-3 d-flex align-items-center justify-content-center"><i class="bi bi-award"></i></div>
                                <h5 class="fw-bold text-dark">Awarded Studio</h5>
                                <p class="text-muted small mb-0">Consistently rated premium boutique salon within state reviews.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Counter Section -->
    <section class="counter-section text-white position-relative overflow-hidden">
        <div class="counter-parallax-bg" style="background-image: url('assets/img/slide1.png');"></div>
        <div class="counter-overlay"></div>
        <div class="container position-relative z-index-2">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <span class="counter-num display-4 fw-bold d-block" data-target="15000">0</span>
                    <span class="text-accent text-uppercase small tracking-wider fw-semibold">Happy Clients</span>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <span class="counter-num display-4 fw-bold d-block" data-target="12">0</span>
                    <span class="text-accent text-uppercase small tracking-wider fw-semibold">Years Experience</span>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <span class="counter-num display-4 fw-bold d-block" data-target="45">0</span>
                    <span class="text-accent text-uppercase small tracking-wider fw-semibold">Treatments</span>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <span class="counter-num display-4 fw-bold d-block" data-target="20">0</span>
                    <span class="text-accent text-uppercase small tracking-wider fw-semibold">Expert Stylists</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Before & After Section -->
    <section id="before-after" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase  tracking-widest mb-2" style="color: #e91e63!important;">Stunning Transformations</h5>
                <h2 class="display-5 fw-bold text-dark mb-3">Real Results, Absolute Precision</h2>
                <div class="section-divider mx-auto"></div>
            </div>
            
           <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="comparison">

                    <img src="assets/img/b1.png" class="before-img" alt="">

                    <div class="after">
                        <img src="assets/img/a1.png" class="after-img" alt="">
                    </div>

                    <div class="divider"></div>

                    <div class="handle">
                        <i class="bi bi-chevron-left"></i>
                        <i class="bi bi-chevron-right"></i>
                    </div>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="comparison">

                    <img src="assets/img/b2.png" class="before-img" alt="">

                    <div class="after">
                        <img src="assets/img/a2.png" class="after-img" alt="">
                    </div>

                    <div class="divider"></div>

                    <div class="handle">
                        <i class="bi bi-chevron-left"></i>
                        <i class="bi bi-chevron-right"></i>
                    </div>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mx-md-auto">
                <div class="comparison">

                    <img src="assets/img/b3.png" class="before-img" alt="">

                    <div class="after">
                        <img src="assets/img/a3.png" class="after-img" alt="">
                    </div>

                    <div class="divider"></div>

                    <div class="handle">
                        <i class="bi bi-chevron-left"></i>
                        <i class="bi bi-chevron-right"></i>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section> 

    <!-- 10. Testimonials Section -->
    <section id="testimonials" class="section-padding bg-light overflow-hidden">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase  tracking-widest mb-2" style="color: #e91e63!important;">Verified Feedback</h5>
                <h2 class="display-5 fw-bold text-dark mb-3">Words From Our Elite Clientele</h2>
                <div class="section-divider mx-auto"></div>
            </div>
            
            <div class="swiper testimonialSwiper px-3" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="testimonial-card p-5 bg-white rounded-4 shadow-sm h-100 d-flex flex-column position-relative">
                            <i class="bi bi-quote position-absolute quote-watermark text-light"></i>
                            <div class="stars text-warning mb-3">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted flex-grow-1">"The airbrush bridal makeup execution exceeded every projection I held for my wedding day. It remained absolutely flawless under heavy photo lighting for 10 straight hours."</p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="assets/img/testi1.png" alt="Aishwarya R." class="rounded-circle testimonial-avatar object-cover lazy-img">
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">Aishwarya R.</h6>
                                    <span class="small text-muted">Premium Bride</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide h-auto">
                        <div class="testimonial-card p-5 bg-white rounded-4 shadow-sm h-100 d-flex flex-column position-relative">
                            <i class="bi bi-quote position-absolute quote-watermark text-light"></i>
                            <div class="stars text-warning mb-3">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted flex-grow-1">"Their advanced signature luxury facial treatments structurally transformed my dry epidermal areas within two structural sessions. Unbelievably strict sanitation levels."</p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="assets/img/testi2.png" alt="Meera K." class="rounded-circle testimonial-avatar object-cover lazy-img">
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">Meera K.</h6>
                                    <span class="small text-muted">Corporate Executive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide h-auto">
                        <div class="testimonial-card p-5 bg-white rounded-4 shadow-sm h-100 d-flex flex-column position-relative">
                            <i class="bi bi-quote position-absolute quote-watermark text-light"></i>
                            <div class="stars text-warning mb-3">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted flex-grow-1">"The hair spa session combined deep structural cuticle recovery with exceptionally premium neck reflexology. The salon atmosphere feels incredibly soothing."</p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="assets/img/testi3.png" alt="Priya S." class="rounded-circle testimonial-avatar object-cover lazy-img">
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">Priya S.</h6>
                                    <span class="small text-muted">Regular Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="swiper-pagination position-relative mt-5"></div>
            </div>
        </div>
    </section>



    <!-- 12. Contact Section -->
    <section id="contact" class="section-padding bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <h5 class="text-uppercase  tracking-widest mb-2" style="color: #e91e63!important;">Contact Details</h5>
                    <h2 class="display-5 fw-bold text-dark mb-4">Connect With Our Studio</h2>
                    <p class="text-muted mb-5">Have specific questions regarding customizable bridal solutions or targeted skin recovery plans? Reach our support directly.</p>
                    
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-detail-icon pink bg-light rounded-3 p-2"><i class="bi bi-geo-alt-fill fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Our Location</h6>
                                <p class="text-muted small mb-0">Banglow No.5 Konark Nagar 2, Near Jatra Hotel Nashik Maharastra </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-detail-icon pink bg-light rounded-3 p-2"><i class="bi bi-telephone-forward-fill fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Phone Number</h6>
                                <p class="text-muted small mb-0">+91 98765 43210 </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-detail-icon pink bg-light rounded-3 p-2"><i class="bi bi-envelope-at-fill fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Email Queries</h6>
                                <p class="text-muted small mb-0">appointments@kalashbeauty.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-detail-icon pink bg-light rounded-3 p-2"><i class="bi bi-clock-fill fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Working Hours</h6>
                                <p class="text-muted small mb-0">Mon - Sun: 09:00 AM - 08:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="booking-form-wrapper p-4 p-sm-5 rounded-4 shadow-sm bg-light">
                        <h4 class="fw-bold text-dark mb-4">Request Priority Booking</h4>
                        <form id="appointmentForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="formName" class="form-label text-dark small fw-semibold">Full Name *</label>
                                    <input type="text" class="form-control" id="formName" required placeholder="Your full name">
                                    <div class="invalid-feedback">Please input your name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="formPhone" class="form-label text-dark small fw-semibold">Phone Number *</label>
                                    <input type="tel" class="form-control" id="formPhone" required placeholder="10-digit mobile number">
                                    <div class="invalid-feedback">Please input a valid phone contact.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="formEmail" class="form-label text-dark small fw-semibold">Email Address</label>
                                    <input type="email" class="form-control" id="formEmail" placeholder="yourname@domain.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="formService" class="form-label text-dark small fw-semibold">Select Service *</label>
                                    <select class="form-select" id="formService" required>
                                        <option value="" selected disabled>Choose your menu option...</option>
                                        <option value="bridal">Bridal Makeup</option>
                                        <option value="styling">Hair Styling</option>
                                        <option value="spa">Hair Spa Therapy</option>
                                        <option value="facial">Luxury Facial</option>
                                        <option value="skin">Advanced Skincare</option>
                                        <option value="manicure">Premium Manicure</option>
                                        <option value="pedicure">Premium Pedicure</option>
                                        <option value="nailart">Custom Nail Art</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a service option.</div>
                                </div>
                                <div class="col-12">
                                    <label for="formMessage" class="form-label text-dark small fw-semibold">Custom Preferences / Timing Notes</label>
                                    <textarea class="form-control" id="formMessage" rows="4" placeholder="Mention preferred time slots or skin conditions..."></textarea>
                                </div>
                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-gradient text-white w-100 py-3 font-secondary text-uppercase tracking-wider shadow">Confirm Secure Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

 




    <!-- 13. Google Maps Embed Section -->
    <section class="w-100 p-0 line-height-0">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385.7843395184407!2d73.8523875533335!3d20.02083812404547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddc1dac36a8381%3A0x97fae3976de234d1!2s2%2C%20Konark%20Nagar%2C%20Nashik%2C%20Maharashtra%20422003!5e0!3m2!1sen!2sin!4v1784310013837!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </section>



    <?php
include('include/footer.php');
?>