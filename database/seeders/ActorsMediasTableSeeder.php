<?php

namespace Database\Seeders;

use App\Models\actors_medias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorsMediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        actors_medias::factory()->create([
            'id'=>1,
            'medias_id'=>1,
            'actors_id'=>1
        ]);

        actors_medias::factory()->create([
            'id'=>2,
            'medias_id'=>2,
            'actors_id'=>2
        ]);

        actors_medias::factory()->create([
            'id'=>3,
            'medias_id'=>4,
            'actors_id'=>3
        ]);
        actors_medias::factory()->create([
            'id'=>4,
            'medias_id'=>4,
            'actors_id'=>4
        ]);

        actors_medias::factory()->create([
            'id'=>5,
            'medias_id'=>6,
            'actors_id'=>8
        ]);
        actors_medias::factory()->create([
            'id'=>6,
            'medias_id'=>6,
            'actors_id'=>9
        ]);

        actors_medias::factory()->create([
            'id'=>7,
            'medias_id'=>7,
            'actors_id'=>5
        ]);
        actors_medias::factory()->create([
            'id'=>8,
            'medias_id'=>7,
            'actors_id'=>6
        ]);
        actors_medias::factory()->create([
            'id'=>9,
            'medias_id'=>7,
            'actors_id'=>10
        ]);

        actors_medias::factory()->create([
            'id'=>10,
            'medias_id'=>8,
            'actors_id'=>3
        ]);
        actors_medias::factory()->create([
            'id'=>11,
            'medias_id'=>8,
            'actors_id'=>4
        ]);

        actors_medias::factory()->create([
            'id'=>12,
            'medias_id'=>9,
            'actors_id'=>3
        ]);
        actors_medias::factory()->create([
            'id'=>13,
            'medias_id'=>9,
            'actors_id'=>4
        ]);

        actors_medias::factory()->create([
            'id'=>14,
            'medias_id'=>10,
            'actors_id'=>7
        ]);
    }
}
