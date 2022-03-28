<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $usuario = User::create([
                'name' =>'ivan',
                'email' =>'ivan@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('ivan')
       ]);
       $usuario->assignRole('admin');
       User::factory(9)->create();
    }
}
