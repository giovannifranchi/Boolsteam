<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres= ['Shooter', 'MMOARPG', 'ARPG', 'Fighting', 'Action RPG', 'Battle Royale'];

        // Schema::disableForeignKeyConstraints();
        // Type::truncate();
        // Schema::enableForeignKeyConstraints();

        foreach ($genres as $genre){
            $newgenre = new Genre();
            $newgenre->name = $genre;
            $newgenre->save();
        }
    }
}
