<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facture
 *
 * @property $id
 * @property $name
 * @property $product_id
 * @property $amountProduct
 * @property $priceProduct
 * @property $totalPriceProduct
 * @property $totalCost
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facture extends Model
{
    
    static $rules = [
		'name' => 'required',
		'product_id' => 'required',
		'amountProduct' => 'required',
		'priceProduct' => 'required',
		'totalPriceProduct' => 'required',
		'totalCost' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','product_id','amountProduct','priceProduct','totalPriceProduct','totalCost'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    

}
