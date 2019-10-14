<?php
namespace App\Services\SearchServices\Filters;
use Illuminate\Database\Eloquent\Builder;

interface Filterable
{
    /**
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value);
}