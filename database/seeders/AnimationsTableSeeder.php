<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnimationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function generateRandomName(){
            $name = array(
                '鋼之鍊金術師',
                '進擊的巨人', 
                '妖怪少爺',
                '火影忍者',
                '海賊王',
                'BLEACH',
                '死亡筆記本',  
                '龍珠',
                '偶像大師',
                '命運石之門',
                'CLANNAD',
                '鬼滅之刃',
                '名偵探柯南',  
                '魔卡少女樂',
                '魔神Z',
                '魔法少女小圓',
                'MIX',
                '吹響吧!上低音號',
                '五等分的新娘'  
                );
            return $name[rand(0, count($name)-1)];}

        public function generateRandomType(){
            $type = array(
                '機戰',
                '魔法少女',
                '偶像',
                '校園',
                '治癒',
                '日常',
                '競技',  
                '冒險',
                '奇幻',
                '科幻',
                '推理',
                '恐怖',
                '戀愛',
                '搞笑',
                '戰鬥',
                '少年',
                '少女',
                '魔法',
                '動作',
                '懸疑'
            );
            return $type[rand(0, count($type)-1)];}

        public function generateRandomOrign(){
            $orign = array(
                '岸本斉史',
                '鳥山明',
                '高橋留美子',
                ' CLAMP',
                '尾田栄一郎',
                '武內直子',
                ' relator',
                '松本大洋',
                '荒川弘',
                '石原恭央' ,
                '田尻智',
                '井上雄彥',
                '高殿円',
                '藤子不二雄',
                '古味直志',
                '桂正和',
                '五十嵐正邦',
                '花塚明' ,
                '赤松健',
                '横山光輝'
                );
            return $orign[rand(0, count($orign)-1)];}

        public function generateRandomDir(){
            $dir = array(
                '宮崎駿',
                '今石洋之',
                '庵野秀明',  
                '押井守',
                '細田守',
                '大友克洋',
                '德間康快',
                '萩原一至',
                '樋口真嗣',
                '新房昭之',
                '川尻善昭',
                '村瀬繪里子',
                '山賀博之',  
                '糸井重里',
                '神山健治',
                '摩砂雪',
                '大張正己',
                '富野由悠季',
                '結城信輝',
                '高畑勲'
                );
            return $dir[rand(0, count($dir)-1)];}
    
     public function run()
    {
        for ($i=0; $i<30; $i++)   // 隨機生成數
        {
            $name = $this->generateRandomName();
            $type = $this->generateRandomType();
            $orign = $this->generateRandomOrign();
            $dir = $this->generateRandomDir();
            $play_time = Carbon::now()->subYears(rand(10, 20))->subMonths(rand(0, 12))->subRealDays(rand(0, 31));
            $created_at = Carbon::now();
            $updated_at = Carbon::now();
            DB::table('animations')->insert([
                'name'=>$name,
                'type'=>$type,
                'orign'=>$orign,
                'dir'=>$dir,
                'ep_num'=>rand(6, 24),
                'cp_id'=>rand(1, 30),
                'play_time'=>$play_time,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at

            ]);
        }
    }
}