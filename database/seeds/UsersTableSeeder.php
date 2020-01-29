<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'          => 'Muh Kusnadi',
                'email'         => 'muh.kusnadi99@gmail.com',
                'password'      => bcrypt('123456'),
                'created_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Ihsan',
                'email'         => 'ihsan@gmail.com',
                'password'      => bcrypt('123456'),
                'created_at'    => Carbon::now(),
            ]
        ];

        User::insert($users);

    }
}
