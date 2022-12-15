<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        // User::factory()->create([
        //     'name' => 'sharada',
        //     'email' => 'sharada@example.com',
        //     'password'=>Hash::make('passsword'),
        // ]);

        $this->call(ClassSeeder::class);
    }
}
