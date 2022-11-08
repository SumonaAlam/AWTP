@extends('top.app')
@section('content')

    @include('top.topnav')

    <main id="main">

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ asset('/storage/content/' . $topic->image) }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $topic->title }}</h2>

                            {{-- <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                        {{ $author }}</li>
                                </ul>
                            </div><!-- End meta top --> --}}

                            <div class="content">
                                <p>{{ $topic->detail }}</p>

                            </div><!-- End post content -->
                        </article><!-- End blog post -->
                    </div>

                </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->

@stop
