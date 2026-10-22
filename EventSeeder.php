<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Event 1
        Event::create([
            'name' => 'Halloween Party Night',
            'organizer' => 'Halloween Here Cafe',
            'location' => 'Here Cafe',
            'date' => '2026-10-31',
            'time' => '20.00 WIB',
            'ticket_price' => 50000.00,
            'description' => 'Malam penuh misteri, keseruan, dan kebersamaan komunitas dengan berbagai lomba kostum dan hiburan menarik!',
            'banner' => '/images/hallo ween here cafe.jpeg'
        ]);

        // Event 2
        Event::create([
            'name' => 'Spooky Costume Competition',
            'organizer' => 'Cosplay Indo Club',
            'location' => 'Grand Hall Mall',
            'date' => '2026-10-31',
            'time' => '19.30 WIB',
            'ticket_price' => 75000.00,
            'description' => 'Ajang unjuk kreativitas kostum horor paling menyeramkan dan unik dengan total hadiah jutaan rupiah.',
            'banner' => '/images/Spooky Costume Competition.jpg'
        ]);

        // Event 3
        Event::create([
            'name' => 'Trick or Treat Hunt',
            'organizer' => 'Youth Community',
            'location' => 'Area Playground Taman',
            'date' => '2026-10-31',
            'time' => '16.00 WIB',
            'ticket_price' => 25000.00,
            'description' => 'Berburu permen seru bersama anak-anak dan anggota komunitas dalam balutan dekorasi labu misterius.',
            'banner' => 'images/Halloween-Scavenger-Hunt1.jpg'
        ]);
        
        // Event 4
        Event::create([
            'name' => 'Ghostly Music & Live Concert',
            'organizer' => 'Indie Musik Fest',
            'location' => 'Open Air Stage',
            'date' => '2026-10-31',
            'time' => '21.00 WIB',
            'ticket_price' => 100000.00,
            'description' => 'Konser musik meriah bertema malam horor dengan penampilan band indie lokal terbaik.',
            'banner' => 'images/Ghostly-Music-_-Live-Concert.jpg'
        ]);

        // Event 5
        Event::create([
            'name' => 'Mystery Dinner Experience',
            'organizer' => 'Culinary Night Crew',
            'location' => 'Dark Dining Room',
            'date' => '2026-10-31',
            'time' => '18.30 WIB',
            'ticket_price' => 120000.00,
            'description' => 'Nikmati santap malam eksklusif dengan menu penuh kejutan dalam nuansa temaram yang menegangkan.',
            'banner' => 'images/Mystery Dinner Experience.jpg'
        ]);

        // Event 6 (Tambahan Event ke-6)
        Event::create([
            'name' => 'Halloween Movie Marathon',
            'organizer' => 'Cinema Indie Community',
            'location' => 'Mini Theater Room',
            'date' => '2026-10-31',
            'time' => '22.30 WIB',
            'ticket_price' => 40000.00,
            'description' => 'Nobar film-film horor klasik pilihan semalaman suntuk bersama para pecinta film thriller.',
            'banner' => 'images/Halloween-Movie-Marathon.jpg'
        ]);
    }
}