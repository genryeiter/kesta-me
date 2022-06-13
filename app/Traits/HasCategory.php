<?php

namespace App\Traits;

use App\Models\Category;

trait HasCategory
{

    /**
     * The categories that belong to the model.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
