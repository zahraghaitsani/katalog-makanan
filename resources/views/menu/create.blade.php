@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Menu</h2>

    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi (maks. 255 karakter)</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <input type="number" step="0.01" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" onchange="previewGambar(event)">
            <img id="preview" src="#" alt="Preview Gambar" class="img-thumbnail mt-2 d-none" style="max-height: 200px;">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
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