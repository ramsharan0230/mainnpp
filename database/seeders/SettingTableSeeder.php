<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //setting
        DB::table('settings')->insert([
            'title'=>'Samata School',
            'meta_description'=>"Samata School",
            'meta_keywords'=>'samata school',
            'footer'=>'samataschool',
            'favicon'=>'',
            'logo'=>'backend/assets/images/logo.svg',
            'email'=>'info@samataschool.com',
            'phone'=>'02075179521',
            'address'=>' Banasthali, Kathmandu',
        ]);
    }
}
