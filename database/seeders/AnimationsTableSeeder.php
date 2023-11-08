<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('animations')->insert([
            'name'=>'咒術迴戰',
            'type'=>'冒險、黑暗、奇幻',
            'orign'=>'芥見下下',
            'dir'=>'朴性厚',
            'ep_num'=>24,
            'cp_id'=>1,
            'play_time'=>'2020/10/2'

        ]);
    }
}
