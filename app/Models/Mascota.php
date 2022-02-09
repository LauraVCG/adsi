<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $id
 * @property $foto
 * @property $especie
 * @property $nombre
 * @property $edad
 * @property $sexo
 * @property $vacunada
 * @property $desparasitada
 * @property $esterilizada
 * @property $descripcion
 * @property $estado
 * @property $updated_at
 * @property $created_at
 *
 * @property Adopcion[] $adopcions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'especie' => 'required',
		'nombre' => 'required',
		'edad' => 'required',
		'sexo' => 'required',
		'vacunada' => 'required',
		'desparasitada' => 'required',
		'esterilizada' => 'required',
		'descripcion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['foto','especie','nombre','edad','sexo','vacunada','desparasitada','esterilizada','descripcion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adopcions()
    {
        return $this->hasMany('App\Models\Adopcion', 'ID_MASCOTAS', 'id');
    }
    

}
