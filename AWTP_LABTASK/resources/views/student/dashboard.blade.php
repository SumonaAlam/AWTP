@extends('top.app')
@section('content')

    @include('top.topnav')

    <section id="home" class="home">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>Live To Learn</span></h2>
                    <p>Redefine How You Learn With More And More Fun.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('studentDash') }}" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>
        <div>
            <div class="icon-boxes position-relative">
                <div class="container position-relative">
                    <div class="row gy-4 mt-5">

                        <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-easel"></i></div>
                                <h4 class="title"><a href="{{ route('learn') }}" class="stretched-link">Learn Section</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->

                        <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-gem"></i></div>
                                <h4 class="title"><a href="{{ route('retain') }}" class="stretched-link">Retention Center</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->

                    </div>
                </div>
            </div>

        </div>
    </section>

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Voluptatem dignissimos provident quasi corporis</h3>
                        <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis
                            quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas
                            ea.</p>
                        <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo
                            officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut
                            repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis
                            beatae neque deleniti repellendus.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                    mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg"
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
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-2.jpg"
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
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-3.jpg"
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
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg"
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
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-5.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore.
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

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                        dolorem dolore earum</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Recent Blog Posts</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
                        accusamus fugit aut qui distinctio</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author-2.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author-3.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@stop
