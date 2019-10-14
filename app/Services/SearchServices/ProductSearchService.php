<?php

namespace App\Services\SearchServices;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProductSearchService
{
    public function applyFilter(Request $filters)
    {
        $query = $this->applyFiltersFromRequest($filters, (new Product())->newQuery());

        return $query->paginate(6);
    }
    
    //Apply filters for parameters in search
    private function applyFiltersFromRequest(Request $request, Builder $query)
    {
        foreach ($request->all() as $filterName => $value) {

            if (!empty($value)) {
                
                $filterClass = $this->getFilterClass($filterName);
                if (class_exists($filterClass)) {
                    $query = $filterClass::apply($query, $value);
                }
            }

        }
        return $query;
    }
    
    private function getFilterClass($name)
    {
        return __NAMESPACE__ . '\\Filters\\' . studly_case($name);
    }

}