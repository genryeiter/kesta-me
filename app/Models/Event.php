<?php

namespace App\Models;

use App\Traits\HasCategory;
use App\Traits\HasSdg;
use App\Traits\Trackable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes, HasCategory, Trackable, HasSdg, Trackable;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime',
        'finish_date' => 'datetime'
    ];
}
