@foreach($guestStars as $star)
  <div class="gueststar-card gueststar-card-split {{ $loop->index % 2 == 0 ? '' : 'split-right' }}">
    <div class="position-relative">
      <img alt="{{ $star->nama_band_artis }}" class="card-img-top img-fluid" src="{{ $star->foto ? asset($star->foto) : asset('images/GuestStar/default.jpg') }}">
    </div>
    <div class="card-body">
      <div class="gueststar-bandname">{{ $star->nama_band_artis }}</div>
      <button class="btn btn-modern-readmore2" type="button" onclick="openGuestStarModal({{ $star->id }})">READ MORE</button>
    </div>
  </div>
@endforeach
