@extends('index')

@section('body')
    <div class="container">
        <img src="/img/logo.jpg" alt="Animated Image" class="animated-image">
        <div class="form-container">
            <form action="/register" id="register-form" method="post" class="form">

                {{-- token csrf bertujuan untuk proteksi --}}
                @csrf

                {{-- Tampilkan error ketika validasi gagal --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2>Register</h2>
                <input type="name" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="username" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="hidden" name="level" id="level" value="user">

                <button class="btn btn-primary">Register</button>

                <p>Sudah Punya Akun? <a href="login.html">Login</a></p>

            </form>

        </div>
    </div>
@endsection
