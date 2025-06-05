<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GuestStar;

class GuestStarSeeder extends Seeder
{
    public function run()
    {
        GuestStar::create([
            'nama_band_artis' => 'Feast',
            'deskripsi' => 'Feast adalah band rock asal Jakarta yang dibentuk pada tahun 2012 oleh sekelompok mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia. Band ini dikenal karena lirik-liriknya yang tajam dan kerap mengangkat isu sosial serta politik.',
            'anggota_band' => "Daniel Baskara Putra – vokal dan synthesizer\nAdnan Satyanugraha Putra – gitar\nDicky Renanda Putra – gitar\nFadli Fikriawan Wibowo – bass",
            'instagram' => '@ffeastt',
            'twitter' => '@ffeastt',
            'youtube' => '.Feast',
            'foto' => 'images/GuestStar/feast.jpg'
        ]);
        GuestStar::create([
            'nama_band_artis' => 'For Revenge',
            'deskripsi' => 'for Revenge adalah band emo/rock alternatif asal Bandung, Indonesia, yang dibentuk pada tahun 2006. Mereka dikenal dengan lirik-lirik yang emosional dan musik yang menggugah perasaan.',
            'anggota_band' => "Boniex Noer – vokal\nArief Ismail – gitar\nIzha Muhammad – bass\nArchims Pribadi – drum",
            'instagram' => '@forrevengeofficial',
            'twitter' => '@forrevengeID',
            'youtube' => 'for Revenge Official',
            'foto' => 'images/GuestStar/for_revenge.jpg'
        ]);
        GuestStar::create([
            'nama_band_artis' => 'Hindia',
            'deskripsi' => 'Hindia adalah nama panggung dari Baskara Putra, musisi, penulis lagu, dan produser asal Jakarta, Indonesia. Ia dikenal sebagai vokalis utama band .Feast, serta aktif dalam proyek solo dan band Lomba Sihir. Musik Hindia mengangkat tema kehidupan sehari-hari, kritik sosial, dan perenungan pribadi, dengan gaya indie rock, pop alternatif, dan spoken word.',
            'anggota_band' => "Kusumawidhiana – drum & direktur musik\nAdrian Mahendra – bass\nIvan Janitra – gitar\nChika Olivia – keyboard & vokal latar\nMadukina – vokal latar",
            'instagram' => '@wordfangs',
            'twitter' => '@wordfangs',
            'youtube' => 'Hindia',
            'foto' => 'images/GuestStar/hindia.jpg'
        ]);
        GuestStar::create([
            'nama_band_artis' => 'Lomba Sihir',
            'deskripsi' => 'Lomba Sihir adalah grup musik pop alternatif asal Jakarta, Indonesia, yang dibentuk pada tahun 2019. Awalnya, mereka merupakan band pengiring untuk proyek solo Hindia (nama panggung dari Baskara Putra). Seiring waktu, mereka berkembang menjadi sebuah band mandiri dan merilis album debut mereka, Selamat Datang di Ujung Dunia, pada Maret 2021.',
            'anggota_band' => "Baskara Putra – vokal dan synthesizer\nNatasha Udu – vokal\nRayhan Noor – gitar dan vokal\nTristan Juliano – kibor dan vokal\nEnrico Octaviano – drum",
            'instagram' => '@lombasihiryes',
            'twitter' => '@lombasihiryes',
            'youtube' => 'Lomba Sihir',
            'foto' => 'images/GuestStar/lomba_sihir.jpg'
        ]);
        GuestStar::create([
            'nama_band_artis' => 'Nadin Amizah',
            'deskripsi' => 'Nadin Amizah adalah penyanyi dan penulis lagu asal Indonesia yang lahir pada 28 Mei 2000 di Bandung, Jawa Barat. Ia mulai dikenal publik setelah berkolaborasi dengan Dipha Barus dalam lagu "All Good" pada tahun 2017. Setahun kemudian, Nadin merilis single debut solonya berjudul "Rumpang", yang membawanya meraih penghargaan Pendatang Baru Terbaik dan Karya Produksi Folk/Country/Balada Terbaik di Anugerah Musik Indonesia 2019.',
            'anggota_band' => 'Nadin Amizah',
            'instagram' => '@cakecaine',
            'twitter' => '@rahasiabulan',
            'youtube' => 'Nadin Amizah Official',
            'foto' => 'images/GuestStar/nadin_amizah.jpg'
        ]);
        GuestStar::create([
            'nama_band_artis' => 'Reality Club',
            'deskripsi' => 'Reality Club adalah band indie rock asal Jakarta, Indonesia, yang dibentuk pada 16 April 2016. Band ini dikenal dengan musik yang menggabungkan elemen indie rock dan pop, serta lirik-lirik yang mendalam dan emosional.',
            'anggota_band' => "Fathia Izzati – vokal dan keyboard\nFaiz Novascotia Saripudin – vokal dan gitar\nNugi Wicaksono – bass\nEra Patigo – drum",
            'instagram' => '@realityclub',
            'twitter' => '@reality_club',
            'youtube' => 'Reality Club',
            'foto' => 'images/GuestStar/reality_club.jpg'
        ]);
    }
}
