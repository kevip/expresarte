<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(DesignCategoriesTableSeeder::class);
        $this->call(DesignsSeeder::class);
    }
}
