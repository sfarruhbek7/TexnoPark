@extends('layouts.public')
@section('content')
    <main id="main">
        <div class="breadcrumbs d-flex align-items-center"
             style="background-image: url('{{asset('assets/img/breadcrumbs-bg.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Qurilish Loyihasi</h2>
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Projects</li>
                </ol>
            </div>
        </div>
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                     data-portfolio-sort="original-order">
                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Hammasi</li>
                        <li data-filter=".filter-out">Tashqi qismi</li>
                        <li data-filter=".filter-in">Ichki qismi</li>
                        <li data-filter=".filter-room">Xonalar</li>
                        <li data-filter=".filter-schema">Sxemalar</li>
                    </ul>
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-out">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/out1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/out1.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in1.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-room">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/room1.jp')}}g" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/room1.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-schema">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/schema1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/schema1.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-out">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/out2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/out2.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in2.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-room">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/room2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/room2.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-schema">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/schema2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/schema2.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-out">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/out3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/out3.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in3.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-room">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/room3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/room3.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-schema">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/schema3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/schema3.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-out">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/out4.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/out4.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in4.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in4.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-room">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/room4.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/room4.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-schema">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/schema4.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/schema4.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in5.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in5.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-room">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/room5.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/room5.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-in">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/in6.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('assets/img/projects/in6.jpg')}}" title=""
                                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
