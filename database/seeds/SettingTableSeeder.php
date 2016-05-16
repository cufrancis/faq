<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert([
          ['key'  =>  'site_name',  'value' =>  'Cufrancis问答网'],
        ]);
    }
}
