<?php

namespace Database\Seeders;

use App\Models\actors_medias;
use App\Models\genres_medias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreMediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        genres_medias::factory()->create([
            'id'=> 1,
            'medias_id'=>1,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 2,
            'medias_id'=>1,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 3,
            'medias_id'=>1,
            'genres_id'=>3
        ]);

        genres_medias::factory()->create([
            'id'=> 4,
            'medias_id'=>2,
            'genres_id'=>1
        ]);

        genres_medias::factory()->create([
            'id'=> 5,
            'medias_id'=>3,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 6,
            'medias_id'=>3,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 7,
            'medias_id'=>3,
            'genres_id'=>5
        ]);
        genres_medias::factory()->create([
            'id'=> 8,
            'medias_id'=>3,
            'genres_id'=>6
        ]);
        genres_medias::factory()->create([
            'id'=> 9,
            'medias_id'=>3,
            'genres_id'=>7
        ]);

        genres_medias::factory()->create([
            'id'=> 10,
            'medias_id'=>4,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 11,
            'medias_id'=>4,
            'genres_id'=>8
        ]);
        genres_medias::factory()->create([
            'id'=> 12,
            'medias_id'=>4,
            'genres_id'=>1
        ]);

        genres_medias::factory()->create([
            'id'=> 13,
            'medias_id'=>5,
            'genres_id'=>9
        ]);
        genres_medias::factory()->create([
            'id'=> 14,
            'medias_id'=>5,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 15,
            'medias_id'=>5,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 16,
            'medias_id'=>5,
            'genres_id'=>8
        ]);
        genres_medias::factory()->create([
            'id'=> 17,
            'medias_id'=>5,
            'genres_id'=>10
        ]);

        genres_medias::factory()->create([
            'id'=> 18,
            'medias_id'=>6,
            'genres_id'=>11
        ]);
        genres_medias::factory()->create([
            'id'=> 19,
            'medias_id'=>6,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 20,
            'medias_id'=>6,
            'genres_id'=>8
        ]);

        genres_medias::factory()->create([
            'id'=> 21,
            'medias_id'=>7,
            'genres_id'=>11
        ]);
        genres_medias::factory()->create([
            'id'=> 22,
            'medias_id'=>7,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 23,
            'medias_id'=>7,
            'genres_id'=>8
        ]);

        genres_medias::factory()->create([
            'id'=> 24,
            'medias_id'=>8,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 25,
            'medias_id'=>8,
            'genres_id'=>8
        ]);
        genres_medias::factory()->create([
            'id'=> 26,
            'medias_id'=>8,
            'genres_id'=>1
        ]);

        genres_medias::factory()->create([
            'id'=> 27,
            'medias_id'=>9,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 28,
            'medias_id'=>9,
            'genres_id'=>8
        ]);
        genres_medias::factory()->create([
            'id'=> 29,
            'medias_id'=>9,
            'genres_id'=>1
        ]);

        genres_medias::factory()->create([
            'id'=> 30,
            'medias_id'=>10,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 31,
            'medias_id'=>10,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 32,
            'medias_id'=>10,
            'genres_id'=>12
        ]);

        genres_medias::factory()->create([
            'id'=> 33,
            'medias_id'=>11,
            'genres_id'=>13
        ]);
        genres_medias::factory()->create([
            'id'=> 34,
            'medias_id'=>11,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 35,
            'medias_id'=>11,
            'genres_id'=>14
        ]);

        genres_medias::factory()->create([
            'id'=> 36,
            'medias_id'=>12,
            'genres_id'=>4
        ]);

        genres_medias::factory()->create([
            'id'=> 37,
            'medias_id'=>13,
            'genres_id'=>9
        ]);
        genres_medias::factory()->create([
            'id'=> 38,
            'medias_id'=>13,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 39,
            'medias_id'=>13,
            'genres_id'=>15
        ]);
        genres_medias::factory()->create([
            'id'=> 40,
            'medias_id'=>13,
            'genres_id'=>8
        ]);

        genres_medias::factory()->create([
            'id'=> 41,
            'medias_id'=>14,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 42,
            'medias_id'=>14,
            'genres_id'=>5
        ]);

        genres_medias::factory()->create([
            'id'=> 43,
            'medias_id'=>15,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 44,
            'medias_id'=>15,
            'genres_id'=>3
        ]);

        genres_medias::factory()->create([
            'id'=> 45,
            'medias_id'=>16,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 46,
            'medias_id'=>16,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 47,
            'medias_id'=>16,
            'genres_id'=>15
        ]);
        genres_medias::factory()->create([
            'id'=> 48,
            'medias_id'=>16,
            'genres_id'=>5
        ]);
        genres_medias::factory()->create([
            'id'=> 49,
            'medias_id'=>16,
            'genres_id'=>8
        ]);

        genres_medias::factory()->create([
            'id'=> 50,
            'medias_id'=>17,
            'genres_id'=>9
        ]);
        genres_medias::factory()->create([
            'id'=> 51,
            'medias_id'=>17,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 52,
            'medias_id'=>17,
            'genres_id'=>11
        ]);
        genres_medias::factory()->create([
            'id'=> 53,
            'medias_id'=>17,
            'genres_id'=>8
        ]);

        genres_medias::factory()->create([
            'id'=> 54,
            'medias_id'=>18,
            'genres_id'=>9
        ]);
        genres_medias::factory()->create([
            'id'=> 55,
            'medias_id'=>18,
            'genres_id'=>11
        ]);
        genres_medias::factory()->create([
            'id'=> 56,
            'medias_id'=>18,
            'genres_id'=>2
        ]);
        genres_medias::factory()->create([
            'id'=> 57,
            'medias_id'=>18,
            'genres_id'=>15
        ]);
        genres_medias::factory()->create([
            'id'=> 58,
            'medias_id'=>18,
            'genres_id'=>4
        ]);

        genres_medias::factory()->create([
            'id'=> 59,
            'medias_id'=>19,
            'genres_id'=>1
        ]);
        genres_medias::factory()->create([
            'id'=> 60,
            'medias_id'=>19,
            'genres_id'=>16
        ]);

        genres_medias::factory()->create([
            'id'=> 61,
            'medias_id'=>20,
            'genres_id'=>4
        ]);
        genres_medias::factory()->create([
            'id'=> 62,
            'medias_id'=>20,
            'genres_id'=>17
        ]);
        genres_medias::factory()->create([
            'id'=> 63,
            'medias_id'=>20,
            'genres_id'=>1
        ]);
    }
}
