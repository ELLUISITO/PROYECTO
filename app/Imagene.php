<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagene
 *
 * @property $id
 * @property $id_restaurantes
 * @property $res_ruta
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagene extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'res_ruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','res_ruta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
