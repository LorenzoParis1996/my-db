<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Author;

class AnimeAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $animeAuthors = [
        1 => [1],
        2 => [2],
        3 => [3],
        4 => [4],
        5 => [5],
        6 => [6],
        7 => [7],
        8 => [8],
      ];

      foreach($animeAuthors as $animeId => $authorId) {
        $anime = Anime::find($animeId);

        if ($anime) {
            $anime->authors()->sync($authorId);
        }
      }
    }
}
