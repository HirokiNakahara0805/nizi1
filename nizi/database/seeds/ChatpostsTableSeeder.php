<?php

use Illuminate\Database\Seeder;

class ChatpostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Chatpost::class, 50)
            ->create();
            }
    
}