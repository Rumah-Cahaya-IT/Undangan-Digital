<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
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
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('12341234'),
                'level' => 1,
                'email' => 'admin@undangyah.com'
            ],
            [
                'name' => 'Member',
                'username' => 'member',
                'password' => bcrypt('12341234'),
                'level' => 2,
                'email' => 'member@undangyah.com'
            ],
            [
                'name' => 'vendor',
                'username' => 'vendor',
                'password' => bcrypt('12341234'),
                'level' => 3,
                'email' => 'vendor@undangyah.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
