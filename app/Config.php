<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    /**
     * Get the config that owns the organization.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }
}
