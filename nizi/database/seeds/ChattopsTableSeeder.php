<?php

use Illuminate\Database\Seeder;

class ChattopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Chattop::class, 10)
            ->create();
    }
}
