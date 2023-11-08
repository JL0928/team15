<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            'name'=>'MAPPA',
            'founder'=>'丸山正雄',
            'head'=>'日本東京都杉並區天沼2丁目3番9號朝日生命杉並大樓9樓',
            'address'=>'https://www.mappa.co.jp/en/'

        ]);
    }
}
