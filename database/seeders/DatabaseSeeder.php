<?php

namespace Database\Seeders;

use App\Entities\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::created([
            'cpf'                   => '11122233344',
            'name'                  => 'João',
            'phone'                 => '3512341234',
            'birth'                 => '1980-1001-01',
            'gender'                => 'M',
            'email'                 => 'joaosistema.com',
            'password'              => bcrypt('123456'),
        ]);
    }
}
