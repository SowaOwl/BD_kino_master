<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\ActorsMediasController;
use App\Http\Controllers\GenresMediasController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActorTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(ActorsMediasTableSeeder::class);
        $this->call(GenreMediasTableSeeder::class);
    }
}
