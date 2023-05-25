<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    public function run()
    {
        $technologies = ["HTML", "CSS", "Bootstrap", "Js", "Vite", "VueJs", "php", "SQL", "Laravel"];

        foreach ($technologies as $technology) {

            $newTechnology = new Technology();
            
            $newTechnology->nome = $technology;
            $newTechnology->slug = Str::slug($technology, "-");
            $newTechnology->save();
        }
    }
}
