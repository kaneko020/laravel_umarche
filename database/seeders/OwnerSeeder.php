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
                'name' => 'テスト1',
                'email' => 'test1@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/10/14 09:11:25',
            ],
            [
                'name' => 'テスト2',
                'email' => 'test2@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/11/08 17:07:32',
            ],
            [
                'name' => 'テスト3',
                'email' => 'test3@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/11/19 10:48:11',
            ],
            [
                'name' => 'テスト4',
                'email' => 'test4@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/11/27 21:12:14',
            ],
            [
                'name' => 'テスト5',
                'email' => 'test5@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/12/02 14:13:56',
            ],
            [
                'name' => 'テスト6',
                'email' => 'test6@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/12/14 15:36:31',
            ],
        ]);
    }
}
