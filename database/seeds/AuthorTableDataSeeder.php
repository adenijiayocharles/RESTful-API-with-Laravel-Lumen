<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Factory as Faker;
class AuthorTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            $name = strtolower($faker->firstName);
            Author::create([
                "name" => $faker->name,
                "email" => $faker->email,
                "github" => "https://github.com/$name",
                "twitter" => "@".$name,
                "location" => $faker->country,
                "latest_article_published" => $faker->sentence
            ]);
        }
    }
}
