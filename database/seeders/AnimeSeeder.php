<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Audience;

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
                'release_year'=> "2021",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Le_bizzarre_avventure_di_JoJo_Stone_Ocean/cover/Le_bizzarre_avventure_di_JoJo_Stone_Ocean-cover-thumb.jpg",
                'description'=> "Stone Ocean is the sixth part of JoJo. This time, JoJo is a girl: Jolyne Kujo is the daughter of Jotaro, and the events concerning her take place in 2011, behind the bars of Green Dolphin Street prison where she is incarcerated. The confessor, Father Pucci, who aspires to reach Paradise, has set his sights on her and will stop at nothing."
            ],
            [
                'title'=> "Nana",
                'original_title'=> "NANA ナナ",
                'release_year'=> "2006",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Nana/cover/Nana-cover-thumb.jpg",
                'description'=> "This is the story of two girls who decide to change their lives by moving from the Japanese countryside to Tokyo. They share the same name (Nana, which means seven) and their stories are about to intersect. Nineteen-year-old Nana Komatsu, one of those people who is in love with love, works in a video rental store and has a long-distance relationship with Shoji, who has moved to Tokyo to study at university. On the other hand, Nana Osaki is a punk rock singer who has been part of a band called Blast, where she met the boy she later fell in love with, Ren Honjo."
            ],
            [
                'title'=> "Cowboy Bebop",
                'original_title'=> "カウボーイビバップ?, Kaubōi Bibappu",
                'release_year'=> "1998",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Cowboy_Bebop/cover/Cowboy_Bebop-cover-thumb.jpg_large",
                'description'=> "Spike Spiegel, a former member of the Red Dragon, and his partner Jet Black, a former ISSP investigator, are bounty hunters traveling from planet to planet in search of criminals aboard their spaceship: the Bebop. During their adventures, they unintentionally gain three new companions: the hyper-intelligent Pembroke Welsh Corgi Ein, the alluring con artist Faye Valentine who is pursued by creditors, and the eccentric genius preadolescent hacker Radical Edward. Throughout their usually unsuccessful, inconclusive, or low-profit endeavors, all members of this unlikely crew must confront unresolved issues from their turbulent pasts, marked by traumatic memories, lost recollections, unexplained abandonments, and troubled loves. The narrative is treated with a strong philosophical, mature, psychological, and existential note that reflects both the best and worst moments of the lives of five lost individuals."
            ],
            [
                'title'=> "Neon Genesis Evangelion",
                'original_title'=> "新世紀エヴァンゲリオン, Shin seiki Evangerion",
                'release_year'=> "1995",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Neon_Genesis_Evangelion/cover/Neon_Genesis_Evangelion-cover-thumb.jpg",
                'description'=> "Fifteen years have passed since the violent catastrophe known as the Second Impact, which caused the death of over 3 billion people. This incident, with causes not entirely known, led people to seek refuge in technologically advanced cities, including Neo Tokyo-3. It is in this city that the story begins of a very introverted student named Shinji Ikari, who will be recruited as the pilot of Eva-01, a giant robot specifically built to fight strange creatures nicknamed Angels that continuously attack cities, threatening to cause a third catastrophe."
            ],
            [
                'title'=> "Attack on Titan",
                'original_title'=> "進撃の巨人, Shingeki no kyojin",
                'release_year'=> "2013",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Attack_on_Titan/cover/Attack_on_Titan-cover-thumb.jpg",
                'description'=> "Diverse hundreds of years ago, humanity was nearly exterminated by giants. It is said that these giants were tall, devoid of intelligence, and hungry for human flesh; worse still, they seemed to devour humans more for pleasure than for necessary sustenance. However, a small percentage of humanity survived by barricading themselves in a city surrounded by extremely high walls, even taller than the largest of the giants. Eren is a teenager living in this city, where no giant has been seen for over a century. But soon, an unspeakable horror appears at their gates, and a giant larger than any ever heard of suddenly emerges, breaking down the walls and rampaging alongside others of its kind through the population. Overcoming his initial terror, Eren vows to eliminate every single giant in order to avenge humanity."
            ],
            [
                'title'=> "Death Note",
                'original_title'=> "デスノート, Desu Nōto",
                'release_year'=> "2006",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Death_Note/cover/Death_Note-cover-thumb.jpg",
                'description'=> "Everything begins with the discovery of a strange black notebook by a brilliant student named Light Yagami. Intrigued, the boy starts to flip through it and finds some rules describing its use, including one that states: \"The human whose name is written in this notebook will die.\" Although somewhat skeptical, Light begins to use it by writing the names of several criminals, quickly realizing that the notebook he found is indeed a mysterious object capable of killing people. Driven by a strong sense of justice, Light increasingly uses the notebook to eliminate criminals, but these unexplained deaths attract the attention of the police and a famous detective known as L, thus beginning a cat-and-mouse game based on intelligence and strategy."
            ],
            [
                'title'=> "Hajime no Ippo",
                'original_title'=> "はじめの一歩",
                'release_year'=> "2000",
                'cover_image'=> "https://www.animeclick.it/images/serie/HajimenoIppo/HajimenoIppo-cover-thumb.jpg",
                'description'=> "Ippo Makunouchi is a high school student forced to help his mother run the family fishing business, leaving him with little free time compared to many of his peers. His life is further complicated by ongoing episodes of bullying. One of these bullying incidents will provide Ippo with the opportunity to turn his life around: he is saved by a professional boxer named Takamura and decides to follow in his footsteps, beginning training to become a boxer himself."
            ],
            [
                'title'=> "Fullmetal Alchemist: Brotherhood",
                'original_title'=> "鋼の錬金術師 FULLMETAL ALCHEMIST, Hagane no renkinjutsushi - FULLMETAL ALCHEMIST",
                'release_year'=> "2009",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Fullmetal_Alchemist_2009/cover/Fullmetal_Alchemist_2009-cover-thumb.jpg",
                'description'=> "Set in an alternate world resembling early 1900s Europe, it tells the story of the journeys and physical and spiritual maturation of two brothers, Edward and Alphonse Elric. Abandoned by their alchemist father at a young age and raised solely by their mother, Trisha, the two children quickly show great aptitude for the study of alchemical sciences. This leads them, years later, to attempt a human transmutation, the greatest taboo of alchemy, in order to bring their mother back to life after she dies of illness. An action they will pay dearly for, thus beginning a fantastic adventure that will take them on the quest for the legendary Philosopher's Stone to correct their mistake."
            ],

        ];

        foreach($animes as $anime){
            Anime::create($anime);
        }

        //In relazioni one to many, i metodi come attach o sync non funzionano, essendo metodi creati per funzionare in relazione many to many.

        //Cicli e condizioni per assegnare un id specifico a un solo dato oppure per assegnare un id specifico a dati multipli (non e' il massimo).


        $anime1 = Anime::find(2);
        $audienceId = 3;

        if ($anime) {
            $anime1->audience_id = $audienceId;
            $anime1->save();
        }

        $audienceOne = Audience::find(4);
        $audienceTwo = Audience::find(1);

        $animeOneIds = [1,3,4];
        $animeTwoIds = [5,6,7,8];

        foreach($animeOneIds as $animeOneId) {
            $anime = Anime::find($animeOneId);
            if ($anime) {
                $anime->audience_id = $audienceOne->id;

                $anime->save();
            }
        }

        foreach($animeTwoIds as $animeTwoId) {
            $anime = Anime::find($animeTwoId);
            if ($anime) {
                $anime->audience_id = $audienceTwo->id;

                $anime->save();
            }
        }
    }
}