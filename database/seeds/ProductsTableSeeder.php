<?php

use App\Models\OptionType;
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

            $optionTypesID = OptionType::where('name','color')->orWhere('name','size')->pluck('id')->toArray();

            $product->optionTypes()->attach($optionTypesID);

            $product->productVariants()->saveMany(
                [
                    factory(App\Models\ProductVariant::class)->make(['price'=>300000]),
            
                    factory(App\Models\ProductVariant::class)->make(['price'=>350000])
                
                ]);

        });

    }


}
