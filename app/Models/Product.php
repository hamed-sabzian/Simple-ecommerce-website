<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OptionType;
use App\Models\ProductVariant;

class Product extends Model
{
    protected $fillable = ['name','description'];

    public function optionTypes()
    {
        return $this->belongsToMany('OptionType','product_option_types');
    }

    public function productVariants(){
    	return $this->hasMany('ProductVariant');
    }
}
