<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
           [
            'name'=> "Jojo's Bizarre Adventure Stone Ocean",
            'season'=> "Season 6",
            'format'=> "Blu-Ray",
            'price'=> 17.99,
            'stock'=> 5,
            'image'=> "https://www.animeclick.it/immagini/anime/Le_bizzarre_avventure_di_JoJo_Stone_Ocean/cover/Le_bizzarre_avventure_di_JoJo_Stone_Ocean-cover-thumb.jpg",
           ],
           [
            'name'=> "Nana",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 3,
            'image'=> "https://www.animeclick.it/immagini/anime/Nana/cover/Nana-cover-thumb.jpg",
           ],
           [
            'name'=> "Cowboy Bebop",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 6,
            'image'=> "https://www.animeclick.it/immagini/anime/Cowboy_Bebop/cover/Cowboy_Bebop-cover-thumb.jpg_large",
           ],
           [
            'name'=> "Neon Genesis Evangelion",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 2,
            'image'=> "https://www.animeclick.it/immagini/anime/Neon_Genesis_Evangelion/cover/Neon_Genesis_Evangelion-cover-thumb.jpg",
           ],
           [
            'name'=> "Attack on Titan",
            'season'=> "Season 1",
            'format'=> "Blu-Ray",
            'price'=> 17.99,
            'stock'=> 4,
            'image'=> "https://www.animeclick.it/immagini/anime/Attack_on_Titan/cover/Attack_on_Titan-cover-thumb.jpg",
           ],
           [
            'name'=> "Death Note",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 5,
            'image'=> "https://www.animeclick.it/immagini/anime/Death_Note/cover/Death_Note-cover-thumb.jpg",
           ],
           [
            'name'=> "Hajime no Ippo",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 3,
            'image'=> "https://www.animeclick.it/images/serie/HajimenoIppo/HajimenoIppo-cover-thumb.jpg",
           ],
           [
            'name'=> "Fullmetal Alchemist: Brotherhood",
            'season'=> "Complete season",
            'format'=> "Blu-Ray",
            'price'=> 17.99,
            'stock'=> 4,
            'image'=> "https://www.animeclick.it/immagini/anime/Fullmetal_Alchemist_2009/cover/Fullmetal_Alchemist_2009-cover-thumb.jpg",
           ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}