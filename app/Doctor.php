<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * Get the organization record associated with the Doctor.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

    /**
     * Get the sku_products for the doctor.
     */
    public function sku_products()
    {
        return $this->hasMany('Pastillero\Sku_product');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'last_name', 'email', 'mobile', 'active', 'visible', 'enabled',
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
