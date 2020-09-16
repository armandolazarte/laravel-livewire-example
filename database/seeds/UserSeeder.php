<?php

use App\Models\User;
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
        factory(User::class)->create(
            [
                'name'     => 'Armando Lazarte',
                'email'    => 'armando@gmail.com',
                'password' => bcrypt('armando')
            ]
        );

        factory(User::class)->times(100)->create();
    }
}
