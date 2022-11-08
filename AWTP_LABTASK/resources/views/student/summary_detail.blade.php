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
                                <img src="{{ asset('/storage/summary/' . $summary->image) }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $summary->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                        {{ $author }}</li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>{{ $summary->detail }}</p>

                            </div><!-- End post content -->
                        </article><!-- End blog post -->
                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Your Summaries</h3>

                                <div class="mt-5">
                                    @foreach ($summaries as $summaryCurrent)
                                        <div class="post-item mt-5">
                                            <img src="{{ asset('/storage/summary/' . $summaryCurrent->image) }}"
                                                alt="">
                                            <div>
                                                <h4><a
                                                        href="{{ route('summaryDetail', ['id' => $summaryCurrent->summary_id]) }}">{{ $summaryCurrent->title }}</a>
                                                </h4>

                                            </div>
                                        </div><!-- End recent post item-->
                                    @endforeach
                                </div>

                            </div><!-- End Blog Sidebar -->




                        </div>
                    </div>

                </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->

@stop
