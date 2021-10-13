<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => '201047296',
            'name' => 'Sergio Renato Aldana Alvarez',
            'email' => 'sergio.aldana@galileo.edu',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

        ]);

        User::where('username','201047296')->first()->assignRole('super-admin');;

        $user = DB::table('users')->get();

        User::factory(99)->create()->each(function ($user) {
            $user->assignRole('estudiante');
        });
    }
}
