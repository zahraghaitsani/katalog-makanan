@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffff;
        color: #040621;
    }

    .hero-section {
        padding: 80px 0;
        text-align: center;
        background: linear-gradient(to right, #040621, #0f0f4d);
        color: white;
        border-radius: 10px;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 30px;
    }

    .btn-ww {
        background-color: white;
        color: #040621;
        font-weight: bold;
        border: none;
        padding: 10px 30px;
        font-size: 1.1rem;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .btn-ww:hover {
        background-color: #e0e0e0;
        color: #000;
    }

    .section-about {
        margin-top: 60px;
        text-align: center;
    }
</style>

<div class="container">
    <div class="hero-section">
        <div class="hero-title">Selamat Datang di Warteg Worldwide (WWw)</div>
        <div class="hero-subtitle">Nikmati berbagai menu lokal dari berbagai belahan dunia!</div>
        @guest
        <a href="{{ route('login') }}" class="btn btn-ww me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-ww">Daftar</a>
        @else
        <a href="{{ route('home') }}" class="btn btn-ww">Dashboard</a>
        @endguest
    </div>

    <div class="section-about">
        <h3 class="mt-5 mb-3">Tentang WWw</h3>
        <p class="lead">WWw (Warteg Worldwide) adalah platform makanan digital yang menyajikan menu tradisional maupun kekinian dari berbagai negara. Temukan rasa, nostalgia, dan inovasi dalam satu tempat.</p>
    </div>
</div>
@endsection
