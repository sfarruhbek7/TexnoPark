@extends('layouts.public')
@section('content')
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down"><span>Urgench Yoshlar Texno Parki</span></h2>
                        <p data-aos="fade-up">Yoshlar texnoparki – yoshlarning intellektual, ilmiy, ijodiy salohiyatini
                            oshirish, tahliliy fikrlash, ilmiy-tadqiqot va innovasion faoliyatga keng jalb etish,
                            «startap» loyihalarini rivojlantirish va ularni amalga oshirish uchun yagona maydon tashkil
                            etish maqsadida barpo etilmoqda</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{route('about')}}" class="btn-get-started">Batafsil</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active"
                 style="background-image: url('{{asset('assets/img/hero-carousel/hero-carousel-1.jpg')}}')"></div>
        </div>
    </section>
    <main id="main">
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Qurilish jarayoni</h2>
                    <p></p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <iframe height="100%"
                                            src="https://www.youtube.com/embed/Dyo2l8nvbfk?si=1LiSi90LdujKHErd"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Innovatsion Texnopark ilmiy izlanish va amaliy
                                            natijda.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <iframe height="100%"
                                            src="https://www.youtube.com/embed/pZDRfDFx1YY?si=lGavtcHGxYXc-BBJ"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Xorazmda tashkil etilgan Texnopark imkoniyatlari.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
