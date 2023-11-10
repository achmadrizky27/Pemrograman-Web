@extends('layout.index')

@section('pageTitle', '| Informatika Market - Login')
@section('navbarTitle', 'Informatika Market')

@section('content')

    {{-- Sign in --}}
    <section class="signIn" id="signIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    {{-- Carousel --}}
                    <div class="componentCarousel shadow-lg">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner shadow-lg">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="/img/marketplace/carousel/image-1.png" class="d-block w-100 rounded-2"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="/img/marketplace/carousel/image-2.png" class="d-block w-100 rounded-2"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="/img/marketplace/carousel/image-3.png" class="d-block w-100 rounded-2"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form sign in --}}
                <div class="col-md-5 mt-2">
                    <h3 class="fst-italic text-white">Login</h3>

                    {{-- Alert pemberitahuan --}}
                    @if (session()->has('success'))
                        <div class="alert alert-dismissible fade show text-white" role="alert"
                            style="background-color: #0369a1">
                            {{ session('success') }} <i class="bi bi-check-circle-fill" style="color: #00ff11"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-dismissible fade show text-white" role="alert"
                            style="background-color: #0369a1">
                            {{ session('loginError') }} <i class="bi bi-x-circle-fill" style="color: #ff0000"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <main class="formSignin">
                        <form action="login" method="POST">
                            @csrf

                            {{-- Email address --}}
                            <div class="form-floating">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                <label for="email">Email
                                    Address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        The email field is required!
                                    </div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="password" required>
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-sm btn-primary mt-2 mb-2 p-2" type="submit">Login</button>
                        </form>
                        <small class="text-white">Not registered yet? <a href="{{ url('register') }}">Register
                                now!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection
