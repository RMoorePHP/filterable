<?php

namespace Tests\RMoore\Filterable;


use Illuminate\Database\Eloquent\Model;
use RMoore\Filterable\Filterable;

class Post extends Model
{
    use Filterable;

    public function filters()
    {
        return new PostFilters();
    }
}
