<?php
namespace App\Services\SearchServices\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Services\SearchServices\Filters\Filterable;

class Price implements Filterable
{
    /**
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->join('product_variants', 'products.id', '=', 'product_variants.product_id')->where('price', $value);
    }
}