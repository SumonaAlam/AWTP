@extends('top.app')
@include('top.topnav_general')
@section('content')
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Testimonials</h2>
            <p>These are the testimonials of people who had our service! Hear from them!</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center">
                                <img src="img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img flex-shrink-0" alt="">
                                <div>
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                They said if I put good words they will hire me soon.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center">
                                <img src="img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img flex-shrink-0" alt="">
                                <div>
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                I was literally paid in dollars for writing this. So no offence.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center">
                                <img src="img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img flex-shrink-0" alt="">
                                <div>
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Same here. They paid good amount for good testimonial.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center">
                                <img src="img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img flex-shrink-0" alt="">
                                <div>
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                I have no idea how I am here. I was just minding my own business.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
@stop
