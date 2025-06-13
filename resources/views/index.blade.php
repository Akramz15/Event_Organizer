<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;width:100%;max-width:100vw;min-height:100vh;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event Organizer</title>
  
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700,800,900&display=swap" rel="stylesheet">
    <style>
    
.section-title, #about h3 {
    font-family: 'Poppins', Arial, Helvetica, sans-serif !important;
    font-size: 2.2rem !important;
    font-weight: 800 !important;
    letter-spacing: 1px;
    color: #222;
    text-align: left !important;
    text-transform: uppercase;
    margin-bottom: 2.2rem;
}
.section-title-team {
    font-family: 'Poppins', Arial, Helvetica, sans-serif !important;
    font-size: 2.2rem !important;
    font-weight: 800 !important;
    letter-spacing: 1px;
    color: #222;
    text-align: center !important;
    text-transform: uppercase;
    margin-top: 3.5rem;
    margin-bottom: 1.7rem; 
}
@media (max-width: 600px) {
    .section-title, .section-title-team, #about h3 {
        font-size: 1.35rem !important;
    }
    .section-title-team {
        margin-top: 2.2rem;
        margin-bottom: 1.1rem;
    }
}

.section-animate {
  opacity: 0;
  transform: translateY(60px) scale(0.98);
  transition: opacity 0.7s cubic-bezier(.4,2,.6,1), transform 0.7s cubic-bezier(.4,2,.6,1);
  will-change: opacity, transform;
}
.section-animate.in-view {
  opacity: 1;
  transform: translateY(0) scale(1);
}
.section-animate-fade {
  opacity: 0;
  transform: scale(0.96);
  transition: opacity 0.8s cubic-bezier(.4,2,.6,1), transform 0.8s cubic-bezier(.4,2,.6,1);
}
.section-animate-fade.in-view {
  opacity: 1;
  transform: scale(1);
}
.section-animate-left {
  opacity: 0;
  transform: translateX(-60px) scale(0.98);
  transition: opacity 0.7s cubic-bezier(.4,2,.6,1), transform 0.7s cubic-bezier(.4,2,.6,1);
}
.section-animate-left.in-view {
  opacity: 1;
  transform: translateX(0) scale(1);
}
.section-animate-right {
  opacity: 0;
  transform: translateX(60px) scale(0.98);
  transition: opacity 0.7s cubic-bezier(.4,2,.6,1), transform 0.7s cubic-bezier(.4,2,.6,1);
}
.section-animate-right.in-view {
  opacity: 1;
  transform: translateX(0) scale(1);
}

#about.section-animate-parallax {
  opacity: 0;
  transform: translateY(80px) scale(0.97);
  transition: opacity 1s cubic-bezier(.4,2,.6,1), transform 1s cubic-bezier(.4,2,.6,1);
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
#about.section-animate-parallax.in-view {
  opacity: 1;
  transform: translateY(0) scale(1);
}
#about .about-fade-text {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.7s 0.1s, transform 0.7s 0.1s;
}
#about.in-view .about-fade-text {
  opacity: 1;
  transform: translateY(0);
}
#about .about-fade-img {
  opacity: 0;
  transform: translateY(60px) scale(0.95);
  transition: opacity 1s 0.3s, transform 1s 0.3s;
}
#about.in-view .about-fade-img {
  opacity: 1;
  transform: translateY(0) scale(1);
}

#gueststar.section-animate-split { position: relative; }
.gueststar-card-split { opacity: 0; transform: translateX(-80px) scale(0.95); transition: opacity 0.8s, transform 0.8s; box-shadow: 0 4px 32px 0 rgba(41,182,246,0.13), 0 0 24px 0 #29b6f633; }
.gueststar-card-split.split-right { transform: translateX(80px) scale(0.95); }
#gueststar.in-view .gueststar-card-split { opacity: 1; transform: translateX(0) scale(1); }
.gueststar-bandname-animated { display: inline-block; font-weight: bold; font-size: 1.18rem; color: #fff; text-shadow: 0 2px 16px #222, 0 0 8px #29b6f6; opacity: 0; letter-spacing: 0.5px; background: rgba(0,0,0,0.32); border-radius: 8px; padding: 0.2em 0.7em; margin-top: 0.7em; animation: gueststarTextAnim 1.2s steps(12) forwards; animation-delay: 0.5s; }
#gueststar.in-view .gueststar-bandname-animated { opacity: 1; }
@keyframes gueststarTextAnim { from { clip-path: inset(0 100% 0 0); } to { clip-path: inset(0 0 0 0); } }

#team.section-animate-rotate {}
.carousel-partner-slide.stagger-animate { opacity: 0; transform: rotateY(60deg) scale(0.92); transition: opacity 0.7s, transform 0.7s; will-change: opacity, transform; }
#team.in-view .carousel-partner-slide.stagger-animate { opacity: 1; transform: rotateY(0) scale(1); }
.carousel-partner-slide.stagger-animate:hover { box-shadow: 0 8px 32px #29b6f655, 0 2px 8px #0002; transform: scale(1.06) rotateY(0); }

#photos.section-animate-grid { opacity: 0; transform: scale(0.7) translateY(80px); transition: opacity 0.9s, transform 0.9s; }
#photos.section-animate-grid.in-view { opacity: 1; transform: scale(1) translateY(0); }
.gallery-photo-modern.grid-zoom { opacity: 0; transform: scale(0.7); transition: opacity 0.7s, transform 0.7s; }
.gallery-photo-modern.grid-zoom.in-view { opacity: 1; transform: scale(1); }
.gallery-modal-overlay { backdrop-filter: blur(8px) brightness(0.7); transition: backdrop-filter 0.4s; }
.gallery-modal-content { animation: modalSliderIn 0.5s cubic-bezier(.4,2,.6,1); }
@keyframes modalSliderIn { from { opacity: 0; transform: translateX(60px) scale(0.95); } to { opacity: 1; transform: translateX(0) scale(1); } }
.gallery-modal-img { transition: transform 0.5s cubic-bezier(.4,2,.6,1); }
.gallery-modal-img.slide-in { animation: imgSlideIn 0.5s cubic-bezier(.4,2,.6,1); }
@keyframes imgSlideIn { from { opacity: 0; transform: translateX(60px) scale(0.95); } to { opacity: 1; transform: translateX(0) scale(1); } }

.gueststar-bandname {
  margin-top: 0.7rem;
  font-family: 'Poppins', Arial, Helvetica, sans-serif;
  font-size: 1.08rem;
  font-weight: 700;
  color: #222;
  text-align: center;
  letter-spacing: 0.2px;
  margin: 0.7rem 0 1.2rem 0; 
}

.gueststar-card img.card-img-top,
.gallery-photo-modern {
  transition: box-shadow 0.18s, transform 0.18s, filter 0.18s;
}
.gueststar-card img.card-img-top:hover,
.gueststar-card img.card-img-top:focus,
.gallery-photo-modern:hover,
.gallery-photo-modern:focus {
  transform: translateY(-6px) scale(1.045);
  box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.10);
  filter: brightness(1.07) saturate(1.12);
  z-index: 2;
}

.gueststar-card,
.gallery-grid-item {
  transition: box-shadow 0.18s, transform 0.18s, filter 0.18s;
}
.gueststar-card:hover,
.gueststar-card:focus,
.gallery-grid-item:hover,
.gallery-grid-item:focus {
  transform: translateY(-8px) scale(1.045);
  box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.10);
  filter: brightness(1.07) saturate(1.12);
  z-index: 2;
}
.gueststar-card img.card-img-top,
.gallery-photo-modern {
  transition: box-shadow 0.18s, transform 0.18s, filter 0.18s;
}
.gueststar-card:hover img.card-img-top,
.gueststar-card:focus img.card-img-top,
.gallery-grid-item:hover .gallery-photo-modern,
.gallery-grid-item:focus .gallery-photo-modern {
  transform: scale(1.045);
  box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.10);
  filter: brightness(1.07) saturate(1.12);
}
    </style>
