<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            'प्रदेश नं. १',
            'प्रदेश नं. २',
            'बागमती प्रदेश',
            'गण्डकी प्रदेश',
            'लुम्बिनी प्रदेश',
            'कर्णाली प्रदेश',
            'सुदूरपश्चिम प्रदेश'
        ];
        //provinces
        for($i=0; $i<7; $i++){
            DB::table('provinces')->insert([
                'name'=> $provinces[$i],
                'slug'=> Str::slug($provinces[$i], '-')
            ]);
        }
        
    }
}
