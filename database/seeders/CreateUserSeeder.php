<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
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
                'email' => 'admin@mail.com',
                'is_admin' => 1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'is_admin' => 0,
                'password' => bcrypt('password'),
                'alamat' => "Yogyakarta, Kampus 1 UTY",
                'telepon' => "0811223344",
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}