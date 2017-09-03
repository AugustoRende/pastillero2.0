<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * Get the organization record associated with the patient.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

    /**
     * Get the doctor record associated with the patient.
     */
    public function doctor()
    {
        return $this->belongsTo('Pastillero\Doctor');
    }

    /**
     * Get the sku_products for the patient.
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
        'username', 'password', 'name', 'last_name', 'birth', 'pathology', 'active', 'visible', 'enabled', 'organization_id','doctor_id',
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
