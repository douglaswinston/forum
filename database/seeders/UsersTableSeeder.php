<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User, App\Models\Thread;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)
            ->has(Thread::factory()->count(3))
            ->create();
    }
}