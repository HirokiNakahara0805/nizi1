<?php

use Illuminate\Database\Seeder;

class Post2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        factory(App\Post2::class, 50)
            ->create();
    }
}
