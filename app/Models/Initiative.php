<?php

namespace App\Models;

use App\Traits\HasCategory;
use App\Traits\HasSdg;
use App\Traits\Trackable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Initiative extends Model
{
    use HasFactory, SoftDeletes, HasCategory, HasSdg, Trackable;
}