</head>
<body data-spy="scroll" data-target="#site-nav" style="background:none !important;margin:0;padding:0;overflow-x:hidden;width:100%;max-width:100vw;min-height:100vh;">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom navbar-modern">
        <div class="container">
            <div class="navbar-header">
                <div class="site-branding">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="Logo">
                        Event Organizer
                    </a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-scroll href="#about" class="nav-link">About</a></li>
                    <li><a data-scroll href="#gueststar" class="nav-link">Guest Star</a></li>
                    <li><a data-scroll href="#team" class="nav-link">Team</a></li>
                    <li><a data-scroll href="#photos" class="nav-link">Photos</a></li>
                    <li><a href="/admin" class="nav-link">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" style="position:relative;width:100vw;max-width:100vw;height:100vh;overflow:hidden;padding:0;margin:0;background:none !important;">
        <video autoplay loop muted playsinline class="hero-bg-video" style="position:absolute;top:0;left:0;width:100vw;max-width:100vw;height:100vh;object-fit:cover;z-index:-1;background:none !important;">
            <source src="images/your-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-center-content">
            <h1 class="hero-title-main">ASM Fest 2025 Siap Mengguncang!</h1>
            <div class="hero-subtitle-main">Malam penuh irama dan euforia menanti di Teknik UNY, 20 Juni 2025.</div>
        </div>
    </section>

    <div class="main-bg-white" style="background:#fff;">
        <section id="about" class="section about" style="padding-top:4rem;padding-bottom:6rem;">
          <div class="container" data-aos="fade-up" style="padding-bottom:80px;">
            <div class="row d-flex align-items-center flex-md-row flex-column" style="display: flex; flex-wrap: wrap; gap: 3rem; margin-top:60px;">
              <div class="col-md-6" style="flex:1 1 0; min-width:300px; max-width:50%;">
                <h3 class="text-4xl font-bold tracking-wide mb-6" style="text-transform:uppercase;letter-spacing:2px;font-weight:bold;">About Us</h3>
                <p class="text-gray-700 leading-relaxed mb-6" style="font-size:1.08rem;text-align:justify;">ASM Event Organizer adalah mitra terbaik Anda dalam menciptakan konser dan event musik yang tak terlupakan. Kami hadir sebagai tim profesional yang menangani setiap detail mulai dari konsep, koordinasi kru, hingga pelaksanaan di lapangan. Kami memastikan pengalaman menonton yang seru dan mendukung artis agar tampil maksimal melalui perencanaan acara yang matang dan profesional.</p>
                <figure class="mt-6">
                  <img alt="Konser" class="img-responsive object-cover w-full rounded-lg shadow-lg" style="max-height:250px;object-fit:cover;width:100%;" src="images/about-us.jpg">
                </figure>
              </div>
              <div class="col-md-6" style="flex:1 1 0; min-width:300px; max-width:50%;">
                <h3 class="text-4xl font-bold tracking-wide mb-6" style="text-transform:uppercase;letter-spacing:2px;font-weight:bold;">What is Our Goal?</h3>
                <p class="text-gray-700 leading-relaxed mb-6" style="font-size:1.08rem;text-align:justify;">ASM Event Organizer bertujuan untuk menciptakan acara-acara yang berkesan, profesional, dan terorganisir dengan baik, khususnya di bidang konser musik. ASM Event Organizer hadir untuk menjadi mitra terpercaya dalam mewujudkan ide dan visi klien menjadi sebuah pengalaman panggung yang spektakuler. Kami ingin setiap pertunjukan dari awal hingga akhir berjalan lancar, seru, dan dieksekusi secara profesional.</p>
                <ul class="list-unstyled space-y-3" style="padding-left:0;max-width:100%;">
                  <li class="about-check-item"><span class="about-check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="1.25em" height="1.25em" style="display:block;"><circle cx="10" cy="10" r="10" fill="#f3f4f6"/><path d="M6.5 10.5l2.5 2.5 4.5-5" stroke="#222" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="about-check-text">Menghadiri konser seru dan berkesan</span></li>
                  <li class="about-check-item"><span class="about-check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="1.25em" height="1.25em" style="display:block;"><circle cx="10" cy="10" r="10" fill="#f3f4f6"/><path d="M6.5 10.5l2.5 2.5 4.5-5" stroke="#222" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="about-check-text">Mendukung artis dengan produksi yang lancar</span></li>
                  <li class="about-check-item"><span class="about-check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="1.25em" height="1.25em" style="display:block;"><circle cx="10" cy="10" r="10" fill="#f3f4f6"/><path d="M6.5 10.5l2.5 2.5 4.5-5" stroke="#222" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="about-check-text">Menyatukan kreativitas dan perencanaan matang</span></li>
                  <li class="about-check-item"><span class="about-check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="1.25em" height="1.25em" style="display:block;"><circle cx="10" cy="10" r="10" fill="#f3f4f6"/><path d="M6.5 10.5l2.5 2.5 4.5-5" stroke="#222" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="about-check-text">Meningkatkan standar event lewat inovasi dan profesionalisme</span></li>
                </ul>
                <style>
                .about-check-item {
                  display: flex;
                  align-items: flex-start;
                  margin-bottom: 1.1em;
                  font-weight: 500;
                  font-size: 1.04rem;
                  line-height: 1.5;
                  letter-spacing: 0.1px;
                  min-height: 1.25em;
                }
                .about-check-icon {
                  display: flex;
                  align-items: flex-start;
                  justify-content: center;
                  margin-right: 0.7em;
                  min-width: 1.25em;
                  min-height: 1.25em;
                  height: 1.25em;
                  margin-top: 0.18em;
                }
                .about-check-text {
                  display: flex;
                  align-items: flex-start;
                  text-align: left;
                  word-break: break-word;
                  flex-direction: column;
                }
                .about-check-item-multiline .about-check-text {
                  flex-direction: column;
                }
                .about-check-text-main {
                  display: inline;
                }
                .about-check-text-follow {
                  display: inline;
                  margin-left: 0;
                }
                @media (max-width: 600px) {
                  .about-check-item { font-size: 0.98rem; }
                }
                </style>
              </div>
            </div>
          </div>
        </section>
    
        <section id="gueststar" class="section gueststar" style="margin-top:0;padding-top:5.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Guest Star</h3>
            </div>
        </div>
        <div class="row">
            <div class="container gueststar-section-container">
                <div class="gueststar-grid">
                    @foreach($guestStars as $star)
                    <div class="gueststar-card gueststar-card-split {{ $loop->index % 2 == 0 ? '' : 'split-right' }}">
                      <div class="position-relative">
                        @php
                          $foto = $star->foto;
                          $fotoPath = null;
                          if ($foto) {
                            if (file_exists(public_path('storage/' . $foto))) {
                              $fotoPath = asset('storage/' . $foto);
                            } elseif (file_exists(public_path('images/GuestStar/' . $foto))) {
                              $fotoPath = asset('images/GuestStar/' . $foto);
                            } elseif (file_exists(public_path($foto))) {
                              $fotoPath = asset($foto);
                            } else {
                              $fotoPath = asset('images/GuestStar/default.jpg');
                            }
                          } else {
                            $fotoPath = asset('images/GuestStar/default.jpg');
                          }
                        @endphp
                        <img alt="{{ $star->nama_band_artis }}" class="card-img-top img-fluid" src="{{ $fotoPath }}">
                      </div>
                      <div class="card-body">
                        <div class="gueststar-bandname">{{ $star->nama_band_artis }}</div>
                        <button class="btn btn-modern-readmore2" type="button" onclick="openGuestStarModal({{ $star->id }})">READ MORE</button>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div id="gueststarModalOverlay" class="gueststar-modal-overlay" style="display:none;">
  <div class="gueststar-modal-centered" id="gueststarModalContent">
    <button type="button" class="gueststar-modal-close" onclick="closeGuestStarModal()" aria-label="Close">
      <span aria-hidden="true">&#10006;</span>
    </button>
    <div class="gueststar-modal-grid-vertical" id="gueststarModalInner">
    </div>
  </div>
