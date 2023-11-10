@extends('layout.index')

@section('pageTitle', '| Praktikum Site')

@section('navbarTitle', 'Praktikum Site')

@section('content')
    {{-- Praktikum Site --}}
    <section class="praktikumSite">
        <div class="container">
            <div class="row text-center text-white" data-aos="zoom-out-down" data-aos-duration="750">
                <h2>PRAKTIKUM SITE</h2>
                <p>Wadah peningkatan skill programming & logika algoritma
                    sebagai penunjang perkuliahan mahasiswa/mahasiswi jurusan Informatika.
                </p>
            </div>
            <div class="row text-center">
                <div class="btn-praktikumSite">
                    {{-- Btn-LiveChat --}}
                    <button class="btn btn-sm btn-outline-light" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-aos="fade-right"
                        data-aos-duration="1000"><i class="bi bi-chat-text-fill"></i>
                        Hotline Lab
                    </button>
                    <a href="{{ url('ecourse') }}" class="btn btn-sm btn-outline-light rounded-2" data-aos="fade-left"
                        data-aos-duration="1000">
                        e-Course
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Hotline Lab --}}
    <div class="hotlineLab offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel" style="background-color: #7a7b7b68">
        <div class="offcanvas-header" style="background-color: #7a7b7b68">
            <div class="row mt-5">
                <div class="col-md-10">
                    <marquee behavior="100" direction="" class="text-white">
                        Pelayanan <span class="fw-bold ">HOTLINE LAB</span>, layanan
                        pengaduan
                        hanya berlaku di jam kerja <span class="fw-bold">SENIN s.d SABTU ( 07.00 - 15.00 WIB )</span>
                    </marquee>
                </div>
                <div class="col-md-2 mt-1">
                    <a href="/praktikumsite">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"aria-label="Close">
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="offcanvas-body" style="background-color: #7a7b7b68">
            <div class="container text-white">
                <div class="row justify-content-center align-content-center">
                    <div class="wrapper">
                        <div class="form mt-3">
                            <div class="bot-inbox inbox">
                                <div class="icon">
                                    <i class="fas fa-user"> Hotline Lab</i>
                                </div>
                                <div class="msg-header">
                                    <p>Hallo semua, kamu nanya ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <input id="data" type="text" placeholder="Ketik pesan..." required class="p-1" />
                        </div>
                        <div class="row">
                            <button id="send-btn" class="btn btn-sm btn-outline-light w-100 fw-semibold">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
