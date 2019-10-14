<?php

use App\Models\OptionValue;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class VariantValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productVariants = ProductVariant::all();

        foreach ($productVariants as $productVariant) {
            $optionTypesID = $productVariant->product->optionTypes->pluck('id');
            $optionValuesID = [];
            foreach ($optionTypesID as $optionTypeID) {
                $optionValuesID[] = OptionValue::where('option_type_id',$optionTypeID)->first()->id;
            }
            $productVariant->optionValues()->attach($optionValuesID);
        }
    }
}
