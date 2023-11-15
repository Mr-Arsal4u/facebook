<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> "admin",
            'email'=>"admin@admin.com",
            'password'=>Hash::make('secret'),
            
        ]);
    }
}
