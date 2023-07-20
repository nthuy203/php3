<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
           'name' => "Huy",
            'image' => "123",
            'birth' => "2003/12/01",
            'gender' => "Nam",
            'address' => "Nam Định",
            'email' => "h@gmail.com",
            'phone' => "034343443",
            'username' => "huynt",
            'password' => "huy1234343",
            'number_of_booking' => "0"

        ]);
        //
    }
}
