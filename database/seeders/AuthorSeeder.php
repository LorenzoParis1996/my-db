<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name'=> "Hirohiko",
                'lastname'=> "Araki",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1960-06-07",
                'place_of_birth'=> "Sendai, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Hirohiko_Araki/cover/4654-Hirohiko_Araki-foto.jpg",
                'brief_biography'=> "Hirohiko Araki is a prominent Japanese manga artist, best known for his influential series JoJo's Bizarre Adventure. He was born on June 7, 1960, in Sendai, Japan, into a middle-class family. His father, an avid manga reader, instilled a passion for comics in him from a young age, which was further fueled by his childhood experiences with his younger identical twin sisters, who often kept him isolated in his room with nothing but manga to read.",
            ],
            [
                'name'=> "Ai",
                'lastname'=> "Yazawa",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1967-03-07",
                'place_of_birth'=> "Osaka, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Ai_Yazawa/cover/4993-Ai_Yazawa-foto.jpg",
                'brief_biography'=> "Ai Yazawa is a renowned Japanese manga artist, celebrated for her distinctive storytelling and fashion-forward characters. Born on March 7, 1967, in Osaka, Japan, she developed a passion for drawing at an early age, participating in a cartoonist competition during her middle school years, where she won first place. This early success encouraged her to pursue a career in manga.",
            ],
            [
                'name'=> "Hajime",
                'lastname'=> "Yatate",
                'nationality'=> null,
                'date_of_birth'=> null,
                'place_of_birth'=> null,
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Hajime_Yatate/cover/345-Hajime_Yatate-foto.jpg",
                'brief_biography'=> "Hajime Yatate (矢立 肇) is a pseudonym representing the collective contributions of the animation staff at Sunrise, a prominent Japanese animation studio. The name is derived from a quote by the famous Japanese poet Matsuo Bashō, which reflects the beginning of a journey or creative process.",
            ],
            [
                'name'=> "Yoshiyuki",
                'lastname'=> "Sadamoto",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1962-01-29",
                'place_of_birth'=> "Tokuyama, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Yoshiyuki_Sadamoto/cover/461-Yoshiyuki_Sadamoto-foto.jpg",
                'brief_biography'=> "Yoshiyuki Sadamoto is a prominent Japanese manga artist and character designer, best known for his work on the critically acclaimed series Neon Genesis Evangelion. Born on January 29, 1962, in Tokuyama, Japan, he pursued his education at Tokyo Zokei University, where he studied art and design.",
            ],
            [
                'name'=> "Hajime",
                'lastname'=> "Isayama",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1986-08-29",
                'place_of_birth'=> "Oyama, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Hajime_Isayama/cover/24852-Hajime_Isayama-foto.jpg",
                'brief_biography'=> "Hajime Isayama is a celebrated Japanese manga artist, best known for creating the immensely popular series Attack on Titan (Shingeki no Kyojin). He was born on August 29, 1986, in Ōyama, Oita Prefecture, Japan. Growing up in a rural area surrounded by mountains, Isayama's childhood experiences greatly influenced the themes and imagery in his work, particularly the concept of walls and giants.",
            ],
            [
                'name'=> "Tsugumi",
                'lastname'=> "Ohba",
                'nationality'=> "Japanese",
                'date_of_birth'=> null,
                'place_of_birth'=> "Tokyo, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Tsugumi_Ohba/cover/24021-Tsugumi_Ohba-foto.jpg",
                'brief_biography'=> "Tsugumi Ohba is a Japanese manga writer, best known for his collaboration with illustrator Takeshi Obata on the critically acclaimed series Death Note and Bakuman. Born in Tokyo, Japan, Ohba's true identity remains a mystery, as they have chosen to maintain anonymity throughout their career.",
            ],
            [
                'name'=> "George",
                'lastname'=> "Morikawa",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1966-01-17",
                'place_of_birth'=> "Tokyo, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/George_Morikawa/cover/7737-George_Morikawa-foto.jpg",
                'brief_biography'=> "George Morikawa is a Japanese manga artist best known for his long-running boxing-themed series Hajime no Ippo (はじめの一歩), which has been serialized in Weekly Shōnen Magazine since 1989. Born on January 17, 1966, in Tokyo, Morikawa developed an interest in boxing and sports from a young age, which greatly influenced his work.",
            ],
            [
                'name'=> "Hiromu",
                'lastname'=> "Arakawa",
                'nationality'=> "Japanese",
                'date_of_birth'=> "1973-05-08",
                'place_of_birth'=> "Makubetsu, Japan",
                'author_pic'=> "https://www.animeclick.it/immagini/autore/Hiromu_Arakawa/cover/2481-Hiromu_Arakawa-foto.jpg",
                'brief_biography'=> "Hiromu Arakawa is a renowned Japanese manga artist, best known for her highly successful series Fullmetal Alchemist (2001–2010). Born on May 8, 1973, in Makubetsu, Japan, she grew up on a dairy farm as the youngest of five siblings. From a young age, Arakawa showed an interest in art and storytelling, often drawing in her school textbooks.",
            ],
        ];

        foreach($authors as $author){
            Author::create($author);
        }
    }
}