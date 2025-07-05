@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffff;
        color: #040621;
    }

    .btn-primary {
        background-color: #040621;
        border-color: #040621;
    }

    .btn-primary:hover {
        background-color: #2c2d6b;
        border-color: #2c2d6b;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: .5rem;
        border-top-right-radius: .5rem;
    }

    .card {
        border: none;
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-footer {
        background-color: #f8f9fa;
    }

    .card-title {
        color: #040621;
        font-weight: 600;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #040621;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
</style>

<div class="container py-4">
    <h2 class="mb-4 fw-bold">Daftar Menu</h2>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-4">Tambah Menu</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $menu->gambar) }}" class="card-img-top" alt="{{ $menu->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($menu->deskripsi, 100) }}</p>
                        <p class="card-text fw-bold text-dark">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus menu ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
