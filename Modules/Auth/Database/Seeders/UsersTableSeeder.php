<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        User::updateOrCreate(
            ['email' => 'blmedia@gmail.com', 'user_name' => 'blmedia'],
            ['user_name' => 'blmedia',
                'password' => Hash::make('blmedia@321'),
                'status' => true
            ]);
    }
}
