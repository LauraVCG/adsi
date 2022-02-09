<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $foto
 * @property $id_categoria
 * @property $nombre
 * @property $cantidad
 * @property $precio
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriaProducto $categoriaProducto
 * @property CompraProducto[] $compraProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['foto','id_categoria','nombre','cantidad','precio','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function categoriaProducto()
    // {
    //     return $this->hasOne('App\Models\CategoriaProducto', 'ID_CATEGORIA', 'id_categoria');
    // }

    public function categoriaProducto()
    {
        return $this->hasMany(App\Models\CategoriaProducto::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compraProductos()
    {
        return $this->hasMany('App\Models\CompraProducto', 'ID_PRODUCTOS', 'id');
    }
    

}
