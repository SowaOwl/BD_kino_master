<?php

namespace Database\Seeders;

use App\Models\Actors;
use Faker\Provider\fr_BE\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Actors::factory()->create([
            'id' => 1,
            'name' => "Том Хэнкс"
        ]);
        Actors::factory()->create([
            'id' => 2,
            'name' => "Морган Фриман"
        ]);
        Actors::factory()->create([
            'id' => 3,
            'name' => "Иэн Маккеллен"
        ]);
        Actors::factory()->create([
            'id' => 4,
                'name' => "Энди Серк"
        ]);
        Actors::factory()->create([
            'id' => 5,
            'name' => "Мэттью МакКонахи"
        ]);
        Actors::factory()->create([
            'id' => 6,
            'name' => "Энн Хэтэуэй"
        ]);
        Actors::factory()->create([
            'id' => 7,
            'name' => "Омар Си"
        ]);
        Actors::factory()->create([
            'id' => 8,
            'name' => "Майкл Дж. Фокс"
        ]);
        Actors::factory()->create([
            'id' => 9,
            'name' => "Кристофер Ллойд"
        ]);
        Actors::factory()->create([
            'id' => 10,
            'name' => "Джессика Честейн"
        ]);
    }
}
