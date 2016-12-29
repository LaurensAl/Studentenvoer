<?php

use Illuminate\Database\Seeder;
use App\Comments;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
class CommentsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {

            Comments::create([
                'name' => $faker->text(20),
                'comment' => $faker->paragraph(30),
                'email' => $faker->text(15),
                'post_id' => $faker->numberBetween($min = 1, $max = 20),
            ]);
        }
    }
}
