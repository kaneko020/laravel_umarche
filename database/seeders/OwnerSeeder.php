<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test1@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/12/14 09:11:25',
            ],
            [
                'name' => 'test',
                'email' => 'test2@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/12/14 10:07:32',
            ],
            [
                'name' => 'test',
                'email' => 'test3@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/12/14 10:48:11',
            ],
        ]);
    }
}
