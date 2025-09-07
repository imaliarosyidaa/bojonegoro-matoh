<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Pesta Rakyat Koempoel Teknik Asik bareng VICI, LAKONI & WD-40',
            'description' => 'Mari rapatkan barisan kalian di Stadion Bojonegoro, Ramaikan Pesta Rakyat Koempoel Teknik Asik bareng VICI, LAKONI & WD-40. 
                📆 Sabtu, 30 Agustus 2025 dan Minggu, 31 Agustus 2025
                ⏰ Sabtu, 30 Agustus 2025 pukul 16.00 - 21.30
                ⏰ Minggu, 31 Agustus 2025 pukul 07.00 - 21.00
                Dapatkan demo-demo alat Teknik, potongan harga, dan nikmati penampilan Guest Star spesial!
                Spesial performance dari Ngatmombilung, Leona Zhen, Delva Irawan & Dike Sabrina.
                GRATIS masuk untuk semua pengunjung!',
            'date' => '2025-08-30 16:00:00',
            'location' => 'Stadion Bojonegoro',
            'price' => 0,
            'image' => 'images/events/kumpul-teknik.jpg',
        ]);

         Event::create([
            'title' => 'Pagelaran Wayang Krucil',
            'description' => 'Pagelaran wayang krucil dalam rangka Hari Wayang Nasional, dimeriahkan oleh UMKM se-Bojonegoro.',
            'date' => '2025-11-07 19:00:00',
            'location' => 'Alun-alun Kabupaten Bojonegoro',
            'price' => 20000,
            'image' => 'images/events/wayang-krucil.png',
        ]);

        Event::create([
            'title' => 'Latihan Tari Thengul',
            'description' => 'Latihan tari Thengul di Aula SMA 14 Bojonegoro dengan berbagai pelatih tari berpengalaman.',
            'date' => '2030-03-29 08:00:00',
            'location' => 'Aula SMA 14 Bojonegoro',
            'price' => 50000,
            'image' => 'images/events/latihan-tari-thengul.png',
        ]);

        Event::create([
            'title' => 'Pentas Seni Kemerdekaan',
            'description' => 'Pentas seni kemerdekaan bertema "Indonesia dalam Warna dan Suara", menampilkan tari tayub khas Bojonegoro.',
            'date' => '2025-10-17 08:00:00',
            'location' => 'Alun-alun Kabupaten Bojonegoro',
            'price' => 70000,
            'image' => 'images/events/pentas-tari-tayub.png',
        ]);

        Event::create([
            'title' => 'Pagelaran Wayang Thengul',
            'description' => 'Pagelaran Wayang Thengul dalam rangka Hari Jadi Kabupaten Bojonegoro ke-348 bersama Dalang Ki Ketut Susilo dan sinden Bojonegoro.',
            'date' => '2025-10-10 19:00:00',
            'location' => 'Alun-alun Kota Bojonegoro',
            'price' => 100000,
            'image' => 'images/events/wayang-thengul.png',
        ]);
    }
}
