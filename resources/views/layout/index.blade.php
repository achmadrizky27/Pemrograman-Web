<!doctype html>
<html lang="en" data-bs-them="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tinfor Media @yield('pageTitle') </title>
    <link rel="icon" href="/img/general/logogundar.png" type="image/x-icon" />

    {{-- Ajax --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    {{-- Bootstrap 5.2 CSS --}}
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Bootstrap Icon  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="index">
    {{-- Navigasi Bar (Done) --}}
    <nav class="navbar fixed-top navbar-expand-lg shadow-lg">
        <div class="container">
            <a class="navbar-brand fw-semibold text-white">
                <img src="/img/general/logogundar.png" alt="logogundar" width="25"
                    class="mb-1 me-2" />@yield('navbarTitle')
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- Pengkondisian jika sebagai auth & selain auth --}}
                <ul class="navbar-nav fw-semibold ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="flase">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        {{-- Clock --}}
                        <li class="me-3">
                            <div class="clock text-white mt-2 pe-2 ps-2" id="clockDisplay"></div>
                        </li>

                        {{-- Links --}}
                        <li>
                            <a class="nav-link" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-caret-down-fill"></i>
                                Links</a>
                            <div class="dropdown">
                                <ul class="dropdown-menu mt-3">
                                    <a target="_blank" class="dropdown-item" href="https://baak.gunadarma.ac.id/">BAAK</a>
                                    <a target="_blank" class="dropdown-item" href="https://bapsi.gunadarma.ac.id/">BAPSI</a>
                                    <a target="_blank" class="dropdown-item"
                                        href="http://helpdesk.gunadarma.ac.id/">Helpdesk</a>
                                    <a target="_blank" class="dropdown-item"
                                        href="http://staffsite.gunadarma.ac.id/">StaffSite</a>
                                    <a target="_blank" class="dropdown-item"
                                        href="http://studentsite.gunadarma.ac.id/">StudentSite</a>
                                    <a target="_blank" class="dropdown-item"
                                        href="http://v-class.gunadarma.ac.id/">Vclass</a>
                                </ul>
                            </div>
                        </li>

                        {{-- Service --}}
                        <li>
                            <a class="nav-link" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-caret-down-fill"></i>
                                Service
                            </a>
                            <div class="dropdown">
                                <ul class="dropdown-menu mt-3">
                                    <a class="dropdown-item" href="{{ url('event') }}">Event</a>
                                    <a class="dropdown-item" href="{{ url('login') }}">Marketplace</a>
                                    <a class="dropdown-item" href="{{ url('perpustakaan') }}">Library</a>
                                    <a class="dropdown-item" href="{{ url('praktikumsite') }}">Site Practice</a>
                                </ul>
                            </div>
                        </li>

                        {{-- Home --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home') }}">Home</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content (Done) --}}
    <div class="sectionContent">
        <div class="content">
            @yield('content')
        </div>
    </div>

    {{-- Live Chat (Done) --}}
    <div class="offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel" style="background-color: #ffffff">
        <div class="offcanvas-header">
            <div class="row">
                <div class="col-md-10 pt-3">
                    <marquee behavior="100" class="p-2 rounded-1" style="background-color: #ffffff">
                        Pelayanan
                        <span class="fw-bold ">LIVE CHAT</span>, layanan pengaduan hanya berlaku di jam kerja
                        <span class="fw-bold">SENIN s.d SABTU ( 07.00 - 15.00 WIB )</span>
                    </marquee>
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="wrapper w-100 bg-light rounded-2">
                        <div class="form mt-3">
                            <div class="bot-inbox inbox">
                                <div class="icon">
                                    <i class="fas fa-user"> Admin Gundar</i>
                                </div>
                                <div class="msg-header">
                                    <p>Hallo semua, kamu nanya ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <div class="col-md-8 text-start">
                                <input id="data" type="text" placeholder="Ketik pesan..." required
                                    class="rounded-2 ps-1 w-100" />
                            </div>
                            <div class="col-md-4 text-center">
                                <button id="send-btn" class="btn btn-sm btn-success rounded-2 w-100 mb-1 fw-semibold"
                                    style="background-color: #0284c7">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer (Done) --}}
    <section class="footer text-white ">
        {{-- Top Header --}}
        <div class="row border border-light p-2 text-center" style="background-color: #0f172a">
            <a class="navbar-brand fw-semibold text-white">
                <img src="img/general/logogundar.png" alt="logogundar" width="25" class="mb-1 me-2" />Tinfor
                Media
            </a>
        </div>

        {{-- Middle Content --}}
        <div class="row p-5 gap-2 justify-content-center" style="background-color: #0f172a">

            {{-- Form Contact Us --}}
            <div class="col-md-4 p-4 shadow-lg rounded-2" style="background-color: #2b384b">
                <!-- Alert Notifikasi Contact Us -->
                <h5 class="fw-semibold mb-3 text-center">Contact Us</h5>
                <div class="alert alert-dismissible fade show d-none my-alert text-white" role="alert"
                    style="background-color: #0369a1">
                    <strong>Terima kasih!</strong> Pesan telah berhasil dikirim <i class="bi bi-check-circle-fill"
                        style="color: #00ff11"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                {{-- Form contact us --}}
                <form name="contact-form" class="fw-semibold">
                    <div class="name">
                        <label for="name" class="form-label"><i class="bi bi-person-fill"></i> Full
                            Name</label>
                        <input type="text" class="form-control border-4 rounded-2 ps-3" placeholder="..."
                            id="name" aria-describedby="name" name="nama" autocomplete="off" />
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope-at-fill"></i>
                            Email</label>
                        <input type="email" class="form-control border-4 rounded-2 ps-3" placeholder="..."
                            id="email" aria-describedby="email" name="email" autocomplete="off" />
                    </div>
                    <div class="mt-3">
                        <label for="pesan" class="form-label"><i class="bi bi-chat-text-fill"></i>
                            Message</label>
                        <textarea class="form-control border-4 rounded-2 ps-3" placeholder="..." id="pesan" rows="3"
                            name="pesan" autocomplete="off"></textarea>
                    </div>
                    <button type="submit"
                        class="btn btn-Kirim btn-sm btn-submit btn-outline-light mt-3 rounded-2 w-100">Kirim</button>
                    <button class="btn btn-light btn-sm mt-3 pe-3 ps-3 rounded-2 d-none btn-Loading" type="button"
                        disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>

            {{-- Address Site - Create App & Service --}}
            <div class="col-md-7">

                {{-- Address Site --}}
                <div class="row p-4 rounded-2" style="background-color: #2b384b">
                    <h5 class="mb-3 text-center">Address Site</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.113465946603!2d106.96813767346809!3d-6.248776261181227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c5204032a97%3A0x7dd864ce65061cd8!2sUniversitas%20Gunadarma%20Kampus%20J1!5e0!3m2!1sid!2sid!4v1687771341800!5m2!1sid!2sid"
                        width="300" height="75" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="mt-2 mb-2"></iframe>
                    <p><span class="fw-semibold">Universitas Gunadarma</span>
                        || Jl. KH. Noer Ali, Kota Bekasi, Jawa Barat.
                        || Telp +021-88867315
                        || tinformedia@email.com
                    </p>
                </div>

                {{-- Create App & Service --}}
                <div class="row mt-3">

                    {{-- Create App --}}
                    <div class="col-md-6">
                        <h5 class="mb-3">Created By</h5>
                        {{-- Achmad Rizky --}}
                        <div class="staffTeam">
                            <a class="nav-link w-50" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                Achmad Rizky</a>
                            <div class="dropdown">
                                <ul class="dropdown-menu" style="background-color: #e0f2fe">
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://www.instagram.com/rizkyach_/"><i class="bi bi-instagram"></i>
                                        Instagram</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://bapsi.gunadarma.ac.id/"><i class="bi bi-linkedin"></i>
                                        LinkedIn</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="http://helpdesk.gunadarma.ac.id/"><i class="bi bi-github"></i>
                                        Github</a>
                                </ul>
                            </div>
                        </div>

                        {{-- Fadilano Abraham --}}
                        <div class="staffTeam">
                            <a class="nav-link w-75" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                Fadilano Abraham</a>
                            <div class="dropdown">
                                <ul class="dropdown-menu" style="background-color: #e0f2fe">
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://www.instagram.com/fadilanoa/"><i class="bi bi-instagram"></i>
                                        Instagram</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://bapsi.gunadarma.ac.id/"><i class="bi bi-linkedin"></i>
                                        LinkedIn</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="http://helpdesk.gunadarma.ac.id/"><i class="bi bi-github"></i>
                                        Github</a>
                                </ul>
                            </div>
                        </div>

                        {{-- Muhammad Rayhan Pasyaputra --}}
                        <div class="staffTeam">
                            <a class="nav-link w-75" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                M. Rayhan Pasyaputra</a>
                            <div class="dropdown">
                                <ul class="dropdown-menu" style="background-color: #e0f2fe">
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://www.instagram.com/rayhanpasya_/"><i class="bi bi-instagram"></i>
                                        Instagram</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://bapsi.gunadarma.ac.id/"><i class="bi bi-linkedin"></i>
                                        LinkedIn</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="http://helpdesk.gunadarma.ac.id/"><i class="bi bi-github"></i>
                                        Github</a>
                                </ul>
                            </div>
                        </div>

                        {{-- Rendi Irgi Ardiansyah --}}
                        <div class="staffTeam">
                            <a class="nav-link w-75" href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                Rendi Irgi Ardiansyah</a>
                            <div class="dropdown">
                                <ul class="dropdown-menu" style="background-color: #e0f2fe">
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://www.instagram.com/rndirg.25/"><i class="bi bi-instagram"></i>
                                        Instagram</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="https://bapsi.gunadarma.ac.id/"><i class="bi bi-linkedin"></i>
                                        LinkedIn</a>
                                    <a target="_blank" class="sosmedItem dropdown-item rounded-2"
                                        href="http://helpdesk.gunadarma.ac.id/"><i class="bi bi-github"></i>
                                        Github</a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Service --}}
                    <div class="col-md-6">
                        <h5>Services</h5>
                        <div class="staffTeam mt-3">
                            <a class="nav-link w-50" href=""><i class="bi bi-tags-fill"></i> Event</a>
                            <a class="nav-link w-50" href="/login"><i class="bi bi-tags-fill"></i> Marketplace</a>
                            <a class="nav-link w-50" href=""><i class="bi bi-tags-fill"></i> Library</a>
                            <a class="nav-link w-50" href="/praktikumsite"><i class="bi bi-tags-fill"></i> Site
                                Practice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="row border border-light justify-content-center p-2 text-center rounded-bottom"
            style="background-color: #0f172a">
            <p><i class="bi bi-c-circle"></i>Copyright 2023 - TinforMedia</p>
            <a href="#index" class="btn btn-sm btn-outline-light w-25"><i class="bi bi-arrow-up-circle"></i>
                Back To Top</a>
        </div>
    </section>

    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- Contact Us --}}
    <script src="/js/layout/index/contactUs.js"></script>

    {{-- Live Chat --}}
    <script src="/js/layout/index/liveChat.js"></script>

    {{-- Clock --}}
    <script src="/js/layout/index/clock.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
