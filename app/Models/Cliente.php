<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $idCliente
 * @property $Nombre
 * @property $Apellido
 * @property $Direccion
 * @property $Cedula
 * @property $Correo
 * @property $Edad
 * @property $Telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @property Mascota[] $mascotas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'idCliente' => 'required',
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Direccion' => 'required',
		'Cedula' => 'required',
		'Correo' => 'required',
		'Edad' => 'required',
		'Telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente','Nombre','Apellido','Direccion','Cedula','Correo','Edad','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'idCliente', 'idCliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany('App\Models\Mascota', 'idCliente', 'idCliente');
    }
    

}
