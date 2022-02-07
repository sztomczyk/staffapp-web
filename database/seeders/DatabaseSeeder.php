<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2a$13$IqB36p0fS9zK9CZgoOJ2Y.K2ZAhPvTEO4ZORp2TVydbiBtzSaBYUO'
        ]);
    }
}
