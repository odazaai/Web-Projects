@extends('layout.app')

@section('content')
    <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
        <section class="bg-1100">
            <div class="container">
                <div class="row py-6 py-md-10 py-lg-11">
                    <h2 class="text-white fs-4 fs-lg-3 lh-sm mb-3 text-center fw-bold">ABOUT ME</h2>
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src={{ asset('style/assets/img/andin.jpg') }} class="img-fluid rounded-start "
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold">Dwina Andini</h3>
                                    <p class="card-text fs-8">
                                        Saya adalah salah satu siswi SMK Bakti Nusantara 666 yang tertarik pada dunia
                                        teknologi, khususnya dalam bidang Rekayasa Perangkat Lunak (RPL).</p>
                                    <p class="card-text fs-8">Selama kurang lebih 2,5 tahun saya mempelajari tentang pemrograman,
                                        saya sudah mempelajari HTML, CSS, PHP, Flutter, Laravel dan UI/UX Design.</p>
                                    <p class="card-text fs-8">Saya juga mengikuti beberapa pelatihan seperti pelatihan dasar-dasar python yang
                                        diadakan oleh DICODING dan dasar-dasar laravel yang diadakan oleh Pijar Belajar. </p>
                                    <p class="card-text fs-8">Saya ingin menjadi pengembang perangkat lunak yang andal, dengan fokus pada
                                        pembuatan aplikasi yang bermanfaat dan mudah
                                        digunakan oleh banyak orang. Di masa depan, saya berharap bisa menguasai
                                        pengembangan aplikasi mobile dan web, serta memahami
                                        dasar-dasar UI/UX design agar aplikasi yang saya buat tidak hanya berfungsi dengan
                                        baik, tetapi juga nyaman digunakan.
                                        Saya juga tertarik untuk terus belajar dan mengikuti perkembangan teknologi agar
                                        bisa terus berkembang dalam dunia pemrograman.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
