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
           ],
           [
            'name'=> "Nana",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 3,
           ],
           [
            'name'=> "Cowboy Bebop",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 6,
           ],
           [
            'name'=> "Neon Genesis Evangelion",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 2,
           ],
           [
            'name'=> "Attack on Titan",
            'season'=> "Season 1",
            'format'=> "Blu-Ray",
            'price'=> 17.99,
            'stock'=> 4,
           ],
           [
            'name'=> "Death Note",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 5,
           ],
           [
            'name'=> "Hajime no Ippo",
            'season'=> "Complete season",
            'format'=> "DVD",
            'price'=> 12.99,
            'stock'=> 3,
           ],
           [
            'name'=> "Fullmetal Alchemist: Brotherhood",
            'season'=> "Complete season",
            'format'=> "Blu-Ray",
            'price'=> 17.99,
            'stock'=> 4,
           ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}