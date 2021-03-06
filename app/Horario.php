<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $id_restaurantes
 * @property $dia_semana_LV
 * @property $hora_apertura_LV
 * @property $hora_cierre_LV
 * @property $dia_semana_S
 * @property $hora_apertura_S
 * @property $hora_cierre_S
 * @property $dia_semana_DF
 * @property $hora_apertura_DF
 * @property $hora_cierre_DF
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'dia_semana_LV' => 'required',
		'hora_apertura_LV' => 'required',
		'hora_cierre_LV' => 'required',
		'dia_semana_S' => 'required',
		'hora_apertura_S' => 'required',
		'hora_cierre_S' => 'required',
		'dia_semana_DF' => 'required',
		'hora_apertura_DF' => 'required',
		'hora_cierre_DF' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','dia_semana_LV','hora_apertura_LV','hora_cierre_LV','dia_semana_S','hora_apertura_S','hora_cierre_S','dia_semana_DF','hora_apertura_DF','hora_cierre_DF'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
