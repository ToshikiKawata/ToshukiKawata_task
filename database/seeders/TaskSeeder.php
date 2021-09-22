<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => 'test',
                'body' => 'testの内容です'
            ],
            [
                'title' => 'test2',
                'body' => 'test2の内容です'
            ],
        ];
        DB::table('tasks')->insert($param);
    }
}
