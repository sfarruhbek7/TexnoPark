@extends('layouts.public')
@section('content')
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down"><span>Xorazm Yoshlar Texnoparki</span></h2>
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
            <div class="carousel-item active" style="background-image: url('{{asset('assets/img/hero-carousel/hero-carousel-1.jpg')}}')"></div>
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
                                <video src="Camera1"></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <video src="Camera2"></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
