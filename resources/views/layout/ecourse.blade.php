@extends('layout.index')

@section('pageTitle', '| E-Course')
@section('navbarTitle', 'E-Course')

@section('content')

    {{-- Carousel --}}
    <section class="lamanEcourse">
        <div class="container">
            {{-- Carousel --}}
            <div id="carouselExampleDark" class="carousel carouselEcourse carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner shadow-lg">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="/img/marketplace/carousel/image-1.png" class="d-block w-100 rounded-2" alt="..."
                            height="300" width="300">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="/img/marketplace/carousel/image-2.png" class="d-block w-100 rounded-2" alt="..."
                            height="300">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="/img/marketplace/carousel/image-3.png" class="d-block w-100 rounded-2" alt="..."
                            height="300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Title --}}
    <div class="p-2 text-center text-white" style="background-color:  #586577">
        <h5>E-COURSE</h5>
    </div>

    {{-- Praktikum --}}
    <div class="row contentPraktikum gap-2 justify-content-center p-4">

        {{-- LePKOm --}}
        <div class="col-md-3 text-white p-3" style="background-color:  #2b384b">
            <div class="card-body flex">
                <h5 class="card-title">Lembaga Pengembangan Komputer - LePKom</h5>
                <p class="card-text">Sobat Informatika ! Lembaga
                    Pengembangan Universitas Gunadarma</p>
                <a target="_blank" href="https://vm.lepkom.gunadarma.ac.id/"
                    class="btn btn-sm btn-outline-light fw-semibold">Kunjungi !</a>
            </div>
        </div>

        {{-- Labti --}}
        <div class="col-md-3 text-white p-3" style="background-color:  #2b384b">
            <div class="card-body flex">
                <h5 class="card-title">Laboratorium Teknik Informatika - Labti</h5>
                <p class="card-text">Sobat Informatika ! Laboratorium penunjang jurusan
                    Informatika Universitas Gunadarma</p>
                <a target="_blank" href="http://ti.lab.gunadarma.ac.id/"
                    class="btn btn-sm btn-outline-light fw-semibold">Kunjungi
                    !</a>
            </div>
        </div>

        {{-- ILab --}}
        <div class="col-md-3 text-white p-3" style="background-color:  #2b384b">
            <div class="card-body flex">
                <h5 class="card-title">Integrated Laboratoy - ILab</h5>
                <p class="card-text">Sobat Informatika ! Integrated Laboratoy jurusan
                    Informatika Universitas Gunadarma</p>
                <a target="_blank" href="https://ilab.gunadarma.ac.id/"
                    class="btn btn-sm btn-outline-light fw-semibold">Kunjungi
                    !</a>
            </div>
        </div>
    </div>
@endsection
