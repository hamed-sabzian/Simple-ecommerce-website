<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class, 45)->create()->each(function ($product) {
        	$optionTypes = [];
        	$optionTypes[] = factory(App\Models\OptionType::class)->create(['name'=>'color'])->id;
        	$optionTypes[] = factory(App\Models\OptionType::class)->create(['name'=>'size'])->id;
    	    $product->optionTypes()->attach($optionTypesID);
    	    $product->productVariants()->save(factory(App\Post::class)->make());
    	});
    }
}
