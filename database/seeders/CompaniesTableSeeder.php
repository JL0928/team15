<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandomFounder(){
        $founder = array(
            '宮崎駿', // Studio Ghibli
            '庵野秀明', // Gainax
            '今石洋之', // Madhouse
            '德間康快', // Kyoto Animation
            '橘正紀', // P.A. Works
            '岡田斗司夫', // Studio Deen 
            '東憲一郎', //Production I.G
            '石川光久', // Bones
            '近藤光', // Sunrise 
            '森下隆司', // A-1 Pictures
            '丸山正雄', // J.C.Staff
            '內藤泰弘', // ufotable
            '新房昭之', // Shaft
            '佐藤順一', //OLM
            '片山一良', // Artland
            '岡本幸代', // Tatsunoko
            '大隅正秋', // Trigger  
            '福田己津央', // feel
            '劉維', // Haoliners
            '能海寬', // Xebec
            '川瀬健太郎', // LIDEN FILMS
        );
        return $founder[rand(0, count($founder)-1)];}
    
    public function generateRandomName(){
        $name = array(
            '京都動畫',
            'MAPPA',
            'Production I.G',
            'A-1 Pictures',
            'Studio Ghibli',
            'GAINAX',
            'Sunrise',
            'BONES',
            'P.A. Works',
            'Madhouse',
            'J.C.Staff',
            'ufotable',
            'SHAFT',
            '細田',
            'Production IMS',
            'GANSIS',
            'Trigger',
            '白絲',
            'XEBEC',
            'OLM'
            );
        return $name[rand(0, count($name)-1)];}

    public function generateRandomHead(){
        $head = array(
            '東京都西東京市', //Studio Ghibli
            '京都府宇治市', // Kyoto Animation
            '東京都新宿區', // Production I.G
            '東京都千代田區', // Madhouse
            '東京都墨田區', // A-1 Pictures 
            '東京都中野區', // Sunrise
            '東京都台東區', // Bones  
            '神奈川縣橫濱市', // P.A Works
            '東京都武蔵野市', // ufotable
            '東京都澀谷區', // SHAFT
            '東京都調布市', // J.C.Staff
            '東京都立川市', // feel
            '青森縣八戶市', //OLM 
            '東京都千代田區', // MAPPA
            '大阪府吹田市', // Gainax
            '東京都中野區', // Trigger
            '東京都墨田區', // Haoliners
            '東京都新宿區', // LIDEN FILMS  
            '千葉縣浦安市', // XEBEC
            '東京都武蔵野市', // TMS Entertainment
        );
            return $head[rand(0, count($head)-1)];}

    public function generateRandomAddress(){
        $address = array(
            'https://www.toei-anim.co.jp/', // Toei Animation
            'https://www.tatsunoko.co.jp/', // Tatsunoko
            'https://www.kyotoanimation.co.jp/', // Kyoto Animation
            'http://www.a1pictures.com/', // A-1 Pictures
            'https://www.igport.co.jp/', // Production I.G
            'https://www.madhouse.co.jp/', // Madhouse
            'http://www.sunrise-inc.co.jp/', // Sunrise
            'http://www.bones.co.jp/', // Bones
            'https://www.khara.co.jp/', // Studio Khara
            'https://www.paworks.com/', // P.A. Works
            'http://www.ufotable.com/', // ufotable
            'http://www.jcstaff.co.jp/', // J.C.Staff
            'http://www.gainax.co.jp/', // Gainax 
            'http://www.tms-e.com/', // TMS Entertainment
            'http://www.animatefilm.com/', // Animate Film
            'https://www.olm.co.jp/', // OLM
            'http://www.p-productions.co.jp/', // P Productions
            'https://trigger.co.jp/', // Trigger
            'https://www.artland.co.jp/', // Artland
            'http://www.silverlink.co.jp/', // Silver Link  
        );
            return $address[rand(0, count($address)-1)];}
        

    public function run()
    {
        for ($i=0; $i<30; $i++)   // 隨機生成數
        {
            $name = $this->generateRandomName();
            $founder = $this->generateRandomFounder();
            $head = $this->generateRandomHead();
            $address = $this->generateRandomAddress();
            $create = Carbon::now()->subYears(rand(15, 25))->subMonths(rand(0, 12))->subRealDays(rand(0, 31));
            $created_at = Carbon::now();
            $updated_at = Carbon::now();
            DB::table('companies')->insert([
                'name'=>$name,
                'create'=>$create,
                'founder'=>$founder,
                'head'=>$head,
                'address'=>$address,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
            ]);
        }
    }
}
