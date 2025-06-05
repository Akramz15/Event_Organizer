@extends('admin.layouts.main')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Guest Star List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('gueststar.create') }}" class="btn btn-primary mb-3">Tambah Guest Star</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Band/Artis</th>
                    <th>Deskripsi</th>
                    <th>Anggota Band</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Youtube</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guestStars as $star)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $star->nama_band_artis }}</td>
                    <td style="max-width:200px; white-space:pre-line; word-break:break-word;">{{ $star->deskripsi }}</td>
                    <td style="max-width:150px; white-space:pre-line; word-break:break-word;">{{ $star->anggota_band }}</td>
                    <td>
                        @if($star->instagram)
                            <a href="{{ $star->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                    </td>
                    <td>
                        @if($star->twitter)
                            <a href="{{ $star->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                    </td>
                    <td>
                        @if($star->youtube)
                            <a href="{{ $star->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        @endif
                    </td>
                    <td>
                        @if($star->foto)
                            <img src="{{ asset($star->foto) }}" width="80" class="img-thumbnail"/>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('gueststar.edit', $star->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                        <form action="{{ route('gueststar.destroy', $star->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
