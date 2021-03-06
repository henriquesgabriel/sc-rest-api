<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = File::get("database/data/products.json");

        $data = json_decode($jsonData);

        $products = $data->products;

        foreach ($products as $product) {
            Category::create(array(
            'name' => $product->category,
          ));
        }
    }
}
