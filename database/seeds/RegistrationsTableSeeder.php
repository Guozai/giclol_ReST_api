<?php

use Illuminate\Database\Seeder;

class RegistrationsTableSeeder extends seeder {
    public function run()
    {
        DB::table('registrations')->insert([
            'contact_name' => '李白',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'icon' => 'face1.png',
            'team_id' => '1'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => 'Bruce Lee',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'member6_id' => 'member_id',
            'icon' => 'face2.png',
            'team_id' => '2'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => 'Yorker',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'icon' => 'face3.png',
            'team_id' => '3'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => '张无忌',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'icon' => 'face4.png',
            'team_id' => '4'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => '张三丰',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'member6_id' => '啦啦啦',
            'icon' => 'face5.png',
            'team_id' => '5'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => 'Feng',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'icon' => 'face6.png',
            'team_id' => '6'
        ]);

        DB::table('registrations')->insert([
            'contact_name' => 'Feng Xiao',
            'contact_number' => '0419423432',
            'member1_id' => 'Yeeep',
            'member2_id' => 'haonandong89',
            'member3_id' => 'Keen',
            'member4_id' => 'Ace',
            'member5_id' => 'Mymymy33',
            'icon' => 'face7.png',
            'team_id' => '7'
        ]);
    }
}