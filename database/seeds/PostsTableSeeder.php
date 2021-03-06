<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $image = array('sub.png', 'pasta.png', 'pizza.png', 'burger.jpg', 'bufmac.png');

        foreach (range(1, 20) as $index) {
            $title = $faker->text(80);

            Post::create([
                'title' => $title,
                'content' => $faker->paragraph(25),
                'description' => $faker->paragraph(20),
                'slug' => Str::slug($title, '-'),
                'status' => 1,
                'ingredients' => $faker->paragraph(30),
                'foto' => $faker->randomElement($image),
                'user_id' => $faker->numberBetween($min = 1, $max = 3),
            ]);
        }
    }
}
