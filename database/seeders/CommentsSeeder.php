<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content' => 'Bonsoir',
                'user_id' => '1',
                'created_at' => now()
            ],
            [
                'content' => 'Felicitation',
                'user_id' => '2',
                'created_at' => now()
            ],
            [
                'content' => 'Bonjour',
                'user_id' => '3',
                'created_at' => now()
            ]
            ]);
    }
}
