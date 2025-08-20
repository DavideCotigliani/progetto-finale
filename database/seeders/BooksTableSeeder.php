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
        for ($i = 0;$i < 10;$i++) {
            $newBook = new Book();
            $newBook->title = $faker->sentence();
            $newBook->author = $faker->name();
            $newBook->category = $faker->word();

            $newBook->content = $faker->paragraph();

            $newBook->save();

        }
    }
}
