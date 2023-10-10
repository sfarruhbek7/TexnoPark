@extends('layouts.public')
@section('content')
    <main id="main">
        <div class="breadcrumbs d-flex align-items-center"
             style="background-image: url('{{asset('assets/img/breadcrumbs-bg.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Bog'lanish</h2>
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Manzil</h3>
                            <p>Xorazm viloyati, Urganch tumani, Uchko'pir mahallasi, "al-Xorazmiy" majmuasi</p>
                        </div>
                    </div>
                    {{--          <div class="col-lg-3 col-md-6">--}}
                    {{--            <div class="info-item d-flex flex-column justify-content-center align-items-center">--}}
                    {{--              <i class="bi bi-envelope"></i>--}}
                    {{--              <h3>Email</h3>--}}
                    {{--              <p>contact@example.com</p>--}}
                    {{--            </div>--}}
                    {{--          </div>--}}
                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Telefon raqam</h3>
                            <p>+998977900494</p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mt-1">
                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d5968.378447486498!2d60.626022000000006!3d41.586789!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDM1JzEyLjQiTiA2MMKwMzcnMzMuNyJF!5e0!3m2!1suz!2s!4v1696966093735!5m2!1suz!2s"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz"
                                           required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Elektron manzilingiz" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Mavzu"
                                       required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Xabar"
                                          required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Sizning xabaringiz muvaffaqiyatli yuborildi. Rahmat!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Yuborish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