</div>
<script>
const guestStars = @json($guestStars);
function openGuestStarModal(id) {
  const star = guestStars.find(s => s.id === id);
  if (!star) return;
  let imgSrc = 'images/GuestStar/default.jpg';
  if (star.foto) {
    if (star.foto.startsWith('gueststar/')) {
      imgSrc = '/storage/' + star.foto;
    } else {
      imgSrc = '/' + star.foto;
    }
  }
  let socials = '';
  if (star.instagram) {
    socials += `<a href="https://instagram.com/${star.instagram.replace(/^@/, '')}" target="_blank" class="gueststar-social-icon" title="Instagram"><i class="ion-social-instagram"></i></a>`;
  }
  if (star.twitter) {
    socials += `<a href="https://twitter.com/${star.twitter.replace(/^@/, '')}" target="_blank" class="gueststar-social-icon" title="Twitter"><i class="ion-social-twitter"></i></a>`;
  }
  if (star.youtube) {
    socials += `<a href="https://www.youtube.com/results?search_query=${encodeURIComponent(star.youtube)}" target="_blank" class="gueststar-social-icon" title="YouTube"><i class="ion-social-youtube"></i></a>`;
  }
  document.getElementById('gueststarModalInner').innerHTML = `
    <div class=\"gueststar-modal-img-col\" style=\"display:flex;justify-content:center;align-items:center;width:100%;\">
      <img src=\"${imgSrc}\" alt=\"${star.nama_band_artis}\" class=\"gueststar-modal-img\" style=\"width:220px;height:220px;object-fit:cover;border-radius:1.1rem;box-shadow:0 4px 18px rgba(41,182,246,0.13);background:#f4f4f4;aspect-ratio:1/1;display:block;\" />
    </div>
    <div class=\"gueststar-modal-info-col\">
      <div class=\"gueststar-modal-section\">
        <div class=\"gueststar-modal-section-title\">Deskripsi:</div>
        <div class=\"gueststar-modal-section-body\">${star.deskripsi}</div>
      </div>
      <div class=\"gueststar-modal-section\">
        <div class=\"gueststar-modal-section-title\">Anggota Band:</div>
        <div class=\"gueststar-modal-section-body\">${star.anggota_band.replace(/\n/g, '<br>')}</div>
      </div>
      <div class=\"gueststar-modal-section\">
        <div class=\"gueststar-modal-section-title\">Sosial Media:</div>
        <div class=\"gueststar-modal-socials\">${socials}</div>
      </div>
    </div>
  `;
  document.getElementById('gueststarModalOverlay').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closeGuestStarModal() {
  document.getElementById('gueststarModalOverlay').style.display = 'none';
  document.body.style.overflow = '';
}
window.addEventListener('click', function(e) {
  const overlay = document.getElementById('gueststarModalOverlay');
  if (e.target === overlay) closeGuestStarModal();
});
window.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeGuestStarModal();
});
</script>

        <section id="team" class="section team">
    <div class="container-fluid" style="padding:0;">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title section-title-team">ASM Team</h3>
            </div>
        </div>
        <div class="carousel-partner-wrapper">
            <button class="carousel-partner-arrow left" aria-label="Sebelumnya">&#10094;</button>
            <div class="carousel-partner-viewport">
                <div class="carousel-partner-track">
                    <div class="carousel-partner-slide">
                        <div class="carousel-partner-photo-frame">
                            <img src="images/partner/partner-1.JPG" alt="Partner 1" class="carousel-partner-photo" />
                        </div>
                        <div class="carousel-partner-name">Naufal Akramziyad P.H</div>
                    </div>
                    <div class="carousel-partner-slide">
                        <div class="carousel-partner-photo-frame">
                            <img src="images/partner/partner-2.JPG" alt="Partner 2" class="carousel-partner-photo" />
                        </div>
                        <div class="carousel-partner-name">Jeremy Steven Joe Pasaribu</div>
                    </div>
                    <div class="carousel-partner-slide">
                        <div class="carousel-partner-photo-frame">
                            <img src="images/partner/partner-3.JPG" alt="Partner 3" class="carousel-partner-photo" />
                        </div>
                        <div class="carousel-partner-name">M. Abidzan Al-Ghifary</div>
                    </div>
                    <div class="carousel-partner-slide">
                        <div class="carousel-partner-photo-frame">
                            <img src="images/partner/partner-4.JPG" alt="Partner 4" class="carousel-partner-photo" />
                        </div>
                        <div class="carousel-partner-name">Pramudya Tien Meylandri</div>
                    </div>
                    <div class="carousel-partner-slide">
                        <div class="carousel-partner-photo-frame">
                            <img src="images/partner/partner-5.JPG" alt="Partner 5" class="carousel-partner-photo" />
                        </div>
                        <div class="carousel-partner-name">Amelia Anggraini Putri</div>
                    </div>
                </div>
            </div>
            <button class="carousel-partner-arrow right" aria-label="Berikutnya">&#10095;</button>
        </div>
    </div>
