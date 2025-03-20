<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categoria_elec = new Category();
        $categoria_elec->name = "Electrodomestico";
        $categoria_elec->description = "Esta es la categoria de electrodomesticos";
        $categoria_elec->save();

        $categoria_2 = new Category();
        $categoria_2->name = "Ropa";
        $categoria_2->description = "Esta es la categoria de ropa";
        $categoria_2->save();
    }
}
