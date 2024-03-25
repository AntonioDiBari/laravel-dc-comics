<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $comic = new Comic;

            $comic->title = $faker->words(3, true);
            $comic->description = $faker->paragraph(2, false);
            $comic->thumb = $faker->imageUrl(640, 480, 'comic', true);
            $comic->price = $faker->randomFloat(2, 10, 50);
            $comic->series = $faker->words(3, true);
            $comic->sale_date = $faker->date();
            $comic->type = $faker->words(2, true);

            $comic->save();
        }
    }
}
