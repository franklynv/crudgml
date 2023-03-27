<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Pais
 * @property $Direccion
 * @property $Celular
 * @property $NumDoc
 * @property $Email
 * @property $Perfils
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil $perfil
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Pais' => 'required',
		'Direccion' => 'required',
		'Celular' => 'required',
		'NumDoc' => 'required',
		'Email' => 'required',
		'Perfils' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Pais','Direccion','Celular','NumDoc','Email','Perfils'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil', 'id', 'Perfils');
    }
    

}
