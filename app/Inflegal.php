<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inflegal
 *
 * @property $id
 * @property $id_restaurantes
 * @property $regimen_tributario
 * @property $tipo_persona
 * @property $tipo_documento
 * @property $numero_documento
 * @property $razon_social
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inflegal extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'regimen_tributario' => 'required',
		'tipo_persona' => 'required',
		'tipo_documento' => 'required',
		'numero_documento' => 'required',
		'razon_social' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','regimen_tributario','tipo_persona','tipo_documento','numero_documento','razon_social'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
