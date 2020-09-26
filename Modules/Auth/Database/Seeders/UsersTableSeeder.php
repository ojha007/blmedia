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
        $edition = config('database.default');
        User::updateOrCreate(
            [
                'email' => 'blmedia@gmail.com',
                'user_name' => 'blmedia_' . $edition
            ],
            ['user_name' => 'blmedia',
                'password' => Hash::make('blmedia@321'),
                'status' => true
            ]);
        User::create(
            ['user_name' => 'blmedia',
                'password' => Hash::make('blmedia@321'),
                'status' => true
            ]);
    }
}
