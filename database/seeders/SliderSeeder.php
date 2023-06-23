<?php

namespace Database\Seeders;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate / empty the table
        Schema::disableForeignKeyConstraints();
        Slider::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'title' => 'Join Thunder Riders: Ride with Power and Passion',
                'description' => "Experience the thrill of the open road with Thunder Riders Motorcycle Club. Join our community of passionate riders, discover epic adventures, and forge lifelong friendships. Get ready to unleash the power of your bike and embark on unforgettable journeys.",
                'image' => 'slide-4.jpg',
                'is_active' => 1,
            ],
            [
                'title' => "Discover the Spirit of Brotherhood: Thunder Riders Motorcycle Club",
                'description' => "At Thunder Riders, we celebrate the spirit of brotherhood and camaraderie. Join our esteemed motorcycle club and be a part of a tight-knit community that shares a common passion for motorcycles. Experience the bond that extends beyond the road as we support and uplift each other.",
                'image' => 'slide-5.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Elevate Your Riding Experience: Thunder Riders Motorcycle Club',
                'description' => 'Take your riding experience to new heights with Thunder Riders Motorcycle Club. Our club is dedicated to enhancing your journey on two wheels, offering exciting events, skill-building workshops, and unforgettable group rides. Unleash your potential and embrace the freedom of the open road.',
                'image' => 'slide-6.jpg',
                'is_active' => 1,
            ],
        ];

        foreach ($data as $value) {
            Slider::insert([
                'title' => $value['title'],
                'description' => $value['description'],
                'image' => $value['image'],
                'is_active' => $value['is_active'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
