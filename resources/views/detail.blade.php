@extends('layout.app')

@section('content')
    <section class="bg-1100">
        <div class="container">
            <div class="row py-3 py-md-1 py-lg-2">
                <h2 class="fs-4 fs-lg-3 lh-sm mb-2 mt-4 py-7 text-center text-lg-start fw-bold text-white">Detail Project
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <article class="py-8 max-w-screen-md">
            <h3 class="fw-bold mb-2 text-center">CURRICULUM VITAE</h3>
            <h5 class="mb-2">Projek ini dibuat saat awal mempelajari HTML & CSS, membuat CV sederhana dengan tujuan mengetes kemampuan
                dasar pada HTML & CSS,
                pengerjaannya pun hanya 1 hari dan hanya 1 halaman.</h5>
            <img src={{ asset('style/assets/img/projek1.jpg') }} alt="" class="mb-5">
            <a href="/project" class="font-medium text-blue-500 hover:underline">&laquo; Back to Projects</a>
        </article>
    </div>
@endsection
