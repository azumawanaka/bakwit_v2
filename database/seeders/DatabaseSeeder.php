<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //clear table

        // MDRRMO - super admin
         User::factory()->create([
             'name' => 'MDRRMO',
             'email' => 'mdrrmo@bakwit.com',
             'password' => Hash::make('password'),
             'type' => 1,
         ]);

         // BDRRMO - admin
        User::factory()->create([
            'name' => 'BDRRMO',
            'email' => 'brrrmo@bakwit.com',
            'password' => Hash::make('password'),
        ]);
    }
}