</section>
<style>
.section-title-team {
    text-align: center;
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    font-size: 2.2rem;
    font-weight: 800;
    margin-top: 15px;
    margin-bottom: 1.7rem; 
    letter-spacing: 1px;
    color: #222;
}
@media (max-width: 600px) {
    .section-title-team {
        font-size: 1.35rem;
        margin-top: 2.2rem;
        margin-bottom: 1.1rem;
    }
}
.carousel-partner-wrapper {
    width: 100vw;
    max-width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin: 0 auto 3.5rem auto;
    padding: 0 2vw; 
    overflow: hidden;
}
.carousel-partner-viewport {
    width: 100vw;
    max-width: 100vw;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.carousel-partner-track {
    display: flex;
    transition: transform 0.55s cubic-bezier(.4,2,.6,1);
    will-change: transform;
    width: 100vw;
}
.carousel-partner-slide {
    min-width: 100vw;
    max-width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2.2rem 0 1.2rem 0; 
    box-sizing: border-box;
}
.carousel-partner-photo-frame {
    width: 420px; 
    height: 420px;
    max-width: 90vw;
    max-height: 90vw;
    aspect-ratio: 1/1;
    background: #fff;
    border-radius: 2.7rem;
    border: 2.5px solid #fff;
    box-shadow: 0 12px 40px rgba(41,182,246,0.13), 0 2px 8px rgba(0,0,0,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.1rem;
    overflow: hidden;
    transition: box-shadow 0.22s;
    position: relative;
}
.carousel-partner-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 2.2rem;
    transition: transform 0.32s cubic-bezier(.4,2,.6,1);
    background: #f4f4f4;
    will-change: transform;
    z-index: 1;
}
.carousel-partner-photo-frame:hover .carousel-partner-photo,
.carousel-partner-photo:focus {
    transform: scale(1.13);
    z-index: 2;
}
.carousel-partner-photo-frame:hover {
    box-shadow: 0 16px 48px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.10);
}
.carousel-partner-name {
    font-family: 'Poppins', 'Lato', 'Inter', Arial, Helvetica, sans-serif;
    font-size: 1.32rem;
    font-weight: 600;
    color: #333;
    margin-top: 0.2rem;
    letter-spacing: 0.5px;
    text-align: center;
    text-shadow: 0 1px 6px rgba(41,182,246,0.08);
}
.carousel-partner-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 3.5rem;
    height: 3.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.3rem;
    color: #333;
    background: rgba(255,255,255,0.8);
    border-radius: 50%;
    cursor: pointer;
    opacity: 0.92;
    border: none;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(41,182,246,0.13);
    transition: background 0.18s, color 0.18s, opacity 0.18s;
}
.carousel-partner-arrow.left {
    left: 24vw; 
}
.carousel-partner-arrow.right {
    right: 24vw;
}
@media (max-width: 1100px) {
    .carousel-partner-photo-frame {
        width: 320px;
        height: 320px;
        max-width: 80vw;
        max-height: 80vw;
        border-radius: 1.7rem;
    }
    .carousel-partner-arrow.left, .carousel-partner-arrow.right {
        left: 1vw;
        right: 1vw;
    }
}
@media (max-width: 767px) {
    .carousel-partner-photo-frame {
        width: 90vw;
        height: 90vw;
        max-width: 98vw;
        max-height: 98vw;
        border-radius: 1.2rem;
    }
    .carousel-partner-slide {
        padding: 1.2rem 0 1.2rem 0;
    }
    .carousel-partner-arrow.left {
        left: 0.2rem;
    }
    .carousel-partner-arrow.right {
        right: 0.2rem;
    }
}
.carousel-partner-arrow:hover {
    background: #e3f2fd;
    color: #007bff;
    opacity: 1;
}
        </style>
<script>
(function(){
    const track = document.querySelector('.carousel-partner-track');
    const slides = document.querySelectorAll('.carousel-partner-slide');
    const leftBtn = document.querySelector('.carousel-partner-arrow.left');
    const rightBtn = document.querySelector('.carousel-partner-arrow.right');
    let current = 0;
    function updateCarousel() {
        track.style.transform = `translateX(${-current * 100}vw)`;
    }
    leftBtn.addEventListener('click', function(){
        if(current > 0) { current--; updateCarousel(); }
    });
    rightBtn.addEventListener('click', function(){
        if(current < slides.length-1) { current++; updateCarousel(); }
    });
    window.addEventListener('resize', updateCarousel);
    updateCarousel();
})();
</script>

        <section id="photos" class="section photos" style="margin-top:60px;margin-bottom:60px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Photos</h3>
      </div>
    </div>
    <div class="gallery-container gallery-container-balanced">
      <div class="gallery-grid-modern">
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/feast-1.jpg" alt="Feast" class="gallery-photo-modern" onclick="openGalleryModal(0)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">Feast</div>
        </div>
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/forrevenge-1.jpg" alt="For Revenge" class="gallery-photo-modern" onclick="openGalleryModal(1)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">For Revenge</div>
        </div>
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/hindia-1.jpg" alt="Hindia" class="gallery-photo-modern" onclick="openGalleryModal(2)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">Hindia</div>
        </div>
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/lombasihir-1.jpg" alt="Lomba Sihir" class="gallery-photo-modern" onclick="openGalleryModal(3)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">Lomba Sihir</div>
        </div>
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/nadin-1.jpg" alt="Nadin Amizah" class="gallery-photo-modern" onclick="openGalleryModal(4)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">Nadin Amizah</div>
        </div>
        <div class="gallery-grid-item">
          <div style="position:relative;width:100%;">
            <img src="images/photos/realityclub-1.jpg" alt="Reality Club" class="gallery-photo-modern" onclick="openGalleryModal(5)">
            <div class="gallery-photo-overlay"></div>
          </div>
          <div class="gallery-band-title">Reality Club</div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>

.gallery-grid-modern {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  justify-items: center;
  align-items: stretch;
  margin: 10px auto 0 auto;
  max-width: 1240px;
  width: 100%;
}
@media (max-width: 991px) {
  .gallery-grid-modern {
    grid-template-columns: repeat(2, 1fr);
    max-width: 700px;
    gap: 18px;
  }
}
@media (max-width: 767px) {
  .gallery-grid-modern {
    grid-template-columns: 1fr;
    max-width: 98vw;
    gap: 14px;
  }
}
.gallery-grid-item {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 24px rgba(41,182,246,0.10), 0 1.5px 6px rgba(0,0,0,0.04);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1.5px solid #e3f2fd;
  transition: box-shadow 0.18s, transform 0.18s, filter 0.18s;
  position: relative;
}
.gallery-grid-item:hover, .gallery-grid-item:focus {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.10);
  filter: brightness(1.07) saturate(1.12);
  z-index: 2;
}
.gallery-photo-modern {
  width: 100%;
  aspect-ratio: 16/9;
  height: 220px;
  max-height: 220px;
  min-height: 180px;
  object-fit: cover;
  border-radius: 16px 16px 0 0;
  background: #f4f4f4;
  display: block;
  box-shadow: none;
  transition: box-shadow 0.18s, transform 0.18s, filter 0.18s;
  position: relative;
  z-index: 1;
}
.gallery-grid-item:hover .gallery-photo-modern,
.gallery-grid-item:focus .gallery-photo-modern {
  filter: brightness(0.85) saturate(1.12);
}
.gallery-photo-overlay {
  position: absolute;
  left: 0; right: 0; top: 0; bottom: 0;
  background: rgba(0,0,0,0.18);
  opacity: 0;
  transition: opacity 0.22s;
  z-index: 2;
  pointer-events: none;
  border-radius: 16px 16px 0 0;
}
.gallery-grid-item:hover .gallery-photo-overlay,
.gallery-grid-item:focus .gallery-photo-overlay {
  opacity: 1;
}
.gallery-band-title {
  margin: 0.9rem 0 1.1rem 0;
  font-family: 'Poppins', Arial, Helvetica, sans-serif;
  font-size: 1.08rem;
  font-weight: 700;
  color: #222;
  text-align: center;
  letter-spacing: 0.2px;
}
</style>

