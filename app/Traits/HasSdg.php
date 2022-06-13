<?php

namespace App\Traits;

use App\Models\Sdg;

trait HasSdg
{

    /**
     * The sdgs that belong to the model.
     */
    public function sdgs()
    {
        return $this->belongsToMany(Sdg::class);
    }
}
