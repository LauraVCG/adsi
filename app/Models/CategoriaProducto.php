<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaProducto
 *
 * @property $ID_CATEGORIA
 * @property $nombre
 * @property $updated_at
 * @property $created_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CategoriaProducto extends Model
{
    
    static $rules = [
		'ID_CATEGORIA' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_CATEGORIA','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\
     */
    // public function ()
    // {
    //     return $this->('App\Models\Producto', 'ID_CATEGORIA', 'ID_CATEGORIA');
    // }

    public function producto()
    {
        return $this->belongsTo(App\Models\Producto::class);
    }
    

}
