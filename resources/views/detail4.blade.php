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
            <h3 class="fw-bold mb-2 text-center">Article</h3>
            <h5 class="mb-2">Projek pertama laravel saya membuat webite article menggunakan Route dan Controller.</h5>
                <div class="row mb-5">
                    <div class="col-5">
                      <img src={{ asset('style/assets/img/projek4.jpg') }} alt="" width="500">
                    </div>
                    <div class="col-5 ms-6">
                      <img src={{ asset('style/assets/img/artikel.jpg') }} alt="" width="500">
                    </div>
                </div>                  
            <a href="/project" class="font-medium text-blue-500 hover:underline">&laquo; Back to Projects</a>
        </article>
    </div>
@endsection
