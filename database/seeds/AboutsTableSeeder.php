<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder {
    public function run() {
        DB::table('abouts')->insert([
            'description' => '提供全新的游戏体验！首先，我们推出了全新的HKC G32弧形显示器，与其他设置最匹配，可以在Overwatch中获得144hz，并且在PUBG中提供你拥有最高的视频设置90-120hz，加上大尺寸的屏幕，我们希望你每场比赛都有一个快乐的鸡晚餐！'
        ]);
    }
}