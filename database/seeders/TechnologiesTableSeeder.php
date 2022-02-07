<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->insert([
            [
                'title'=>'Angular',
                'cat_id'=>'1',
                'status'=>'active',
            ],
            [
                'title'=>'React Js',
                'cat_id'=>'1',
                'status'=>'active',
            ],
            [
                'title'=>'Vue JS',
                'cat_id'=>'1',
                'status'=>'active',
            ],
            [
                'title'=>'Js',
                'cat_id'=>'1',
                'status'=>'active',
            ],
            [
                'title'=>'Laravel',
                'cat_id'=>'2',
                'status'=>'active',
            ],
            [
                'title'=>'Node Js',
                'cat_id'=>'2',
                'status'=>'active',
            ],
        ]);
    }
}
