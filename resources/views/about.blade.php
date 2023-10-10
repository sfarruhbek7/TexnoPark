@extends('layouts.public')
@section('content')
    <main id="main">
        <div class="breadcrumbs d-flex align-items-center"
             style="background-image: url('{{asset('assets/img/breadcrumbs-bg.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Biz haqimizda</h2>
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </div>
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{asset('assets/img/about.jpg')}});"
                         data-aos="zoom-in" data-aos-delay="100"></div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Yoshlar texnoparkini tashkil etish asoslari hamda uning vazifalari</h3>
                        <p>
                            Mazkur yoshlar texnoparki O‘zbekiston Respublikasi Vazirlar Mahkamasining 2020 yil 23
                            maydagi “Respublika hududlarida yoshlar texnoparklarini tashkil etish chora-tadbirlari
                            to‘g‘risida”gi 313-sonli qaroriga binoan tashkil etilmoqda.
                        </p>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <div>
                                <p>«Yoshlar texnoparki» yoshlarning intellektual, ilmiy, ijodiy salohiyatini oshirish,
                                    tahliliy fikrlash, ilmiy-tadqiqot va innovasion faoliyatga keng jalb etish,
                                    «startap» loyihalarini rivojlantirish va ularni amalga oshirish uchun yagona maydon
                                    tashkil etish maqsadida barpo etilmoqda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <p>
                        Yoshlar texnoparki Buxoro viloyatida Yoshlar akademiyasining faoliyatini rivojlantirish,
                        mahalliy ijro etuvchi hokimiyat organlari, ta’lim muassasalari, ilmiy tashkilotlar va
                        Texnologiyalar va innovatsiyalarni qo‘llab-quvvatlash markazlari bilan hamkorlikda yoshlarni
                        intellektual, ilmiy, ijodiy salohiyatini oshirish;
                    </p>
                    <br>
                    <p>
                        Yoshlarning «startap» loyihalarini rivojlantirish va ularni amalga oshirish uchun yagona maydon
                        tashkil etish orqali Buxoro viloyatining innovasion salohiyatini oshirish;
                    </p>
                    <br>
                    <p>
                        Xorazm viloyatida yoshlarning tahliliy fikrlash, ularni ilmiy-tadqiqot va innovasion faoliyatga
                        keng jalb etish, iqtidorli, tashabbuskor yoshlarning o‘z intellektual salohiyatini namoyon
                        qilishi va ijtimoiy moslashuvi uchun zarur sharoitlar yaratish;
                    </p>
                    <br>
                    <p>
                        Zamonaviy talablarga javob beradigan malakali kadrlarni tayyorlash, shuningdek, hududlarni
                        sifatli, yuqori texnologiyali mahsulotlar va xizmatlar bilan ta’minlash maqsadida ilm-fan,
                        ta’lim va ishlab chiqarish integratsiyasini chuqurlashtirish;
                    </p>
                    <br>
                    <p>
                        Iqtidorli yoshlarni rivojlangan xorijiy mamlakatlarning nufuzli ilmiy markazlari,
                        universitetlari, texnoparklari va ishlab chiqarish tashkilotlarida malaka oshirishlariga
                        ko‘maklashish;
                    </p>
                    <br>
                    <p>
                        Yetakchi kompaniyalar vakillari, malakali mutaxassislar va ekspertlar ishtirokida treninglar va
                        master-klasslarni, shuningdek, yoshlarda amaliy ko‘nikmalarni shakllantirish va ishlab
                        chiqaruvchilar bilan innovasion-korporativ aloqalarni yo‘lga qo‘yish maqsadida ilmiy-texnik
                        konferensiya, seminar, o‘quv kurslari va treninglar tashkil etish;
                    </p>
                    <br>
                    <p>
                        Iqtidorli yoshlar tomonidan taklif etilgan dolzarb yo‘nalishlar bo‘yicha loyihalarni saralash
                        hamda O‘zbekiston Respublikasi Innovasion rivojlanish agentligi tomonidan mavzuga oid grantlar
                        berish yuzasidan e’lon qilib boriladigan tanlovlarga yo‘naltirish;
                    </p>
                    <br>
                    <p>
                        Ilmiy-texnik, innovasion hamda «startap» loyihalarini amaliyotga joriy etish maqsadida oliy
                        ta’lim muassasalarining ilmiy xodimlari, professor-o‘qituvchi va talabalarini jalb
                        qilish.Технопарк Texnopark Oʻzbekiston Respublikasi Innovatsion rivojlanish agentligi
                        muassisligidagi hamda masʼuliyati cheklangan jamiyat shaklidagi yuridik shaxs hisoblanadi.
                    </p>
                    <br>
                    <p>
                        Texnoparkning eksterritorialligi joylashgan hudud doirasida nazarda tutiladi va bunda amalga
                        oshiriladigan loyihalarning ilmiy, texnologik va iqtisodiy maqsadga muvofiqligi hisobga olinib,
                        ularning rezidentlari tegishlicha viloyatda joylashtiriladi;
                    </p>
                    <br>
                    <p>
                        Texnopark rezidenti maqomini berish to‘g‘risida qaror qabul qilish va keyinchalik ularni
                        ro‘yxatdan o‘tkazish O‘zbekiston Respublikasi Innovasion rivojlanish agentligi tomonidan amalga
                        oshiriladi.
                    </p>
                </div>
            </div>
        </section>
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <h3>Texnopark faoliyati 4 bosqichda amalga oshiriladi.</h3>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-check-circle flex-shrink-0"></i>
                        <div>
                            <p>
                                Birinchi bosqich iqtidorli yoshlarni aniqlashga qaratilgan. Bunda tanlovlar o‘tkazilib,
                                ularda saralab olingan salohiyatli yoshlar o‘zlarining bilim va ko‘nikmalari, g‘oyalari
                                va loyihalari asosida Yoshlar akademiyasiga a’zolikka qabul qilinadi.
                            </p>
                        </div>
                    </div>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-check-circle flex-shrink-0"></i>
                        <div>
                            <p>
                                Ikkinchi bosqichda, oliy ta’lim muassasalari, Yoshlar akademiyasi a’zolari safidan
                                istiqbolli biznes loyiha va g‘oya egalari texnoparkka jalb qilinadi hamda ularning
                                loyihalari rivojlantiriladi.
                            </p>
                        </div>
                    </div>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-check-circle flex-shrink-0"></i>
                        <div>
                            <p>
                                Uchinchi bosqichda, kichik ishlab chiqarishni tashkil etiladi. Yuqorida aytib o‘tilgan
                                bosqichlarni bosib o‘tgan loyiha egalari Yoshlar texnoparkida kichik ishlab chiqarishni
                                tashkil etadi. Bunda ushbu loyiha egalariga 3 oy muddatga bepul ofis xonalari taqdim
                                etiladi. Keyinchalik 50 foizlik ijara asosida doimiy qolish imkoni taklif qilinadi.
                            </p>
                        </div>
                    </div>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-check-circle flex-shrink-0"></i>
                        <div>
                            <p>
                                To‘rtinchi bosqichda, marketing strategiyasi ishlab chiqiladi, mahalliy va xorijiy
                                investorlar, turli fondlar va biznes angellar mablag‘lari yo‘naltiriladi. Startap
                                loyihalar uchun davlat grantlari ajratish ham ko‘zda tutilgan. Va nihoyat, bozorga
                                moslashgan mahsulot yaratish bosqichiga o‘tiladi. Bunda texnoparkda yaratilgan
                                mahsulotlarning bozorda xaridorgir bo‘lishiga amaliy ko‘maklashiladi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
