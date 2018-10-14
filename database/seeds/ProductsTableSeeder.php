<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factory(App\Product::class,5)->create();
    }
}
