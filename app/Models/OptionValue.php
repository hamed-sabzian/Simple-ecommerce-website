<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OptionType;
use App\Models\ProductVariant;

class OptionValue extends Model
{
    protected $fillable = ['name'];

    public function optionType(){
    	return $this->belongsTo(OptionType::class);
    }

    public function productVariants(){
    	return $this->belongsToMany(ProductVariant::class,'option_value_variants');
    }
}
