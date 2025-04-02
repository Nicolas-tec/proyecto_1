<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gtarea
 *
 * @property $id_tarea
 * @property $D_tarea
 * @property $Estatus
 * @property $F_publicasion
 * @property $Comentarios
 * @property $usuario
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gtarea extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_tarea', 'D_tarea', 'Estatus', 'F_publicasion', 'Comentarios', 'usuario'];


}
