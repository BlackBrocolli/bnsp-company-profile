<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
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
        Product::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'category_id' => 1,
                'name' => 'Harley Davidson',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 273000000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-1.jpg'
            ],
            [
                'category_id' => 1,
                'name' => 'Yamaha R6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 270000000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-2.jpg'
            ],
            [
                'category_id' => 3,
                'name' => 'Hagon Shocks for CB200',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 6465000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-3.jpg'
            ],
            [
                'category_id' => 3,
                'name' => 'Michelin Tire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 400000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-4.jpg'
            ],
            [
                'category_id' => 5,
                'name' => 'Motorcycle Magazines',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 38000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-5.jpg'
            ],
            [
                'category_id' => 2,
                'name' => 'Leather Glove',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 149000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-6.jpg'
            ],
            [
                'category_id' => 2,
                'name' => 'Acqua Panna',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 10000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-7.jpg'
            ],
            [
                'category_id' => 3,
                'name' => 'Meja Kursi Belajar',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 15000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-8.jpg'
            ],
            [
                'category_id' => 2,
                'name' => 'Chamomile White Choco',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 45000,
                'status' => 'accepted',
                'created_by' => 2,
                'verified_by' => 3,
                'verified_at' => Carbon::now(),
                'image' => 'product-9.jpg'
            ],
        ];

        foreach ($data as $value) {
            Product::insert([
                'category_id' => $value['category_id'],
                'name' => $value['name'],
                'description' => $value['description'],
                'price' => $value['price'],
                'status' => $value['status'],
                'created_by' => $value['created_by'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'verified_by' => $value['verified_by'],
                'verified_at' => $value['verified_at'],
                'image' => $value['image'],
            ]);
        }
    }
}
