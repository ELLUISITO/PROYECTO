<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Replegal
 *
 * @property $id
 * @property $id_restaurantes
 * @property $nombre
 * @property $apellido
 * @property $tipo_documento
 * @property $numero_documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Replegal extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'tipo_documento' => 'required',
		'numero_documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','nombre','apellido','tipo_documento','numero_documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
