<?php

namespace Pastillero;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the organization record associated with the product.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

    /**
     * Get the sku_products for the product.
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
        'code', 'description', 'dosage','active', 'visible', 'enabled','order',
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
