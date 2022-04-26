<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->userCreate();
        User::factory(10)->create();
    }
    protected function  userCreate(){
        User::create([
            'name'             =>'Asadur Zaman',
            'email'            =>'zaman@gmail.com',
            'password'         => bcrypt(123),
            'email_verified_at' => now(),
        ]);
    }
}
