<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends seeder {
    public function run()
    {
        DB::table('results')->insert([
            'round1_score' => '3',
            'round2_score' => '5',
            'round3_score' => '3',
            'team_id' => '1'
        ]);

        DB::table('results')->insert([
            'round1_score' => '1',
            'team_id' => '2'
        ]);

        DB::table('results')->insert([
            'round1_score' => '0',
            'team_id' => '3'
        ]);

        DB::table('results')->insert([
            'round1_score' => '2',
            'round2_score' => '1',
            'team_id' => '4'
        ]);

        DB::table('results')->insert([
            'round1_score' => '3',
            'round2_score' => '4',
            'round3_score' => '1',
            'team_id' => '5'
        ]);

        DB::table('results')->insert([
            'round1_score' => '0',
            'team_id' => '6'
        ]);

        DB::table('results')->insert([
            'round2_score' => '2',
            'team_id' => '7'
        ]);
    }
}