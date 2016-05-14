<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LvlTablesSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TypeTableSeeder::class);
    }
}
