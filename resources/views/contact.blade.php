@extends('layout.app')

@section('content')
    <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
        <section class="bg-1100">
            <div class="container">
                <div class="row py-8 py-md-10 py-lg-11">
                    <div class="col-lg-6">
                        <div class="row justify-content-center justify-content-lg-start">
                            <div class="col-md-8 col-lg-12 col-xl-11">
                                <h2 class="text-white fs-4 fs-lg-3 lh-sm mb-2 text-center text-lg-start fw-bold">CONTACT</h2>
                                <p
                                    class="fs-8 text-white text-opacity-65 mb-md-6 mb-lg-7 lh-lg mb-6 mb-lg-7 text-center text-lg-start">
                                    You can contact the contact below if you need further information.</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex gap-2 gap-lg-x1 mb-4 mb-lg-5">
                                    <div>
                                        <a class="icons fs-5 me-3 me-md-0" href="#"><span
                                                class="bi bi-telephone-fill text-white"></span></a>
                                    </div>
                                    <div>
                                        <h5 class="fs-8 fw-bold lh-lg mb-1 text-white">Call : 0851 - 3766 - 5811</h5>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 gap-lg-x1 mb-4 mb-lg-5">
                                    <div>
                                        <a class="icons fs-5 me-3 me-md-0"
                                            href="dwinaandini17@gmail.com"><span
                                                class="bi bi-envelope text-white"></span></a>
                                    </div>
                                    <div>
                                        <h5 class="fs-8 fw-bold lh-lg mb-1 text-white">Mail : dwinaandini17@gmail.com</h5>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 gap-lg-x1 mb-4 mb-lg-5">
                                    <div>
                                        <a class="icons fs-5 me-3 me-md-0"
                                            href="#"><span
                                                class="bi bi-geo-alt-fill text-white"></span></a>
                                    </div>
                                    <div>
                                        <h5 class="fs-8 fw-bold lh-lg mb-1 text-white">Cileunyi, Bandung</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion mt-lg-4 ps-3 pe-x1 bg-white" id="accordion">
                            <form class="mt-3">
                                <h3 class="mb-1">Contact</h3>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="pesan" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
