<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genres::factory()->create([
            'id' => 1,
            'name' => "драма"
        ]);

        Genres::factory()->create([
            'id' => 2,
            'name' => "фэнтези"
        ]);

        Genres::factory()->create([
            'id' => 3,
            'name' => "криминал"
        ]);

        Genres::factory()->create([
            'id' => 4,
            'name' => "комедия"
        ]);

        Genres::factory()->create([
            'id' => 5,
            'name' => "мелодрама"
        ]);

        Genres::factory()->create([
            'id' => 6,
            'name' => "история"
        ]);

        Genres::factory()->create([
            'id' => 7,
            'name' => "военный"
        ]);

        Genres::factory()->create([
            'id' => 8,
            'name' => "приключения"
        ]);

        Genres::factory()->create([
            'id' => 9,
            'name' => "мультфильм"
        ]);

        Genres::factory()->create([
            'id' => 10,
            'name' => "семейный"
        ]);

        Genres::factory()->create([
            'id' => 11,
            'name' => "фантастика"
        ]);

        Genres::factory()->create([
            'id' => 12,
            'name' => "биография"
        ]);

        Genres::factory()->create([
            'id' => 13,
            'name' => "криминал"
        ]);

        Genres::factory()->create([
            'id' => 14,
            'name' => "триллер"
        ]);

        Genres::factory()->create([
            'id' => 15,
            'name' => "боевик"
        ]);

        Genres::factory()->create([
            'id' => 16,
            'name' => "детектив"
        ]);

        Genres::factory()->create([
            'id' => 17,
            'name' => "мелодрама"
        ]);
    }
}
