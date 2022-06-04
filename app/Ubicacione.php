<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacione
 *
 * @property $id
 * @property $id_restaurantes
 * @property $nombre_sede
 * @property $departamento
 * @property $municipio
 * @property $codigo_postal
 * @property $barrio
 * @property $direccion
 * @property $anexo
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ubicacione extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'nombre_sede' => 'required',
		'departamento' => 'required',
		'municipio' => 'required',
		'codigo_postal' => 'required',
		'barrio' => 'required',
		'direccion' => 'required',
		'anexo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','nombre_sede','departamento','municipio','codigo_postal','barrio','direccion','anexo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
