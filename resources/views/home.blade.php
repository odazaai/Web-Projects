@extends('layout.app')

@section('content')
    <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
        <section class="hero-section overflow-hidden position-relative z-0 mb-4 mb-lg-0">
            <div class="hero-background">
                <div class="container">
                    <div class="row gy-4 gy-md-8 pt-9 pt-lg-0">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="fs-2 fs-lg-1 text-white fw-bold mb-1 mb-lg-x1 lh-base mt-3 mt-lg-0"> Software Engineer</h1>
                            <h3 class="text-white mb-2"> SMK Bakti Nusantara 666</h3>
                            <p class="fs-8 text-white">Dwina Andini</p>
                        </div>
                        <div class="col-lg-6 d-flex justify-center">
                            <img src={{ asset('style/assets/img/andinn.png') }} alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0 end-0 z-1"><img class="wave mb-md-n2"
                    src={{ asset('style/assets/img/illustrations/Wave.svg') }} alt="" />
                <div class="bg-white py-2 py-md-5"></div>
            </div>
        </section>
        <section class="container border-bottom mb-8 mb-lg-10">
            <div class="row pb-6 pb-lg-8 g-3 g-lg-8 px-3">
                <div class="col-12 col-md-6">
                    <h2 class="fs-3 fw-bold lh-sm mb-2 text-center">About Me</h2>
                    <h6 class="fs-8 fw-normal lh-lg mb-0 opacity-70 text-center">Do you want to know more about Dwina Andini? Let's Check It!</h6>
                    <div class="mt-2 d-flex justify-content-center justify-content-lg-center">
                        <a class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7" href="/about">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="fs-3 fw-bold lh-sm mb-2 text-center">Project's</h2>
                    <h6 class="opacity-70 fs-8 fw-normal lh-lg mb-0 text-center">Here are some projects that have been made by Dwina Andini.</h6>
                    <div class="mt-2 d-flex justify-content-center justify-content-lg-center">
                        <a class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7" href="/project">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection
