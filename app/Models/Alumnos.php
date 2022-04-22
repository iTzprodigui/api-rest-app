<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $Nombres
 * @property $ApellidoPa
 * @property $ApellidoMa
 * @property $Matricula
 * @property $Contrasena
 * @property $Grado
 * @property $Grupo
 * @property $Ciclo_Escolar
 * @property $Foto
 *
 * @property Bitacora[] $bitacoras
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumnos extends Model
{

    static $rules = [
		'Nombres' => 'required',
		'ApellidoPa' => 'required',
		'ApellidoMa' => 'required',
		'Matricula' => 'required',
		'Contrasena' => 'required',
		'Grado' => 'required',
		'Grupo' => 'required',
		'Ciclo_Escolar' => 'required',
		'Foto' => 'required',
    ];

    protected $perPage = 20;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','ApellidoPa','ApellidoMa','Matricula','Contrasena','Grado','Grupo','Ciclo_Escolar','Foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bitacoras()
    {
        return $this->hasMany('App\Models\Bitacora', 'idAlumno', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'idAlumno', 'id');
    }


}
