<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = [
            'Blizzard Entertainment',
            'Smilegate RPG',
            'KRAFTON, Inc.',
            'Darkflow Software',
            'Player First Games',
            'miHoYo',
            'Mediatonic',
            'Cryptic Studios',
            '343 Industries'
        ];


        foreach($developers as $developer)
        {
            $newDeveloper = new Developer();
            $newDeveloper->name = $developer;
            $newDeveloper->save();
        };
    }
}
