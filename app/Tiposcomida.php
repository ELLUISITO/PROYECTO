<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiposcomida
 *
 * @property $id
 * @property $id_restaurantes
 * @property $tipos_comida
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiposcomida extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'tipos_comida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','tipos_comida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
