<?php

use Illuminate\Database\Seeder;
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
       $user = new User;
       $user->name = 'Mark';
       $user->email = 'markfirst@gmail.com';
       $user->password = Hash::make('mark34567');
       
    }
}
