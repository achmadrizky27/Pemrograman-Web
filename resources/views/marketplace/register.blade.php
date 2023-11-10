@extends('layout.index')
@section('pageTitle', '| Informatika Market - Register')
@section('navbarTitle', 'Informatika Market')
@section('content')
    <section class="register">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Form registration --}}
                <div class="col-md-6">
                    <h3 class="fst-italic mb-3 text-center text-white">Register</h3>
                    <main class="formRegister">
                        <form action="register" method="POST">
                            @csrf
                            {{-- Nama lengkap --}}
                            <div class="form-floating">
                                <input type="text" name="name"
                                    class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                    placeholder="Nama Lengkap" required value="{{ old('name') }}">
                                <label for="name">Fullname</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        The name field is required!
                                    </div>
                                @enderror
                            </div>

                            {{-- Nama Pengguna --}}
                            <div class="form-floating">
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    placeholder="Username" required value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        The username field is required!
                                    </div>
                                @enderror
                            </div>

                            {{-- Email address --}}
                            <div class="form-floating">
                                <input type="email" name="email"
                                    class="form-control  @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" required value="{{ old('email') }}">
                                <label for="email">Email Address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        The email field is required!
                                    </div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="form-floating ">
                                <input type="password"
                                    name="password"class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        The password field is required!
                                    </div>
                                @enderror
                            </div>
                            <p class="mt-3 text-white">By clicking <span class="fw-semibold">Register</span>,
                                you have read and agreed to the Informatics
                                Market <a href="">Terms and Conditions</a> of service</p>
                            <button class="w-100 btn btn-sm btn-primary mt-2 mb-2 p-2" type="submit">Register</button>
                        </form>
                        <small class="text-white">Have an account? <a href="{{ url('login') }}">Log in!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection
