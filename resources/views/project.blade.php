@extends('layout.app')

@section('content')
    <section class="bg-1100">
        <div class="container">
            <div class="row py-3 py-md-1 py-lg-2">
                <h2 class="fs-4 fs-lg-3 lh-sm mb-2 mt-4 py-7 text-center text-lg-start fw-bold text-white">Andin's Projects
                </h2>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="container text-center">
            <div class="row mb-5">
                <div class="col">
                    <div class="card border" style="width: auto;">
                        <img src={{ asset('style/assets/img/projek1.jpg') }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Curriculum Vitae</h5>
                            <p class="card-text">Projek pertama menggunakan HTML & CSS.</p>
                            <a href="/detail" class="font-medium text-blue-500 hover:underline">Read More
                                &raquo</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border" style="width: auto;">
                        <img src={{ asset('style/assets/img/projek2.jpg') }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOTES</h5>
                            <p class="card-text">Projek pertama CRUD menggunakan PHP.</p>
                            <a href="/detail2" class="font-medium text-blue-500 hover:underline">Read More
                                &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="card border" style="width: auto;">
                        <img src={{ asset('style/assets/img/projek3.jpg') }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Peminjaman</h5>
                            <p class="card-text">Projek Akhir di kelas 11 membuat aplikasi peminjaman sekolah.</p>
                            <a href="/detail3" class="font-medium text-blue-500 hover:underline">Read More
                                &raquo</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border" style="width: auto;">
                        <img src="{{ asset('style/assets/img/projek4.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Article</h5>
                            <p class="card-text">Projek Laravel pertama.</p>
                            <a href="/detail4" class="font-medium text-blue-500 hover:underline">Read More
                                &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
