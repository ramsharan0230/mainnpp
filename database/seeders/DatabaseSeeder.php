<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(UsersTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(SectionTitleTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);
//        $this->call(TechnologiesTableSeeder::class);
        $this->call(ProvinceTableSeeder ::class);
        \App\Models\User::factory(50)->create();

    }

}
