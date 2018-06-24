<?php

use App\DesignCategory;
use Illuminate\Database\Seeder;

class DesignCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Abstracto"
            ],
            [
                "name" => "Arte urbano"
            ],
            [
                "name" => "Collage"
            ],
            [
                "name" => "Fotografía"
            ],
            [
                "name" => "Futbol"
            ],
            [
                "name" => "Gamer"
            ],
            [
                "name" => "Motivacional"
            ],
            [
                "name" => "Pop"
            ]
        ];
        foreach ($categories as $category) {
            DesignCategory::create($category);
        }
    }
}
