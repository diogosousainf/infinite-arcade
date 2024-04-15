<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        /*/DB::table('games')->insert([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'The Legend of Zelda: Breath of the Wild is an action-adventure game developed and published by Nintendo. An entry in the longrunning The Legend of Zelda series, it was released for the Nintendo Switch and Wii U consoles on March 3, 2017.',
            //'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=The+Legend+of+Zelda%3A+Breath+of+the+Wild',
            'platform' => 'Nintendo Switch',
            'genre' => 'Action-Adventure',
            'release_date' => '2017-03-03',
            'developer' => 'Nintendo EPD',
            'rating' => 'E10+',
            'price' => 59.99,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('games')->insert([
            'title' => 'Super Mario Odyssey',
            'description' => 'Super Mario Odyssey is a platform game developed and published by Nintendo for the Nintendo Switch. It is a Super Mario game that follows Mario and Cappy, a spirit that turns into Mario’s hat and allows him to possess other characters and objects, as they journey across various worlds to save Princess Peach from his nemesis Bowser, who plans to forcibly marry her.',
            //'image' => 'https://via.placeholder.com/640x480.png/ff0000?text=Super+Mario+Odyssey',
            'platform' => 'Nintendo Switch',
            'genre' => 'Platformer',
            'release_date' => '2017-10-27',
            'developer' => 'Nintendo EPD',
            'rating' => 'E10+',
            'price' => 59.99,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('games')->insert([
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by CD Projekt. Based on The Witcher series of fantasy novels by Polish author Andrzej Sapkowski, it is the sequel to the 2011 game The Witcher 2: Assassins of Kings.',
            //'image' => 'https://via.placeholder.com/640x480.png/0000ff?text=The+Witcher+3%3A+Wild+Hunt',
            'platform' => 'PC',
            'genre' => 'Action RPG',
            'release_date' => '2015-05-19',
            'developer' => 'CD Projekt Red',
            'rating' => 'M',
            'price' => 29.99,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('games')->insert([
            'title' => 'Red Dead Redemption 2',
            'description' => 'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption.',
            //'image' => 'https://via.placeholder.com/640x480.png/ff00ff?text=Red+Dead+Redemption+2',
            'platform' => 'PS4',
            'genre' => 'Action-Adventure',
            'release_date' => '2018-10-26',
            'developer' => 'Rockstar Studios',
            'rating' => 'M',
            'price' => 39.99,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        /*/

    }
}
