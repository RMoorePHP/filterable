<?php

namespace Tests\RMoore\Filterable;

use Illuminate\Database\Eloquent\Builder;
use RMoore\Filterable\Filters;

class PostFilters extends Filters
{
    public function publicTest(Builder $query, $value) : Builder
    {
        return $query->where('title', 'like', "%$value%");
    }

    protected function protectedTest(Builder $query, $value) : Builder
    {
        return $query->where('title', 'like', "%$value%");
    }

    private function privateTest(Builder $query, $value) : Builder
    {
        return $query->where('title', 'like', "%$value%");
    }
}
