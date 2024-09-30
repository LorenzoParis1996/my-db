<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Audience;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $audiences = [
            [
                'name'=> "Shonen",
            ],
            [
                'name'=> "Shoujo",
            ],
            [
                'name'=> "Josei",
            ],
            [
                'name'=> "Seinen",
            ],
        ];

        foreach($audiences as $audience){
            Audience::create($audience);
        }
    }
}
