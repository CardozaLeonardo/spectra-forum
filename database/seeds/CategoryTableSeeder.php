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
        $cat = new Category;
        /*$cat->name = 'Android';
        $cat->save();

        $cat->name = 'Apple';
        $cat->save();

        $cat->name = 'Microsoft';
        $cat->save(); */

        $cat->name = 'PHP';
        $cat->save();

       /* $cat->name = 'Python';
        $cat->save();

        $cat->name = 'Java';
        $cat->save();*/
    }
}
