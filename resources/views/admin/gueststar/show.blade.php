@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Detail Guest Star</h2>
    <div class="card">
        <div class="card-body">
            <h4>{{ $guestStar->nama_band_artis }}</h4>
            <p><strong>Deskripsi:</strong> {{ $guestStar->deskripsi }}</p>
            <p><strong>Anggota Band:</strong> {{ $guestStar->anggota_band }}</p>
            <p><strong>Instagram:</strong> {{ $guestStar->instagram }}</p>
            <p><strong>Twitter:</strong> {{ $guestStar->twitter }}</p>
            <p><strong>Youtube:</strong> {{ $guestStar->youtube }}</p>
            <p><strong>Foto:</strong><br>
                @if($guestStar->foto)
                    <img src="{{ asset('storage/' . $guestStar->foto) }}" width="120"/>
                @else
                    Tidak ada foto
                @endif
            </p>
            <a href="{{ route('gueststar.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
