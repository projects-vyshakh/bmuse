<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'John', 'email'=> 'john@example.com', 'password'=>Hash::make('admin123')],
            ['name'=>'Mark', 'email'=> 'mark@example.com', 'password'=>Hash::make('admin123')],
            ['name'=>'Bill', 'email'=> 'bill@example.com', 'password'=>Hash::make('admin123')],
        ]);
    }
}
