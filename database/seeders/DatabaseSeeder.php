<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        $data = array(
            [
                'username' => 'Admin',
                'email' => 'admin@cargo.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                'level' => 1,
            ],
            [
                'username' => 'User',
                'email' => 'user@cargo.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                'level' => 2,
            ],
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'email_verified_at' => $d['email_verified_at'],
                'password' => $d['password'],
                'level' => $d['level']
            ]);
        }
    }
}
