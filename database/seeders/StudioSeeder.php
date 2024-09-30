<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studio;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studios = [
            [
                'name'=> "David Production",
            ],
            [
                'name'=> "Madhouse",
            ],
            [
                'name'=> "Sunrise",
            ],
            [
                'name'=> "Gainax",
            ],
            [
                'name'=> "Wit Studio",
            ],
            [
                'name'=> "Mappa",
            ],
            [
                'name'=> "Bones",
            ],
        ];

        foreach($studios as $studio){
            Studio::create($studio);
        }
    }
}