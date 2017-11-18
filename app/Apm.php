<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Apm extends Model
{
    /**
     * Get the config that owns the organization.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

	/**
     * Get the doctors for the organization.
     */
    public function doctors()
    {
        return $this->hasMany('Pastillero\Doctor');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'description', 'active', 'visible', 'enabled', 'organization_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    protected $dates = ['deleted_at'];
}
