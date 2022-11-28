<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@itsolutionstuff.com',
                'is_admin' => '1',
                'is_aktif' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@itsolutionstuff.com',
                'is_admin' => '0',
                'is_aktif' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Inactive',
                'email' => 'inactive@itsolutionstuff.com',
                'is_admin' => '0',
                'is_aktif' => '0',
                'password' => bcrypt('123456'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}