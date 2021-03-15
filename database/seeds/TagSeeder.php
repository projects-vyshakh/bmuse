<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['post_id'=>'1', 'tag'=> 'PHP'],
            ['post_id'=>'1', 'tag'=> 'JS'],
            ['post_id'=>'2', 'tag'=> 'C'],
            ['post_id'=>'2', 'tag'=> 'C++'],
            ['post_id'=>'1', 'tag'=> 'C++'],
            ['post_id'=>'3', 'tag'=> 'JAVA'],
            ['post_id'=>'2', 'tag'=> 'C#'],
            ['post_id'=>'3', 'tag'=> 'C++'],
            ['post_id'=>'3', 'tag'=> 'JS'],
            ['post_id'=>'2', 'tag'=> '.NET'],

        ]);
    }
}
