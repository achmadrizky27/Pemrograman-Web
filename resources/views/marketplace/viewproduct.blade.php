@extends('marketplace.index')

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

    <section class="viewCategoryProduct" id="viewCategoryProduct">
        <h1>halaman category</h1>
    </section>
@endsection
