<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Sku_product extends Model
{
    /**
     * Get the organization record associated with the sku_product.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

    /**
     * Get the doctor record associated with the sku_product.
     */
    public function doctor()
    {
        return $this->belongsTo('Pastillero\Doctor');
    }


    /**
     * Get the product record associated with the sku_product.
     */
    public function product()
    {
        return $this->belongsTo('Pastillero\Product');
    }

    /**
     * Get the patient record associated with the sku_product.
     */
    public function patient()
    {
        return $this->belongsTo('Pastillero\Patient');
    }


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'active', 'visible', 'enabled','order', 'organization_id', 'doctor_id', 'product_id', 'patient_id',
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
