@extends('layout.index')

@section('pageTitle', '| Home')

@section('navbarTitle', 'Tinfor Media')

@section('content')
    {{-- Section 1 - Profile (Done) --}}
    <section class="profileHome">
        <div class="container text-center text-white">
            <div class="row">
                <h2>TINFOR MEDIA</h2>
                <p class="fw-semibold">
                    Wadah pelayanan cepat tanggap & informasi seputar kegiatan belajar mengajar mahasiswa atau mahasiswi
                    jurusan Informatika
                </p>
            </div>
            <div class="row">
                <div class="btn-profileHome">
                    <a href="" class="btn btn-sm btn-outline-light pe-2 ps-2 rounded-2">
                        Daftar CAMABA 2024
                    </a>
                    {{-- Btn-LiveChat --}}
                    <button class="btn btn-sm btn-outline-light" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-chat-text-fill"></i>
                        Live Chat
                    </button>
                    <a href="#information" class="btn btn-sm btn-outline-light rounded-2">
                        <i class="bi bi-arrow-down-circle-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2 - Marquee (Done) --}}
    <marquee behavior="100" direction="20" class="marquee-Layoutindex">Pelayanan
        <span class="fw-bold ">LIVE CHAT</span>, layanan pengaduan hanya berlaku di jam kerja
        <span class="fw-bold">SENIN s.d SABTU ( 07.00 - 15.00 WIB )</span>
    </marquee>

    {{-- Section 4 - Information --}}
    <section class="information" id="information">
        <div class="container">
            <div class="row text-white">
                {{-- Kalender Akademik --}}
                <div class="col-md-7">
                    <div class="row p-2">
                        <table class="table border border-1 rounded-bottom shadow-lg text-white">
                            <thead>
                                <h5 class="text-center">Kalendar Akademik PTA 2023-2024</h5>
                                <tr>
                                    <th scope="col">Activity</th>
                                    <th scope="col">Period</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kegiatan Pembelajaran Sebelum UTS</td>
                                    <td>Diliburkan / Ditiadakan</td>
                                </tr>
                                <tr>
                                    <td>Ujian Tengah Semester</td>
                                    <td>Diliburkan / Ditiadakan</td>
                                </tr>
                                <tr>
                                    <td>Ujian Utama</td>
                                    <td>Diliburkan / Ditiadakan</td>
                                </tr>
                                <tr>
                                    <td>Ujian Akhir Semester</td>
                                    <td>Diliburkan / Ditiadakan</td>
                                </tr>
                                <tr>
                                    <td>Kegiatan Skripsi & Penulisan Ilmiah</td>
                                    <td>Langsung Diluluskan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Loket Pelayanan & Info Update --}}
                <div class="col-md-5">
                    {{-- Loket Pelayanan --}}
                    <div class="row p-2">
                        <table class="table border border-1 rounded-bottom shadow-lg text-white">
                            <thead>
                                <marquee behavior="100" direction="20" class="mb-2 text-white">
                                    Pelayanan
                                    <span class="fw-bold ">LOKET ADMINISTRASI,</span> hanya berlaku di jam kerja yang
                                    tertera
                                </marquee>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Pukul</th>
                                    <th scope="col">Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Senin s.d Selasa</td>
                                    <td>07.00 - 17.00 WIB</td>
                                    <td>Fadilano Abraham S.Kom, MM.</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rabu s.d Kamis</td>
                                    <td>07.00 - 17.00 WIB</td>
                                    <td>Rayhan Pasyaputra S.Kom</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jum'at s.d Sabtu</td>
                                    <td>07.00 - 17.00 WIB</td>
                                    <td>Rendi Irgi S.Kom</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
