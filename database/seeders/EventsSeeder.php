<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['name' => 'nana',
            'address' => '3 avenue montaigne',
            'category_id' => '3',
            'duration' => '3 jours',
            'day' => 'vendredi',
            'user_id' => '3'],
            ['name' => 'mathieu sensei',
            'address' => '19 avenue charles de gaulle',
            'category_id' => '1',
            'duration' => '2 jours',
            'day' => 'samedi',
            'user_id' => '2'],
            ['name' => 'dylan fortnite',
            'address' => '78 avenue georges clemenceau',
            'category_id' => '2',
            'duration' => '1 jour',
            'day' => 'jeudi',
            'user_id' => '4'],
            ]);
    }
}
