<?php

use App\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DesignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = Image::get();
        $faker = Faker::create();
        foreach ($images->toArray() as $image) {
            \App\Design::create([
                "user_id"               =>rand(1,50),
                "design_category_id"    =>rand(1,8),
                "title"                 =>$faker->realText(rand(10,10)),
                "review"                =>$faker->realText(rand(500,1000)),
                "status"                =>1,
                "image_id"              => $image["id"]
            ]);
        }
    }
}
