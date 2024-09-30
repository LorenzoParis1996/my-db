<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Studio;

class AnimeStudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anime1 = Anime::find(1);
        $anime1->studios()->sync([1]);

        $anime2 = Anime::find(3);
        $anime2->studios()->sync([3]);

        $anime3 = Anime::find(5);
        $anime3->studios()->sync([5,6]);

        $anime4 = Anime::find(8);
        $anime4->studios()->sync([7]);

        $studio = Studio::find(2);

        $animeIds = [2,6,7];

        foreach($animeIds as $animeId) {
            $anime = Anime::find($animeId);
            if ($anime) {
                $anime->studios()->sync($studio->id);
            }
        }
    }
}