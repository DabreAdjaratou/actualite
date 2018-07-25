<?php

use Illuminate\Database\Seeder;
// use database\factories\CategoryFactory;
use App\Models\linfodrome_admin\Category;


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
        factory(Category::class, 10)->create();
    }
}