<div id="galleryModalOverlay" class="gallery-modal-overlay" style="display:none;">
  <div class="gallery-modal-content">
    <button class="gallery-modal-close" onclick="closeGalleryModal()" aria-label="Close">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="18" cy="18" r="18" fill="rgba(0,0,0,0.18)"/>
        <path d="M12 12L24 24M24 12L12 24" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="gallery-modal-arrow left" onclick="slideGallery(-1)" aria-label="Sebelumnya">
      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="22" cy="22" r="22" fill="#222" fill-opacity="0.85"/>
        <path d="M26 32L18 22L26 12" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="gallery-modal-image-wrapper">
      <img id="galleryModalImg" src="" alt="Gallery Slide" class="gallery-modal-img" />
      <div id="galleryModalCaption" class="gallery-modal-caption"></div>
    </div>
    <button class="gallery-modal-arrow right" onclick="slideGallery(1)" aria-label="Berikutnya">
      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="22" cy="22" r="22" fill="#222" fill-opacity="0.85"/>
        <path d="M18 12L26 22L18 32" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </div>
</div>
<style>
.gallery-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.85);
  z-index: 3000;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.3s;
}
.gallery-modal-content {
  position: fixed;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  background: #181818;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  max-width: 80vw;
  max-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
  gap: 1.2rem;
  padding: 2.2rem 2.2rem 1.7rem 2.2rem;
  animation: modalFadeIn 0.3s;
}
@keyframes modalFadeIn {
  from { opacity: 0; transform: scale(0.95) translate(-50%, -50%);}
  to { opacity: 1; transform: scale(1) translate(-50%, -50%);}
}
.gallery-modal-image-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  background: #181818;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  padding: 24px 24px 16px 24px;
  max-width: 70vw;
  max-height: 70vh;
  width: 480px;
  height: 340px;
  min-width: 320px;
  min-height: 220px;
  transition: all 0.3s ease-in-out;
}
.gallery-modal-img {
  width: 420px;
  height: 220px;
  max-width: 100%;
  background: #222;
  box-shadow: 0 4px 16px rgba(0,0,0,0.18);
  display: block;
  object-fit: cover;
  margin-bottom: 18px;
}
.gallery-modal-caption {
  color: #fff;
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 1.1rem;
  min-height: 28px;
  margin-top: 0;
  text-align: center;
  letter-spacing: 0.5px;
  text-shadow: 0 2px 8px rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
}
.gallery-modal-close {
  position: absolute;
  top: 18px;
  right: 24px;
  font-size: 2.2rem;
  background: none;
  border: none;
  cursor: pointer;
  opacity: 0.85;
  z-index: 2;
  transition: opacity 0.2s;
  padding: 0;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.gallery-modal-close:hover { opacity: 1; background: rgba(255,255,255,0.08); }
.gallery-modal-arrow {
  position: relative;
  top: 0;
  font-size: 2.5rem;
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: none;
  border: none;
  box-shadow: 0 4px 16px rgba(0,0,0,0.3);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.85;
  transition: background 0.2s, opacity 0.2s, transform 0.2s;
  z-index: 2;
}
.gallery-modal-arrow.left { margin-right: 0.5rem; }
.gallery-modal-arrow.right { margin-left: 0.5rem; }
.gallery-modal-arrow:hover {
  background: #fff;
  opacity: 1;
  transform: scale(1.08);
}
@media (max-width: 600px) {
  .gallery-modal-content {
    max-width: 98vw;
    max-height: 98vh;
    padding: 1.1rem 0.2rem 1.1rem 0.2rem;
    flex-direction: column;
    gap: 0.7rem;
  }
  .gallery-modal-image-wrapper {
    width: 98vw;
    height: 48vw;
    min-width: 0;
    min-height: 0;
    max-width: 98vw;
    max-height: 60vw;
    padding: 10px 4px 8px 4px;
  }
  .gallery-modal-img {
    width: 95vw;
    height: 38vw;
    min-width: 0;
    min-height: 0;
    max-width: 98vw;
    max-height: 40vh;
  }
  .gallery-modal-close {
    top: 8px;
    right: 10px;
    font-size: 1.6rem;
    width: 36px;
    height: 36px;
  }
  .gallery-modal-arrow {
    font-size: 1.5rem;
    width: 36px;
    height: 36px;
  }
}
</style>
<script>

const bandGalleries = [
  [
    {src: 'images/photos/feast-1.jpg', caption: 'After the Show Feast'},
    {src: 'images/photos/feast-2.jpg', caption: 'Live Performance Feast'},
    {src: 'images/photos/feast-3.jpg', caption: 'Live Performance Feast'},
    {src: 'images/photos/feast-4.jpg', caption: 'After the Show Feast'}
  ],
  [
    {src: 'images/photos/forrevenge-1.jpg', caption: 'After the Show For Revenge'},
    {src: 'images/photos/forrevenge-2.jpg', caption: 'Live Performance For Revenge'},
    {src: 'images/photos/forrevenge-3.jpg', caption: 'Live Performance For Revenge'},
    {src: 'images/photos/forrevenge-4.jpg', caption: 'Live Performance For Revenge'}
  ],
  [
    {src: 'images/photos/hindia-1.jpg', caption: 'Live Performance Hindia'},
    {src: 'images/photos/hindia-2.jpg', caption: 'Live Performance Hindia'},
    {src: 'images/photos/hindia-3.jpg', caption: 'Live Performance Hindia'},
    {src: 'images/photos/hindia-4.jpg', caption: 'Live Performance Hindia'}
  ],
  [
    {src: 'images/photos/lombasihir-1.jpg', caption: 'After the Show Lomba Sihir'},
    {src: 'images/photos/lombasihir-2.jpg', caption: 'Live Performance Lomba Sihir'},
    {src: 'images/photos/lombasihir-3.jpg', caption: 'Live Performance Lomba Sihir'},
    {src: 'images/photos/lombasihir-4.jpg', caption: 'Live Performance Lomba Sihir'}
  ],
  [
    {src: 'images/photos/nadin-1.jpg', caption: 'Live Performance Nadin Amizah'},
    {src: 'images/photos/nadin-2.jpg', caption: 'Live Performance Nadin Amizah'},
    {src: 'images/photos/nadin-3.jpg', caption: 'Live Performance Nadin Amizah'},
    {src: 'images/photos/nadin-4.jpg', caption: 'Live Performance Nadin Amizah'}
  ],
  [
    {src: 'images/photos/realityclub-1.jpg', caption: 'Live Performance Reality Club'},
    {src: 'images/photos/realityclub-2.jpg', caption: 'Live Performance Reality Club'},
    {src: 'images/photos/realityclub-3.jpg', caption: 'Live Performance Reality Club'},
    {src: 'images/photos/realityclub-4.jpg', caption: 'Live Performance Reality Club'}
  ]
];
let galleryBandIdx = 0;
let galleryCurrent = 0;
function openGalleryModal(idx) {
  galleryBandIdx = idx;
  galleryCurrent = 0;
  renderGalleryModal();
  document.getElementById('galleryModalOverlay').style.display = 'flex';
  setTimeout(() => {
    document.getElementById('galleryModalOverlay').style.opacity = '1';
  }, 10);
  document.body.style.overflow = 'hidden';
}
function closeGalleryModal() {
  document.getElementById('galleryModalOverlay').style.opacity = '0';
  setTimeout(() => {
    document.getElementById('galleryModalOverlay').style.display = 'none';
    document.body.style.overflow = '';
  }, 300);
}
function slideGallery(dir) {
  const slides = bandGalleries[galleryBandIdx];
  galleryCurrent = (galleryCurrent + dir + slides.length) % slides.length;
  renderGalleryModal();
}
function renderGalleryModal() {
  const slides = bandGalleries[galleryBandIdx];
  const img = slides[galleryCurrent];
  const imgEl = document.getElementById('galleryModalImg');
  imgEl.style.opacity = 0;
  setTimeout(() => {
    imgEl.src = img.src;
    imgEl.alt = img.caption;
    document.getElementById('galleryModalCaption').textContent = img.caption;
    imgEl.style.opacity = 1;
  }, 150);
}
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('galleryModalOverlay').addEventListener('click', function(e) {
    if (e.target === this) closeGalleryModal();
  });
});
window.addEventListener('keydown', function(e) {
  if (document.getElementById('galleryModalOverlay').style.display === 'flex') {
    if (e.key === 'Escape') closeGalleryModal();
    if (e.key === 'ArrowLeft') slideGallery(-1);
    if (e.key === 'ArrowRight') slideGallery(1);
  }
});
</script>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="site-info">Designed by ASM</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
    <style>
   
