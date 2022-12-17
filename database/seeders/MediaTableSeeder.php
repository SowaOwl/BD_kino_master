<?php

namespace Database\Seeders;

use App\Models\Medias;
use App\Models\Movies;
use App\Models\Series;
use Faker\Core\Number;
use Faker\Provider\HtmlLorem;
use Faker\Provider\ru_RU\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medias::factory()->create([
            'id' => 1,
            'video_title' => "Зеленая миля",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Зеленая миля",
            'rating' => 9.6
        ]);
        Movies::factory()->create([
            'id' => 1,
            'mini_desc' => Text::asciify(),
            'media_id' => 1
        ]);

        Medias::factory()->create([
            'id' => 2,
            'video_title' => "Побег из Шоушенка",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Побег из Шоушенка",
            'rating' => 9.4
        ]);
        Movies::factory()->create([
            'id' => 2,
            'mini_desc' => Text::asciify(),
            'media_id' => 2
        ]);

        Medias::factory()->create([
            'id' => 3,
            'video_title' => "Форрест Гамп",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Форрест Гамп",
            'rating' => 9.2
        ]);
        Movies::factory()->create([
            'id' => 3,
            'mini_desc' => Text::asciify(),
            'media_id' => 3
        ]);

        Medias::factory()->create([
            'id' => 4,
            'video_title' => "Властелин колец: Возвращение короля",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Властелин колец: Возвращение короля",
            'rating' => 9.0
        ]);
        Movies::factory()->create([
            'id' => 4,
            'mini_desc' => Text::asciify(),
            'media_id' => 4
        ]);

        Medias::factory()->create([
            'id' => 5,
            'video_title' => "Тайна Коко",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Тайна Коко",
            'rating' => 9.0
        ]);
        Movies::factory()->create([
            'id' => 5,
            'mini_desc' => Text::asciify(),
            'media_id' => 5
        ]);

        Medias::factory()->create([
            'id' => 6,
            'video_title' => "Назад в будущее",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Назад в будущее",
            'rating' => 8.2
        ]);
        Movies::factory()->create([
            'id' => 6,
            'mini_desc' => Text::asciify(),
            'media_id' => 6
        ]);

        Medias::factory()->create([
            'id' => 7,
            'video_title' => "Интерстеллар",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Интерстеллар",
            'rating' => 8.1
        ]);
        Movies::factory()->create([
            'id' => 7,
            'mini_desc' => Text::asciify(),
            'media_id' => 7
        ]);

        Medias::factory()->create([
            'id' => 8,
            'video_title' => "Властелин колец: Братство Кольца",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Властелин колец: Братство Кольца",
            'rating' => 9.2
        ]);
        Movies::factory()->create([
            'id' => 8,
            'mini_desc' => Text::asciify(),
            'media_id' => 8
        ]);

        Medias::factory()->create([
            'id' => 9,
            'video_title' => "Властелин колец: Две крепости",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "Властелин колец: Две крепости",
            'rating' => 9.2
        ]);
        Movies::factory()->create([
            'id' => 9,
            'mini_desc' => Text::asciify(),
            'media_id' => 9
        ]);

        Medias::factory()->create([
            'id' => 10,
            'video_title' => "1+1",
            'video_text' => Text::asciify(),
            'video_type' => "movie",
            'fr_name' => "1+1",
            'rating' => 9.2
        ]);
        Movies::factory()->create([
            'id' => 10,
            'mini_desc' => Text::asciify(),
            'media_id' => 10
        ]);

        Medias::factory()->create([
            'id' => 11,
            'video_title' => "Во все тяжкие",
            'video_text' => Text::randomLetter(),
            'video_type' => "series",
            'fr_name' => "Во все тяжкие",
            'rating' => 6.2
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 11
        ]);

        Medias::factory()->create([
            'id' => 12,
            'video_title' => "Офис",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Офис",
            'rating' => 7.2
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 12
        ]);

        Medias::factory()->create([
            'id' => 13,
            'video_title' => "Аватар: Легенда об Аанге",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Аватар: Легенда об Аанге",
            'rating' => 8.2
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 13
        ]);

        Medias::factory()->create([
            'id' => 14,
            'video_title' => "Друзья",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Друзья",
            'rating' => 7.2
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 14
        ]);

        Medias::factory()->create([
            'id' => 15,
            'video_title' => "Сопрано",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Сопрано",
            'rating' => 7.5
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 15
        ]);

        Medias::factory()->create([
            'id' => 16,
            'video_title' => "Игра престолов",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Игра престолов",
            'rating' => 7.5
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 16
        ]);

        Medias::factory()->create([
            'id' => 17,
            'video_title' => "Рик и Морти",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Рик и Морти",
            'rating' => 9.5
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 17
        ]);

        Medias::factory()->create([
            'id' => 18,
            'video_title' => "Амфибия",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Амфибия",
            'rating' => 6.3
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 18
        ]);

        Medias::factory()->create([
            'id' => 19,
            'video_title' => "Доктор Хаус",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Доктор Хаус",
            'rating' => 9.3
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 19
        ]);

        Medias::factory()->create([
            'id' => 20,
            'video_title' => "Как я встретил вашу маму",
            'video_text' => Text::asciify(),
            'video_type' => "series",
            'fr_name' => "Как я встретил вашу маму",
            'rating' => 8.3
        ]);
        Series::factory()->create([
            'serial_num' => Text::randomDigitNotNull(),
            'season_num' => Text::randomDigitNotNull(),
            'season_desc' => Text::asciify(),
            'serial_desc' => Text::asciify(),
            'mini_desc' => Text::asciify(),
            'media_id' => 20
        ]);

        Medias::factory()->create([
            'id' => 21,
            'video_title' => "Тайна Коко",
            'video_text' => Text::asciify(),
            'video_type' => "trailer",
            'fr_name' => "Тайна Коко",
            'rating' => 0.0
        ]);

        Medias::factory()->create([
            'id' => 22,
            'video_title' => "Интерстеллар",
            'video_text' => Text::asciify(),
            'video_type' => "trailer",
            'fr_name' => "Интерстеллар",
            'rating' => 0.0
        ]);

        Medias::factory()->create([
            'id' => 23,
            'video_title' => "1+1",
            'video_text' => Text::asciify(),
            'video_type' => "trailer",
            'fr_name' => "1+1",
            'rating' => 0.0
        ]);

        Medias::factory()->create([
            'id' => 24,
            'video_title' => "Побег из Шоушенка",
            'video_text' => Text::asciify(),
            'video_type' => "trailer",
            'fr_name' => "Побег из Шоушенка",
            'rating' => 0.0
        ]);

        Medias::factory()->create([
            'id' => 25,
            'video_title' => "Назад в будущее",
            'video_text' => Text::asciify(),
            'video_type' => "trailer",
            'fr_name' => "Назад в будущее",
            'rating' => 0.0
        ]);
    }
}
