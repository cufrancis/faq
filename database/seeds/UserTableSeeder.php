<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        App\User::create([
          'name'  =>  'cufrancis',
          'email' =>  'cufrancis.com@gmail.com',
          'password'  =>  '$2y$10$RPkZxR7GKdyXJ/x095o8l.XqoeM4NakGAAhWQ5Y1jb9iDrhhCXYBa', // 041000lxj
          'age'       =>  18,
          'qq'        =>  542734599,
          'phone'     =>  18551826351,
          'money'     =>  1000000,
          'exp'       =>  1000000,
        ]);
    }
}
