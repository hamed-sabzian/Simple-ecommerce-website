<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\OptionValue;

class ProductVariant extends Model
{
    protected $fillable = ['product_id','price'];

    public function product(){
    	return $this->belongsTo(Product::class);
    }

    public function optionValues(){
    	return $this->belongsToMany(OptionValue::class,'option_value_variants');
    }
}
