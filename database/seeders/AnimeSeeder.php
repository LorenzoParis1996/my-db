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
                'description'=> "Stone Ocean è la sesta parte di JoJo. Stavolta JoJo è una ragazza: Jolyne Kujo è figlia di Jotaro, e le vicende che la riguardano avvengono nel 2011, dietro le sbarre del penitenziario di Green Dolphin Street dove è detenuta. Il Confessore padre Pucci, che ambisce al Paradiso, ha messo gli occhi su di lei, e non si fermerà di fronte a nulla. "
            ],
            [
                'title'=> "Nana",
                'original_title'=> "NANA ナナ",
                'release_year'=> "2006",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Nana/cover/Nana-cover-thumb.jpg",
                'description'=> "Questa è la storia di due ragazze che decidono di cambiare vita, trasferendosi dalla provincia giapponese a Tokyo. Hanno lo stesso nome (“Nana”, cioè “sette”) e le loro storie stanno per incrociarsi. La diciannovenne Nana Komatsu, una di quelle persone innamorate dell’amore, lavora in un video-nolo e ha una storia a distanza con Shoji, che si è trasferito a Tokyo per studiare all'università. Nana Osaki è invece una cantante punk rock e, finora, ha militato in una band chiamata Blast, dove ha conosciuto il ragazzo di cui si è poi innamorata: Ren Honjo..."
            ],
            [
                'title'=> "Cowboy Bebop",
                'original_title'=> "カウボーイビバップ?, Kaubōi Bibappu",
                'release_year'=> "1998",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Cowboy_Bebop/cover/Cowboy_Bebop-cover-thumb.jpg_large",
                'description'=> "Spike Spiegel, un ex-affiliato del Red Dragon, e il suo socio Jet Black, ex-investigatore dell'ISSP, sono due cacciatori di taglie che si spostano di pianeta in pianeta alla ricerca di criminali a bordo della loro astronave: il Bebop. Nel corso delle loro avventure, senza che lo vogliano, ai due si aggiungono tre nuovi compagni: il Welsh Corgi Pembroke iper-intelligente Ein, la provocante truffatrice perseguitata dai creditori Faye Valentine e l'eccentrica e geniale hacker preadolescente Radical Edward. Nel corso delle loro azioni, di solito fallimentari, inconcludenti o di scarso profitto, tutti i membri dell'improbabile equipaggio dovranno fare i conti con questioni ancora irrisolte del loro turbolento passato, segnato da ricordi traumatici, memorie perdute, abbandoni mai chiariti e amori travagliati. Il tutto trattato con una forte nota filosofica, matura, psicologica ed esistenzialista che riflette sia gli attimi migliori che quelli peggiori della vita di cinque individui sperduti. "
            ],
            [
                'title'=> "Neon Genesis Evangelion",
                'original_title'=> "新世紀エヴァンゲリオン, Shin seiki Evangerion",
                'release_year'=> "1995",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Neon_Genesis_Evangelion/cover/Neon_Genesis_Evangelion-cover-thumb.jpg",
                'description'=> "Sono passati ormai 15 anni dalla violenta catastrofe nota come Second Impact che provocò la morte di oltre 3 miliardi di persone. Questo incidente dalle cause non del tutto note portò le persone a rifugiarsi in alcune città tecnologicamente avanzate, tra cui Neo Tokyo-3. Proprio in questa città hanno inizio le vicende di uno studente molto introverso di nome Shinji Ikari, che verrà reclutato come pilota dell'Eva-01, un enorme robot costruito appositamente per combattere delle strane creature soprannominate Angeli che attaccano continuamente le città minacciando di provocare una terza catastrofe."
            ],
            [
                'title'=> "Attack on Titan",
                'original_title'=> "進撃の巨人, Shingeki no kyojin",
                'release_year'=> "2013",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Attack_on_Titan/cover/Attack_on_Titan-cover-thumb.jpg",
                'description'=> "Diverse centinaia di anni fa, la razza umana fu quasi sterminata dai giganti. Si racconta di quanto questi fossero alti, privi di intelligenza e affamati di carne umana; peggio ancora, essi sembra divorassero umani più per piacere che per necessario sostentamento.
                Una piccola percentuale dell'umanità però sopravvisse asserragliandosi in una città circondata da mura estremamente alte, anche più alte del più grande di giganti.
                Eren è un adolescente che vive in questa città, dove non si vede un gigante da oltre un secolo, ma presto un orrore indicibile si palesa alle sue porte, ed un gigante più grande di quanto si sia mai sentito narrare, appare dal nulla abbattendo le mura ed imperversando assieme ad altri suoi simili fra la popolazione.
                Eren, vinto il terrore iniziale, si ripromette di eliminare ogni singolo gigante, per vendicare l'umanità."
            ],
            [
                'title'=> "Death Note",
                'original_title'=> "デスノート, Desu Nōto",
                'release_year'=> "2006",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Death_Note/cover/Death_Note-cover-thumb.jpg",
                'description'=> "Tutto ha inizio con il ritrovamento di uno strano quaderno nero da parte di un brillante studente di nome Light Yagami. Incuriosito, il ragazzo inzierà a sfogliarlo trovando al suo interno alcune regole che ne descrivono l'utilizzo, tra cui una che cita: L'umano il cui nome sarà scritto su questo quaderno morirà. Sebbene un po' scettico, Light inizierà ad utilizzarlo scrivendo il nome di alcuni criminali e rendendosi ben presto conto che il quaderno da lui trovato è effettivamente un oggetto misterioso in grado di uccidere le persone. Essendo alimentato da un forte senso di giustizia, Light utilizzerà il quaderno sempre più spesso allo scopo di uccidere i criminali, ma queste morti inspiegabili attireranno l'attenzione della polizia e di un famoso detective soprannominato Elle, dando così inizio ad una caccia al colpevole basata sull\'intelligienza e la strategia."
            ],
            [
                'title'=> "Hajime no Ippo",
                'original_title'=> "はじめの一歩",
                'release_year'=> "2000",
                'cover_image'=> "https://www.animeclick.it/images/serie/HajimenoIppo/HajimenoIppo-cover-thumb.jpg",
                'description'=> "Ippo Makunouchi è uno studente di scuola superiore, costretto ad aiutare sua madre a gestire l'azienda ittica di famiglia, non ha perciò il molto tempo libero che hanno molti suoi coetanei. La sua vita è, inoltre, resa dura da continui episodi di bullismo di cui è vittima. Proprio uno di questi episodi determinerà l\'occasione per Ippo di imprimere una svolta alla sua vita: verrà infatti salvato da un pugile professionista di nome Takamura e deciderà di seguirne le orme, iniziando gli allenamenti per diventare lui stesso un pugile. "
            ],
            [
                'title'=> "Fullmetal Alchemist: Brotherhood",
                'original_title'=> "鋼の錬金術師 FULLMETAL ALCHEMIST, Hagane no renkinjutsushi - FULLMETAL ALCHEMIST",
                'release_year'=> "2009",
                'cover_image'=> "https://www.animeclick.it/immagini/anime/Fullmetal_Alchemist_2009/cover/Fullmetal_Alchemist_2009-cover-thumb.jpg",
                'description'=> "Ambientato in un mondo alternativo simile all'Europa di inizio 1900, narra i viaggi e la maturazione fisica e spirituale di due fratelli, Edward e Alphonse Elric. Abbandonati dal padre alchimista in tenera età e cresciuti quindi dalla sola madre Trisha, i due bambini manifestano fin da subito grandi attitudini nello studio delle scienze alchemiche. Questo li porta, anni dopo, a tentare una trasmutazione umana, il massimo dei tabù dell'alchimia, al fine di riportare in vita la madre, morta di malattia. Un\'azione che pagheranno a caro prezzo, dando così inizio a una fantastica avventura che li porterà sulle tracce delle leggendaria Pietra Filosofale al fine di riparare all'errore commesso."
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