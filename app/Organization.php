<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	/**
     * Get the doctors for the organization.
     */
    public function doctors()
    {
        return $this->hasMany('Pastillero\Doctor');
    }

	/**
     * Get the patients for the organization.
     */
    public function patients()
    {
        return $this->hasMany('Pastillero\Patient');
    }

	/**
     * Get the products for the organization.
     */
    public function products()
    {
        return $this->hasMany('Pastillero\Doctor');
    }

    /**
     * Get the sku_products for the organization.
     */
    public function sku_products()
    {
        return $this->hasMany('Pastillero\Sku_product');
    }

    /**
     * Get the users for the organization.
     */
    public function users()
    {
        return $this->hasMany('Pastillero\User');
    }

    /**
     * Get the configs for the organization.
     */
    public function configs()
    {
        return $this->hasMany('Pastillero\Config');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'code_security',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'active', 'visible', 'enabled',
    ];

    protected $dates = ['deleted_at'];
}
