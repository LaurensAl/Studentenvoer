<?php
use App\Label;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
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

            Label::create([
                'healthy' => $faker->numberBetween($min = 0, $max = 1),
                'fattening' => $faker->numberBetween($min = 0, $max = 1),
                'vegetables' => $faker->numberBetween($min = 0, $max = 1),
                'meat' => $faker->numberBetween($min = 0, $max = 1),
                'easy' => $faker->numberBetween($min = 0, $max = 1),
                'difficult' => $faker->numberBetween($min = 0, $max = 1),
                'post_id' => $faker->numberBetween($min = 1, $max = 20),
            ]);
        }
    }
}
