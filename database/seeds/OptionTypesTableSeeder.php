<?php

use Illuminate\Database\Seeder;

class OptionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\OptionType::class)->create(['name'=>'color'])->each(function ($optionType){
            $optionType->optionValues()->createMany([
            ['name' => 'red'],
            ['name' => 'blue'],
            ['name' => 'green'],
            ]);
        });

        factory(App\Models\OptionType::class)->create(['name'=>'size'])->each(function ($optionType){
            if ($optionType->name === 'size') {
                $optionType->optionValues()->createMany([
                    ['name' => 'small'],
                    ['name' => 'medium'],
                    ['name' => 'larg'],
                    ]);
            }
        });
    }
}
