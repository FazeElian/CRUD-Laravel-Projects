<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $idCategoria
 * @property $nombreCategoria
 * @property $descripcionCategoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{

    static $rules = [
		'id' => '',
		'nombreCategoria' => 'required',
		'descripcionCategoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombreCategoria','descripcionCategoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'id', 'id');
    }


}
