<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('types')->insert([
        ['name' =>  '金融经济'],
        ['name' =>  '企业管理'],
        ['name' =>  '法律法规']
      ]);
    }
}
