<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([ 
            'name'              => 'Administrador', 
            'email'             => 'adm@email.com', 
            'email_verified_at' => Carbon::now(), 
            'password'          => bcrypt('secret'), 
        ]);
    }
}
