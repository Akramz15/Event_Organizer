@extends('admin.layouts.main')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Tambah Guest Star</h2>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('gueststar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Band/Artis</label>
                            <input type="text" name="nama_band_artis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Anggota Band</label>
                            <textarea name="anggota_band" class="form-control" rows="2" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <label class="form-label">Instagram</label>
                                <input type="text" name="instagram" class="form-control" placeholder="@username">
                            </div>
                            <div class="col-md-4 mb-2 mb-md-0">
                                <label class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control" placeholder="@username">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Youtube</label>
                                <input type="text" name="youtube" class="form-control" placeholder="Channel/Link">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('gueststar.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
