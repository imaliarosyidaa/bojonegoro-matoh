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
            'title' => 'Festival Budaya Bojonegoro',
            'description' => 'Nikmati sajian kesenian lokal, kuliner tradisional, dan pameran kerajinan tangan khas Bojonegoro.',
            'date' => '2025-09-10 10:00:00',
            'location' => 'Alun-alun Bojonegoro',
            'price' => 20000,
            'image' => 'images/events/festival-budaya.jpg',
        ]);

        Event::create([
            'title' => 'Pameran Batik Jonegoroan',
            'description' => 'Pameran karya batik khas Bojonegoro dengan berbagai motif dan workshop membatik untuk pengunjung.',
            'date' => '2025-09-20 09:00:00',
            'location' => 'Gedung Seni Budaya Bojonegoro',
            'price' => 15000,
            'image' => 'images/events/pameran-batik.jpg',
        ]);
    }
}
