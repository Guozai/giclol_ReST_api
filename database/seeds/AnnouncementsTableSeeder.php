<?php

use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder {
    public function run() {
        DB::table('announcements')->insert([
            'content' => '1. 队伍成员资格在任何时间内，所有队伍需要至少有一名中国大陆身份选手作为替补。在任何时间点，队伍都不允许违反规则1.2中的规定进行换人。替补指当一方的首发选手因任何事故不能上场时，教练指示其替代首发选手，使比赛首发人数补成平衡的选手。该名选手必须被包括在战队提交给LPL官方的上场名单中。'
        ]);
    }
}