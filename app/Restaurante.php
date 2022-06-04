<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurante
 *
 * @property $id
 * @property $id_usuarios
 * @property $nombre_restauarante
 * @property $descripcion
 * @property $telefono
 * @property $pagina_web
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restaurante extends Model
{
    
    static $rules = [
		'id_usuarios' => 'required',
		'nombre_restauarante' => 'required',
		'descripcion' => 'required',
		'telefono' => 'required',
		'pagina_web' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuarios','nombre_restauarante','descripcion','telefono','pagina_web'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_usuarios');
    }
    

}
