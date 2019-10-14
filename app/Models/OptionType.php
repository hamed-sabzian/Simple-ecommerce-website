<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\OptionValue;

class OptionType extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
    	return $this->belongsToMany(Product::class,'product_option_types');
    }

    public function optionValues()
    {
    	return $this->hasMany(OptionValue::class);
    }
}
