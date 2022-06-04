<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiposocasione
 *
 * @property $id
 * @property $id_restaurantes
 * @property $tipo_ocasion
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante $restaurante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiposocasione extends Model
{
    
    static $rules = [
		'id_restaurantes' => 'required',
		'tipo_ocasion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_restaurantes','tipo_ocasion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurante()
    {
        return $this->hasOne('App\Restaurante', 'id', 'id_restaurantes');
    }
    

}
