<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Redessociale
 *
 * @property $id
 * @property $id_restaurantes
 * @property $red_social
 * @property $usuario_red_social
 * @property $enlace_red_social
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Redessociale extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'red_social' => 'required',
		'usuario_red_social' => 'required',
		'enlace_red_social' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','red_social','usuario_red_social','enlace_red_social'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
