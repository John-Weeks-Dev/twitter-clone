<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            'name' => 'Johnni Ward',
            'handle' => '@johnniward',
            'image' => 'https://randomuser.me/api/portraits/men/40.jpg',
            'tweet' => "We went rock climbing this weekend? Here is the video. Climbing is way more fun than exercising on any gym equipment. It works both your mind and body. Best of all it trains you to be creative and think out of the box. It's also an ongoing competition with yourself as you aim to improve your performance. ENJOY!",
            'file' => '/videos/Sportsman.mp4',
            'is_video' => true,
            'comments' => '35',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'Andre Carpenter',
            'handle' => '@andrecarpenter',
            'image' => 'https://randomuser.me/api/portraits/men/7.jpg',
            'tweet' => "Do you wanna learn Javascript? I'm gonna make a Udemy tutorial to show you all how easy it is.",
            'file' => '/pics/Code.png',
            'is_video' => false,
            'comments' => '83',
            'retweets' => '59',
            'likes' => '62',
            'analytics' => '66',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'Josephine Perry',
            'handle' => '@josephineperry',
            'image' => 'https://randomuser.me/api/portraits/women/59.jpg',
            'tweet' => "Just made a new SEO marketing video. Take a look!!! The good news is that there are several search engine optimization (SEO) tools out there — some free, some paid — that can help you view",
            'file' => '/videos/Seo.mp4',
            'is_video' => true,
            'comments' => '56',
            'retweets' => '54',
            'likes' => '78',
            'analytics' => '21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'Avis Glover',
            'image' => 'https://randomuser.me/api/portraits/men/77.jpg',
            'handle' => '@avisglover',
            'tweet' => "I've never seen ANYONE play guitar as good as this!!! Many guitarists neglect the theory side of things because it's perceived as boring, pretentious, or even just a complete f*ing mystery. It's true that some musicians, especially those with natural abilities like perfect pitch or an especially good ear, can excel without much background theory. But do not underestimate the power of this knowledge in developing you as a musician",
            'file' => '/pics/PlayGuitar.png',
            'is_video' => false,
            'comments' => '94',
            'retweets' => '29',
            'likes' => '33',
            'analytics' => '89',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
