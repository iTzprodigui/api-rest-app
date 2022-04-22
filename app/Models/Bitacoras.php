<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bitacora
 *
 * @property $id
 * @property $idDocente
 * @property $idAlumno
 * @property $fecha
 * @property $anotacion
 *
 * @property Alumno $alumno
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bitacoras extends Model
{

    static $rules = [
		'idDocente' => 'required',
		'idAlumno' => 'required',
		'fecha' => 'required',
		'anotacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDocente','idAlumno','fecha','anotacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'idDocente');
    }


}
