<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'JAJA',
                'address' => 'Jl. Sudirman No. 123, Jakarta',
            ],
            [
                'name' => 'Baba',
                'address' => 'Jl. Thamrin No. 456, Jakarta',
            ],
            [
                'name' => 'Kuku',
                'address' => 'Jl. Malioboro No. 789, Yogyakarta',
            ],
            [
                'name' => 'Siti Khadijah',
                'address' => 'Jl. Braga No. 321, Bandung',
            ],
            [
                'name' => 'Bambang',
                'address' => 'Jl. Diponegoro No. 654, Jakarta',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
