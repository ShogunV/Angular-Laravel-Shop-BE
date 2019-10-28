<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
        	'name' => 'Men',
        ]);
        $category->save();
        $category = new Category([
        	'name' => 'Women',
        ]);
        $category->save();
        $category = new Category([
        	'name' => 'Children',
        ]);
        $category->save();
    }
}
