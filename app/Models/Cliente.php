<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $telefono
 * @property $direccion
 * @property $id_usuarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Adopcion[] $adopcions
 * @property Compra[] $compras
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'telefono' => 'required',
		'direccion' => 'required',
		'id_usuarios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['telefono','direccion','id_usuarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adopcions()
    {
        return $this->hasMany('App\Models\Adopcion', 'ID_CLIENTES', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'ID_CLIENTES', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'ID_USUARIOS');
    }
    

}
