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
            <h3 class="fw-bold mb-2 text-center">Peminjaman</h3>
            <h5 class="mb-2">Kelompok saya membuat aplikasi ini sebagai projek akhir kelas 11, aplikasi peminjaman ini berfungsi menampilkan, menambah, 
                mengedit, mengupdate dan menghapus barang. Dan juga berfungsi menampilkan, menambah, menghapus dan mengubah status peminjaman.</h5>
                <div class="row mb-5 d-flex justify-items-center">
                      <img src={{ asset('style/assets/img/projek3.jpg') }} alt="" width="300">
                </div>   
                <div class="row mb-5">
                    <div class="col-5">
                      <img src={{ asset('style/assets/img/peminjaman.jpg') }} alt="" width="500">
                    </div>
                    <div class="col-5 ms-6">
                      <img src={{ asset('style/assets/img/peminjaman1.jpg') }} alt="" width="500">
                    </div>
                </div>                 
            <a href="/project" class="font-medium text-blue-500 hover:underline">&laquo; Back to Projects</a>
        </article>
    </div>
@endsection
