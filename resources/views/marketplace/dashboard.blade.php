{{-- Menggunakan template pada layout/main.blade.php --}}
@extends('layout.index')

{{-- Membuat title dinamis --}}
@section('pageTitle', '| Marketplace')
@section('navbarTitle', 'Informatika Market')

{{-- Isi content --}}
@section('contentMarketplace')
    {{-- Navigasi Bar --}}
    <nav class="navbar fixed-top navbar-expand-lg shadow-lg">
        <div class="container">
            <a class="navbar-brand fw-semibold text-white"><img src="img/general/logogundar.png" alt="logogundar" width="25"
                    class="mb-1" />&nbsp;@yield('navbarTitle')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fw-semibold ms-auto gap-2">
                    <li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari Produk..."
                                aria-label="Search">
                            <button class="btn" type="submit" style="background-color: #e0f2fe"><i
                                    class="bi bi-search"></i></button>
                        </form>
                    </li>
                    <li>
                        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                            aria-controls="staticBackdrop" style="background-color: #e0f2fe">
                            <i class="bi bi-border-width"></i> Service
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Sidebar --}}
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header" style="background-color: #0284c7">
            <h5 class="offcanvas-title text-white" id="staticBackdropLabel">Welcome, {{ auth()->user()->name }}
            </h5>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #bae6fd">
            <div class="bannerSidebar text-center">
                <img src="/img/marketplace/sidebar/image-1.png" alt="" width="365" class="rounded-2">
            </div>
            <div class="list-group ms-auto mt-3">
                <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action"><i
                        class="bi bi-archive-fill me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-bag-fill me-2"></i>Shopping
                    Cart</a>
                <a href="#" class="list-group-item list-group-item-action"><i
                        class="bi bi-wallet2 me-2"></i>InforPay</a>
                <a href="#" class="list-group-item list-group-item-action"><i
                        class="bi bi-sliders2 me-2"></i>Setting</a>
                <a href="#" class="list-group-item list-group-item-action"><i
                        class="bi bi-person-rolodex me-2"></i>Contact Us</a>
                <a href="#" class="list-group-item list-group-item-action rounded-bottom"><i
                        class="bi bi-exclamation-circle-fill me-2"></i>About</a>
                <a class="list-group-item list-group-item-action mt-5">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item fw-semibold"><i
                                class="bi bi-box-arrow-left me-2"></i>Logout account "{{ auth()->user()->name }}"
                        </button>
                    </form>
                </a>
            </div>
        </div>
    </div>

    {{-- Tag Product --}}
    <section class="tagProduct rounded-4">
        <div class="container">

            {{-- Category Product --}}
            <div class="categoryProduct">
                <div class="card p-3" style="background-color: #90e8f0">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card-header fw-bold rounded-2 shadow-sm text-center w-50"
                                style="background-color: #ffffff">
                                <i class="bi bi-tags-fill"></i> Category Product
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="d-flex fw-bold rounded-2 shadow-sm text-center w-100" role="search">
                                <input class="form-control me-2" type="search" placeholder="Cari Kategori Produk..."
                                    aria-label="Search">
                                <button class="btn" type="submit" style="background-color: #e0f2fe"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="row card-body">
                        <div class="col-md-2">
                            <div class="categoryItem text-center">
                                <a href="">
                                    <img src="img/marketplace/categoryproduct/image-1.png" alt="image-1" width="100">
                                    <h5 class="bg-primary p-1 text-white rounded-bottom">Topi</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="categoryItem text-center">
                                <a href="">
                                    <img src="img/marketplace/categoryproduct/image-2.png" alt="image-2" width="100">
                                    <h5 class="bg-primary p-1 text-white rounded-bottom">Kaos</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="categoryItem text-center">
                                <a href="">
                                    <img src="img/marketplace/categoryproduct/image-3.png" alt="image-3" width="100">
                                    <h5 class="bg-primary p-1 text-white rounded-bottom">Buku</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="categoryItem text-center">
                                <a href="">
                                    <img src="img/marketplace/categoryproduct/image-4.png" alt="image-4" width="100">
                                    <h5 class="bg-primary p-1 text-white rounded-bottom">Kemeja</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Flash Sale Product --}}
            <div class="flashSaleProduct mt-4">
                <div class="card p-3" style="background-color: #90e8f0">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card-header fw-bold rounded-2 shadow-sm text-center w-50"
                                style="background-color: #ffffff">
                                <i class="bi bi-tags-fill"></i> Flash Sale Product
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="d-flex fw-bold rounded-2 shadow-sm text-center w-100" role="search">
                                <input class="form-control me-2" type="search" placeholder="Cari Flash Sale Produk..."
                                    aria-label="Search">
                                <button class="btn" type="submit" style="background-color: #e0f2fe"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="row card-body">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 </p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width:  15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 </p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 </p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Recommend Product --}}
            <div class="recommendProduct mt-4">
                <div class="card p-3" style="background-color: #90e8f0">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card-header fw-bold rounded-2 shadow-sm text-center w-50"
                                style="background-color: #ffffff">
                                <i class="bi bi-tags-fill"></i> Recommend Product
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="d-flex fw-bold rounded-2 shadow-sm text-center w-100" role="search">
                                <input class="form-control me-2" type="search" placeholder="Cari Flash Sale Produk..."
                                    aria-label="Search">
                                <button class="btn" type="submit" style="background-color: #e0f2fe"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="row card-body">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 <br>anti basah, anti badai, anti hujan, anti kiamat</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width:  15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 <br>anti basah, anti badai, anti hujan, anti kiamat</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width:  15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 <br>anti basah, anti badai, anti hujan, anti kiamat</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="/img/marketplace/carousell-item1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Polo Knit</h5>
                                    <p class="card-text">Rp.20.000 <br>anti basah, anti badai, anti hujan, anti kiamat</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-primary">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
