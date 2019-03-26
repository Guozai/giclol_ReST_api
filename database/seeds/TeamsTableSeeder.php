<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends seeder {
    public function run() {
        DB::table('teams')->insert([
            'team_name' => 'E-CME'
        ]);

        DB::table('teams')->insert([
            'team_name' => 'EHOME'
        ]);

        DB::table('teams')->insert([
            'team_name' => 'VG'
        ]);

        DB::table('teams')->insert([
            'team_name' => '英雄无敌战队4'
        ]);

        DB::table('teams')->insert([
            'team_name' => 'Yingxiongwudizhandiu5'
        ]);

        DB::table('teams')->insert([
            'team_name' => '英雄无敌战队6'
        ]);

        DB::table('teams')->insert([
            'team_name' => '英雄无敌战队7'
        ]);
    }
}