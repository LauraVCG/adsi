<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Administrador  extends Model{
    use Notifiable;
    
    protected $table = 'administrador';

    protected $fillable =  [
        'id_administrador',
        'telefono',
        'id_usuarios'
    ];

    protected $primaryKey = "id_administrador";
}