.navbar-modern {
    background: #111 !important;
    box-shadow: 0 2px 16px rgba(0,0,0,0.08);
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    border: none;
    transition: background 0.2s;
}
.navbar-modern .nav > li > a {
    color: #fff !important;
    font-weight: 500;
    font-size: 0.93rem;
    letter-spacing: 0.2px;
    padding: 0.7rem 1.1rem 0.7rem 1.1rem;
    transition: color 0.18s;
    background: none !important;
    line-height: 1.5;
}
.navbar-modern .nav > li > a:hover,
.navbar-modern .nav > li > a:focus {
    color: #29b6f6 !important;
    background: none !important;
    text-shadow: 0 2px 8px rgba(41,182,246,0.13);
}
.navbar-modern .nav > li > a.active {
    border-bottom: 3px solid #29b6f6;
    color: #29b6f6 !important;
    background: none !important;
}
.navbar-modern .navbar-header .logo {
    color: #fff !important;
    font-weight: 700;
    font-size: 0.98rem;
    letter-spacing: 0.5px;
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    display: flex;
    align-items: center;
    gap: 0.1rem;
    padding-top: 0.18rem;
    padding-bottom: 0.18rem;
}
.navbar-modern .navbar-header .logo img {
    height: 32px;
    margin-right: 0.4rem;
}
@media (max-width: 991px) {
    .navbar-modern .nav > li > a {
        font-size: 0.89rem;
        padding: 0.6rem 0.7rem;
    }
    .navbar-modern .navbar-header .logo {
        font-size: 0.93rem;
        padding-top: 0.12rem;
        padding-bottom: 0.12rem;
    }
}
@media (max-width: 767px) {
    .navbar-modern .nav > li > a {
        font-size: 0.87rem;
        padding: 0.5rem 0.5rem;
    }
    .navbar-modern .navbar-header .logo {
        font-size: 0.89rem;
        padding-top: 0.08rem;
        padding-bottom: 0.08rem;
    }
}

#hero {
    width: 100vw;
    height: 100vh;
    min-height: 100vh;
    position: relative;
    overflow: hidden;
    padding: 0;
    margin: 0;
    background: none !important;
}
.hero-bg-video {
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100vw !important;
    max-width: 100vw !important;
    height: 100vh !important;
    min-width: 100vw;
    min-height: 100vh;
    object-fit: cover;
    z-index: -1;
    margin: 0;
    padding: 0;
    pointer-events: none;
    background: none !important;
}
.hero-center-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    text-align: center;
    width: 100vw;
    max-width: 100vw;
    padding: 0 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.site-header, .site-header .container, .site-header .row, .hero-modern {
    background: none !important;
    box-shadow: none !important;
}

