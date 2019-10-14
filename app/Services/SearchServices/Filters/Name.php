<?php
namespace App\Services\SearchServices\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Services\SearchServices\Filters\Filterable;

class Name implements Filterable
{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('name', $value);
    }
}