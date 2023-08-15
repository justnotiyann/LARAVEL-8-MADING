@extends('index')

@section('body')
<form action="/login" method="post">
    <div class="container">

        <img src="/img/logo.jpg" alt="Animated Image" class="animated-image">

        <div class="form-container">

            @csrf

            @if (session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
            @endif

            <h2>Login</h2>
            <p>Hey,Enter your details to get sign in to your account</p>
            <input class="email" type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            {{-- Input tidak sama dengan button, dari fungsi juga berbeda --}}
            {{-- <input class="btn popular" type="submit" name="submit" value="Login"> --}}


            {{-- Tambahkan class berikut untuk proses styling button menggunakan framework css boostrap --}}
            <button class="btn btn-primary">Login</button>

            <p>Belum Punya akun? <a href="register.html">Daftar</a></p>
        </div>
    </div>
</form>
@endsection
