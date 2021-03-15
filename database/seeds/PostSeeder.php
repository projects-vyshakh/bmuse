<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title'=>'Post1', 'pub_date'=> now()],
            ['title'=>'Post2', 'pub_date'=> now()],
            ['title'=>'Post3', 'pub_date'=> now()],
            ['title'=>'Post4', 'pub_date'=> now()],
            ['title'=>'Post5', 'pub_date'=> now()],
            ['title'=>'Post6', 'pub_date'=> now()],
        ]);
    }
}
