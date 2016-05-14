<?php

use Illuminate\Database\Seeder;

class LvlTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('lvl')->insert([
        'name'  =>  '一级',
        'exp'   =>  100,
      ]);
    }
}
