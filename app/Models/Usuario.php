<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombres
 * @property $apellido
 * @property $numero_documento
 * @property $correo
 * @property $contraseña
 *
 * @property Administrador[] $administradors
 * @property Cliente[] $clientes
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellido' => 'required',
		'numero_documento' => 'required',
		'correo' => 'required',
		'contraseña' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellido','numero_documento','correo','contraseña'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administradors()
    {
        return $this->hasMany('App\Models\Administrador', 'ID_USUARIOS', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'ID_USUARIOS', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'ID_USUARIOS', 'id');
    }
    

}
