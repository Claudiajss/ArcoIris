<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void       
    {
        
        $category = new Category;
        $category->name = 'Mujer';
        $category->description = 'monturas de la mejor calidad, colores surtidos y de moda, ultimas colecciones';
        $category->save();

        $category = new Category;
        $category->name = 'Hombre';
        $category->description = 'monturas de la mejor calidad, colores surtidos y de moda, ultimas colecciones';
        $category->save();

        $category = new Category;
        $category->name = 'Niño';
        $category->description = 'monturas de la mejor calidad, colores surtidos y de moda, ultimas colecciones';
        $category->save();

        $category = new Category;
        $category->name = 'Niña';
        $category->description = 'monturas de la mejor calidad, colores surtidos y de moda, ultimas colecciones';
        $category->save();




        
    }   
}
