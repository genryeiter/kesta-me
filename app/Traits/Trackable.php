<?php

namespace App\Traits;

use App\Models\User;

trait Trackable
{
    public static function bootTrackable()
    {
        static::creating(function ($model) {
            $hasColumns = $model->getConnection()->getSchemaBuilder()->hasColumn($model->getTable(), 'created_by');
            if ($hasColumns && auth()->check()) {
                $model->created_by = auth()->id();
                $model->updated_by = auth()->id();
            }
        });

        static::updating(function ($model) {
            $hasColumns = $model->getConnection()->getSchemaBuilder()->hasColumn($model->getTable(), 'updated_by');
            if ($hasColumns && auth()->check()) {
                $model->updated_by = auth()->id();
            }
        });

        static::deleting(function ($model) {
            $hasColumns = $model->getConnection()->getSchemaBuilder()->hasColumn($model->getTable(), 'deleted_by');
            if ($hasColumns && auth()->check()) {
                $model->deleted_by = auth()->id();
                $model->save();
            }
        });
    }
    
    /**
     * Returns creator of the model.
     *
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}