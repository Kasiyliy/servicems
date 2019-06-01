<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $male = new \App\Gender();
        $male->name = 'male';
        $male->save();

        $female = new \App\Gender();
        $female->name = 'female';
        $female->save();
    }
}
