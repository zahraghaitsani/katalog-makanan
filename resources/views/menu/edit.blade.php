@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffff;
        color: #040621;
    }

    .form-label {
        font-weight: 600;
    }

    .form-control:focus {
        border-color: #040621;
        box-shadow: 0 0 0 0.2rem rgba(4, 6, 33, 0.25);
    }

    .btn-primary {
        background-color: #040621;
        border-color: #040621;
    }

    .btn-primary:hover {
        background-color: #2c2d6b;
        border-color: #2c2d6b;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    h2 {
        font-weight: bold;
        color: #040621;
    }

    .img-thumbnail {
        border-radius: 8px;
    }
</style>

<div class="container py-4">
    <h2 class="mb-4">Edit Menu</h2>

    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $menu->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi (maks. 255 karakter)</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $menu->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <input type="number" step="0.01" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" onchange="previewGambar(event)">
            <img src="{{ asset('storage/' . $menu->gambar) }}" alt="Gambar Saat Ini" class="img-thumbnail mt-2" style="max-height: 200px;">
            <img id="preview" class="img-thumbnail mt-2 d-none" style="max-height: 200px;">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
function previewGambar(event) {
    const preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.classList.remove('d-none');
}
</script>
@endsection
