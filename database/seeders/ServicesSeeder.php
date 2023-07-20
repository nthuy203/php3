<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
           'name' => "Coca",
           'image' => "https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg",
           'price' => "123"
        ]);
        //
    }
}
