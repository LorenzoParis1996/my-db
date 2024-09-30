<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animes = [
            [
                'title'=> "Jojo's bizarre adventure stone ocean",
                'original_title'=> "ジョジョの奇妙な冒険 ストーンオーシャン, Jojo no kimyō na bōken - Sutōn ōshan",
                'release_year'=> "2021"
            ],
            [
                'title'=> "Nana",
                'original_title'=> "NANA ナナ",
                'release_year'=> "2006"
            ],
            [
                'title'=> "Cowboy Bebop",
                'original_title'=> "カウボーイビバップ?, Kaubōi Bibappu",
                'release_year'=> "1998"
            ],
            [
                'title'=> "Neon Genesis Evangelion",
                'original_title'=> "新世紀エヴァンゲリオン, Shin seiki Evangerion",
                'release_year'=> "1995"
            ],
            [
                'title'=> "Attack on Titan",
                'original_title'=> "進撃の巨人, Shingeki no kyojin",
                'release_year'=> "2013"
            ],
            [
                'title'=> "Death Note",
                'original_title'=> "デスノート, Desu Nōto",
                'release_year'=> "2006"
            ],
            [
                'title'=> "Hajime no Ippo",
                'original_title'=> "はじめの一歩",
                'release_year'=> "2000"
            ],
            [
                'title'=> "Full Metal Alchemist: Brotherhood",
                'original_title'=> "鋼の錬金術師 FULLMETAL ALCHEMIST, Hagane no renkinjutsushi - FULLMETAL ALCHEMIST",
                'release_year'=> "2009"
            ],

        ];

        foreach($animes as $anime){
            Anime::create($anime);
        }
    }
}