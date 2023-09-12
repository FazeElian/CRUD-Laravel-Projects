<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $idCategoria
 * @property $nombreLibro
 * @property $autorLibro
 * @property $descripcionLibro
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{

    static $rules = [
		'id' => '',
		'idCategoria' => '',
		'nombreLibro' => 'required',
		'autorLibro' => 'required',
		'descripcionLibro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','idCategoria','nombreLibro','autorLibro','descripcionLibro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'idCategoria');
    }


}