.hero-title-main {
    color: #fff;
    font-size: 3.2rem;
    font-weight: 900;
    letter-spacing: 1.5px;
    text-shadow: 0 4px 32px rgba(0,0,0,0.38), 0 2px 8px rgba(41,182,246,0.13);
    font-family: 'Montserrat', 'Poppins', 'Oswald', Arial, Helvetica, sans-serif;
    margin-bottom: 1.2rem;
    line-height: 1.13;
    opacity: 0;
    animation: fadeInTitle 1.1s cubic-bezier(.4,2,.6,1) 0s forwards;
}
@media (max-width: 767px) {
    .hero-title-main {
        font-size: 2.1rem;
    }
}
.hero-subtitle-main {
    color: #eeeeee;
    font-size: 1.5rem;
    font-weight: 400;
    letter-spacing: 0.7px;
    text-shadow: 0 2px 16px rgba(0,0,0,0.4), 0 1px 4px rgba(41,182,246,0.13);
    font-family: 'Lato', 'Open Sans', 'Poppins', Arial, Helvetica, sans-serif;
    margin-bottom: 0;
    line-height: 1.4;
    background: rgba(0,0,0,0.18);
    border-radius: 1.2rem;
    padding: 0.7rem 1.6rem;
    display: inline-block;
    opacity: 0;
    transform: translateY(32px);
    animation: fadeInUpSubtitle 1.1s cubic-bezier(.4,2,.6,1) 1.1s forwards;
}
@media (max-width: 767px) {
    .hero-subtitle-main {
        font-size: 1.05rem;
        padding: 0.5rem 0.8rem;
    }
}
@media (min-width: 768px) {
    .hero-subtitle-main {
        font-size: 1.38rem;
    }
}
@media (min-width: 1200px) {
    .hero-subtitle-main {
        font-size: 1.5rem;
    }
}
@media (max-width: 600px) {
    .hero-subtitle-main {
        font-size: 1rem;
        padding: 0.45rem 0.7rem;
    }
}
@keyframes fadeInTitle {
    from { opacity: 0; transform: translateY(32px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInUpSubtitle {
    from { opacity: 0; transform: translateY(32px); }
    to { opacity: 1; transform: translateY(0); }
}
    </style>
    <script>
    $(document).ready(function() {
      var sections = ['about', 'gueststar', 'team', 'photos', 'faq'];
      var navLinks = $('.nav-link');
      $(window).on('scroll', function() {
        var scrollPos = $(document).scrollTop();
        var found = false;
        if (scrollPos < 2) {
          navLinks.removeClass('active');
          return;
        }
        sections.forEach(function(section) {
          var sectionOffset = $('#' + section).offset().top - 80;
          var sectionHeight = $('#' + section).outerHeight();
          if (scrollPos >= sectionOffset && scrollPos < sectionOffset + sectionHeight) {
            navLinks.removeClass('active');
            $("a[href='#" + section + "']").addClass('active');
            found = true;
          }
        });
        if (!found) {
          navLinks.removeClass('active');
        }
      });
      navLinks.on('click', function() {
        navLinks.removeClass('active');
        $(this).addClass('active');
      });
    });
    </script>

    @push('styles')
    <style>
    .gueststar-bandname {
        display: inline-block;
        font-size: 1.25rem;
        font-weight: 700;
        color: #007bff;
        background: #f4faff;
        border-radius: 1.5rem;
        padding: 0.45rem 1.5rem;
        letter-spacing: 1px;
        box-shadow: 0 1px 6px rgba(41,182,246,0.08);
        margin-top: -2.2rem;
        margin-bottom: 0.2rem;
    }
    .btn-modern-readmore2 {
        background: linear-gradient(90deg,#29b6f6 0,#007bff 100%);
        border: none;
        color: #fff !important;
        font-weight: 700;
        font-size: 1.18rem;
        border-radius: 2rem;
        padding: 0.55rem 2rem;
        box-shadow: 0 2px 12px rgba(41,182,246,0.13);
        transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
        display: inline-block;
        text-decoration: none;
        letter-spacing: 0.5px;
    }
    .btn-modern-readmore2:hover, .btn-modern-readmore2:focus {
        background: linear-gradient(90deg,#007bff 0,#29b6f6 100%);
        color: #fff !important;
        transform: translateY(-2px) scale(1.04);
        box-shadow: 0 6px 24px rgba(41,182,246,0.18);
    }
    .gueststar-card-modern {
        border-radius: 1.2rem;
        box-shadow: 0 4px 24px rgba(41, 182, 246, 0.10), 0 1.5px 6px rgba(0,0,0,0.04);
        background: #fff;
        transition: transform 0.18s cubic-bezier(.4,2,.6,1), box-shadow 0.18s;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 0;
    }
    .gueststar-card-modern:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.08);
    }
    .gueststar-card-modern img.card-img-top {
        width: 100%;
        aspect-ratio: 4/5;
        height: auto;
        min-height: 220px;
        max-height: 340px;
        object-fit: cover;
        border-top-left-radius: 1.2rem;
        border-top-right-radius: 1.2rem;
        background: #f4f4f4;
        display: block;
    }
    .gueststar-section-container {
        background: #f6f7fa;
        border-radius: 1.5rem;
        padding: 2.5rem 2rem 2rem 2rem;
        margin-top: 2.5rem;
        margin-bottom: 2.5rem;
    }
    .section-title {
        text-align: center;
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 2.2rem;
        letter-spacing: 1px;
        color: #222;
    }
    .speakers .row > .container > .row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }
    @media (max-width: 991px) {
        .speakers .row > .container > .row {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 767px) {
        .speakers .row > .container > .row {
            grid-template-columns: 1fr;
        }
        .gueststar-section-container {
            padding: 1.2rem 0.5rem;
        }
    }
    .gueststar-card-modern .card-body {
        padding: 1.5rem 1.2rem 1.2rem 1.2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1 1 auto;
    }
    .gueststar-card-modern .btn-modern-readmore2 {
        margin-top: 1.2rem;
    }
    .gueststar-section-container, .gueststar-card-modern, .gueststar-bandname, .section-title {
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
    }
    </style>
    @endpush

    <style>
    .gueststar-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        padding: 0.5rem 0;
    }
    @media (max-width: 991px) {
        .gueststar-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 767px) {
        .gueststar-grid {
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }
    }
    .gueststar-card {
        border-radius: 1.2rem;
        box-shadow: 0 4px 24px rgba(41, 182, 246, 0.10), 0 1.5px 6px rgba(0,0,0,0.04);
        background: #fff;
        transition: transform 0.18s cubic-bezier(.4,2,.6,1), box-shadow 0.18s;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 0;
        padding: 0;
    }
    .gueststar-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 10px 32px rgba(41,182,246,0.18), 0 2px 8px rgba(0,0,0,0.08);
    }
    .gueststar-card img.card-img-top {
        width: 100%;
        aspect-ratio: 4/5;
        height: auto;
        min-height: 220px;
        max-height: 340px;
        object-fit: cover;
        border-top-left-radius: 1.2rem;
        border-top-right-radius: 1.2rem;
        background: #f4f4f4;
        display: block;
    }
    .gueststar-card .card-body {
        padding: 1.5rem 1.2rem 1.2rem 1.2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1 1 auto;
    }
    .gueststar-card .btn-modern-readmore2 {
        width: 140px !important;
        min-width: 110px !important;
        max-width: 160px !important;
        font-size: 0.98rem !important;
        font-weight: 600 !important;
        padding: 0.38rem 0 !important;
        border-radius: 2rem !important;
        height: 38px !important;
        display: block !important;
        margin-left: auto !important;
        margin-right: auto !important;
        background: linear-gradient(90deg,#29b6f6 0,#007bff 100%);
        color: #fff !important;
        box-shadow: 0 2px 12px rgba(41,182,246,0.13);
        letter-spacing: 0.5px;
        border: none;
        transition: background 0.18s, transform 0.15s, box-shadow 0.18s;
    }
    .gueststar-card .btn-modern-readmore2:hover, .gueststar-card .btn-modern-readmore2:focus {
        background: linear-gradient(90deg,#007bff 0,#29b6f6 100%);
        color: #fff !important;
        transform: scale(1.08);
        box-shadow: 0 6px 24px rgba(41,182,246,0.18);
    }
    .guest-detail {
        display: none;
        background: #f6f7fa;
        border-radius: 1rem;
        padding: 1rem 1.2rem;
        margin-top: 1rem;
        font-size: 0.98rem;
        color: #222;
        box-shadow: 0 1px 6px rgba(41,182,246,0.08);
        animation: fadeInGuestDetail 0.3s;
    }
    @keyframes fadeInGuestDetail {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    </style>

    <script>
    function toggleGuestDetail(btn) {
        var detail = btn.closest('.card-body').querySelector('.guest-detail');
        if (detail.style.display === 'none' || detail.style.display === '') {
            detail.style.display = 'block';
            btn.textContent = 'Hide';
        } else {
            detail.style.display = 'none';
            btn.textContent = 'Read More';
        }
    }
   
    </script>

    <style>
    .gueststar-modal-custom .modal-dialog {
        max-width: 700px;
        width: 95vw;
        margin: 1.5rem auto;
        transition: all 0.3s cubic-bezier(.4,2,.6,1);
    }
    .gueststar-modal-custom .modal-content {
        border-radius: 1.2rem;
        overflow: hidden;
        box-shadow: 0 8px 40px rgba(41,182,246,0.18);
        background: #fff;
        animation: gueststarModalFadeIn 0.35s cubic-bezier(.4,2,.6,1);
        transform: scale(0.97);
        opacity: 0;
        animation-fill-mode: forwards;
    }
    .gueststar-modal-custom.in .modal-content {
        opacity: 1;
        transform: scale(1);
    }
    @keyframes gueststarModalFadeIn {
        from { opacity: 0; transform: scale(0.92); }
        to { opacity: 1; transform: scale(1); }
    }
    .gueststar-modal-grid-vertical {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2.2rem 2.2rem 2.2rem 2.2rem;
    }
    .gueststar-modal-img-col {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    .gueststar-modal-img {
        width: 220px;
        height: 220px;
        object-fit: cover;
        border-radius: 1.1rem;
        box-shadow: 0 4px 18px rgba(41,182,246,0.13);
        background: #f4f4f4;
        aspect-ratio: 1/1;
    }
    .gueststar-modal-info-col {
        width: 100%;
        max-width: 600px;
        text-align: center;
    }
    .gueststar-modal-section {
        margin-top: 2.1rem;
    }
    .gueststar-modal-section-title {
        font-weight: 700;
        font-size: 1.18rem;
        color: #23272f;
        margin-bottom: 0.5rem;
        margin-top: 0.7rem;
        letter-spacing: 0.5px;
    }
    .gueststar-modal-section-body {
        color: #444b54;
        font-size: 1.08rem;
        font-weight: 400;
        line-height: 1.7;
    }
    .gueststar-modal-socials {
        display: flex;
        flex-direction: row;
        gap: 1.2rem;
        margin-top: 0.7rem;
        justify-content: center;
    }
    .gueststar-social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background: #f4f4f4;
        color: #888;
        font-size: 1.6rem;
        transition: background 0.18s, color 0.18s, transform 0.18s;
        box-shadow: 0 1px 6px rgba(41,182,246,0.08);
        padding: 0.2rem;
        text-decoration: none;
    }
    .gueststar-social-icon:hover {
        background: #e3f2fd;
        color: #007bff;
        transform: scale(1.13);
    }
    .gueststar-modal-close {
        position: absolute;
        top: 18px;
        right: 22px;
        z-index: 10;
        font-size: 1.3rem;
        background: transparent;
        border: none;
        padding: 0.2rem 0.7rem;
        line-height: 1;
        border-radius: 50%;
        transition: background 0.2s;
        color: #888;
    }
    .gueststar-modal-close:hover {
        background: rgba(255,0,0,0.13);
        color: #d32f2f;
    }
    @media (max-width: 767px) {
        .gueststar-modal-img {
            width: 100%;
            max-width: 220px;
            height: auto;
            margin: 0 auto 1.2rem auto;
        }
        .gueststar-modal-grid-vertical {
            padding: 1.2rem 0.7rem 1.2rem 0.7rem;
        }
    }
.gueststar-modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0,0,0,0.5);
  z-index: 1050;
  display: flex;
  align-items: center;
  justify-content: center;
}
.gueststar-modal-centered {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1060;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.18);
  max-width: 95vw;
  max-height: 95vh;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2rem 1.5rem;
}
@media (max-width: 600px) {
  .gueststar-modal-centered {
    padding: 1rem 0.3rem;
    max-width: 99vw;
    max-height: 99vh;
  }
}
    </style>
    <script>
    $(document).on('show.bs.modal', '.gueststar-modal-custom', function () {
        var modalContent = $(this).find('.gueststar-modal-efx');
        modalContent.css({opacity:0, transform:'scale(0.97)'});
        setTimeout(function(){
            modalContent.css({opacity:1, transform:'scale(1)'});
        }, 10);
    });
    </script>

    <style>
    .modal-backdrop {
        z-index: 1040 !important;
    }
    .gueststar-modal-custom {
        z-index: 1050 !important;
    }
    .gueststar-modal-custom .modal-dialog {
        margin-top: 5vh !important;
        margin-bottom: 5vh !important;
               display: flex;
        align-items: center;
        min-height: calc(100vh - 2rem);
    }
    @media (max-width: 767px) {
        .gueststar-modal-custom .modal-dialog {
            margin-top: 2vh !important;
            margin-bottom: 2vh !important;
            min-height: unset;
        }
    }
    .modal-open .modal {
        overflow-y: auto;
    }
    </style>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  var about = document.getElementById('about');
  var gueststar = document.getElementById('gueststar');
  var team = document.getElementById('team');
  var photos = document.getElementById('photos');
  if(about) about.classList.add('section-animate-parallax');
  if(gueststar) gueststar.classList.add('section-animate-split');
  if(team) team.classList.add('section-animate-rotate');
  if(photos) photos.classList.add('section-animate-grid');

  if(gueststar) {
    var cards = gueststar.querySelectorAll('.gueststar-card');
    cards.forEach(function(card, i) {
      card.classList.add('gueststar-card-split');
      if(i % 2 === 1) card.classList.add('split-right');
    });
  }

  if(team) {
    var slides = team.querySelectorAll('.carousel-partner-slide');
    slides.forEach(function(slide) {
      slide.classList.add('stagger-animate');
    });
  }

  if(photos) {
    var imgs = photos.querySelectorAll('.gallery-photo-modern');
    imgs.forEach(function(img) {
      img.classList.add('grid-zoom');
    });
  }

  if(about) {
    var texts = about.querySelectorAll('h3, p, ul, li');
    var imgs = about.querySelectorAll('img');
    texts.forEach(function(el){ el.classList.add('about-fade-text'); });
    imgs.forEach(function(el){ el.classList.add('about-fade-img'); });
  }

  setTimeout(function() {
    var observer = new window.IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if(entry.isIntersecting) {
          entry.target.classList.add('in-view');
          if(entry.target.id === 'gueststar') {
            var cards = entry.target.querySelectorAll('.gueststar-card-split');
            cards.forEach(function(card, i) {
              setTimeout(function(){ card.classList.add('in-view'); }, 120*i);
            });
          }
          if(entry.target.id === 'team') {
            var slides = entry.target.querySelectorAll('.carousel-partner-slide.stagger-animate');
            slides.forEach(function(slide, i) {
              setTimeout(function(){ slide.classList.add('in-view'); }, 120*i);
            });
          }
          if(entry.target.id === 'photos') {
            var imgs = entry.target.querySelectorAll('.gallery-photo-modern.grid-zoom');
            imgs.forEach(function(img, i) {
              setTimeout(function(){ img.classList.add('in-view'); }, 80*i);
            });
          }
          if(entry.target.id === 'about') {
            var texts = entry.target.querySelectorAll('.about-fade-text');
            var imgs = entry.target.querySelectorAll('.about-fade-img');
            texts.forEach(function(el, i){ setTimeout(function(){ el.classList.add('in-view'); }, 80*i); });
            imgs.forEach(function(el, i){ setTimeout(function(){ el.classList.add('in-view'); }, 200+120*i); });
          }
        }
      });
    }, { threshold: 0.18 });
    [about, gueststar, team, photos].forEach(function(section) {
      if(section) observer.observe(section);
    });
  }, 100);
});
</script>
</body>
</html>