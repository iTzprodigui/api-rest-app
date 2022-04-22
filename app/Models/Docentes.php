<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombres
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $matricula
 *
 * @property Bitacora[] $bitacoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docentes extends Model
{

    static $rules = [
		'nombres' => 'required',
		'apellido_paterno' => 'required',
		'apellido_materno' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellido_paterno','apellido_materno','matricula'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bitacoras()
    {
        return $this->hasMany('App\Models\Bitacora', 'idDocente', 'id');
    }


}
