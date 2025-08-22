<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // Prendo tutti gli ID esistenti nella tabella publishers
        $publisherIds = \App\Models\Publisher::pluck('id')->toArray();


        for ($i = 0;$i < 10;$i++) {
            $newBook = new Book();
            $newBook->title = $faker->sentence();
            $newBook->author = $faker->name();
            $newBook->category = $faker->word();

            // Assegno un publisher_id esistente
            $newBook->publisher_id = $faker->randomElement($publisherIds);

            $newBook->content = $faker->paragraph();

            $newBook->save();

        }
    }
}
