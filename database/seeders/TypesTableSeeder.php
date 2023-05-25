<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        $types = ["Front-end", "DB", "Back-end", "Approfondimeto"];

        foreach ($types as $type) {

            $newType = new Type();
            
            $newType->name = $type;
            $newType->slug = Str::slug($type, "-");
            $newType->save();
        }
    }
}
