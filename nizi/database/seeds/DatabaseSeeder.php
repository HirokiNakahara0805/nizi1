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
        $this->call(Post2sTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(DepartmentpostsTableSeeder::class);
    }
}
