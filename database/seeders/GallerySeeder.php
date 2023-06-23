<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GallerySeeder extends Seeder
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
        Gallery::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'title' => 'Motorcycle Club Members Gathering',
                'image' => 'gallery-1.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Member Performing a Wheelie',
                'image' => 'gallery-2.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Exciting Touring Adventure with the Club',
                'image' => 'gallery-3.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Members Performing Wheelies on the Road During Touring',
                'image' => 'gallery-4.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Member with His Motorcycle',
                'image' => 'gallery-5.jpg',
                'is_active' => 1,
            ],
            [
                'title' => "Club Member's Motorcycle",
                'image' => 'gallery-6.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Member Performing Motorbike Maintenance',
                'image' => 'gallery-7.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Member Performing Motorbike Maintenance',
                'image' => 'gallery-8.jpg',
                'is_active' => 1,
            ],
            [
                'title' => 'Club Member Performing Stunts',
                'image' => 'gallery-9.jpg',
                'is_active' => 1,
            ],
        ];

        foreach ($data as $value) {
            Gallery::insert([
                'title' => $value['title'],
                'image' => $value['image'],
                'is_active' => $value['is_active'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
