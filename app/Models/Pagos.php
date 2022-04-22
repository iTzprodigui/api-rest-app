<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $idAlumno
 * @property $fecha
 * @property $concepto
 * @property $pago
 *
 * @property Alumno $alumno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pagos extends Model
{

    static $rules = [
		'idAlumno' => 'required',
		'fecha' => 'required',
		'concepto' => 'required',
		'pago' => 'required',
    ];

    protected $perPage = 20;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAlumno','fecha','concepto','pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'idAlumno');
    }


}
