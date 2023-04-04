<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()
        ->count(25)
        ->hasTransaction(10)
        ->create();

        User::factory()
        ->count(15)
        ->hasTransaction(10)
        ->create();

        User::factory()
        ->count(20)
        ->hasTransaction(10)
        ->create();
    }
}
