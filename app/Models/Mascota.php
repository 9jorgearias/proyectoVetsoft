<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $idMascota
 * @property $Nombre
 * @property $Raza
 * @property $Color
 * @property $Peso
 * @property $Especie
 * @property $Edad
 * @property $Sexo
 * @property $idCliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property HistoriaClinica[] $historiaClinicas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'idMascota' => 'required',
		'Nombre' => 'required',
		'Raza' => 'required',
		'Color' => 'required',
		'Peso' => 'required',
		'Especie' => 'required',
		'Edad' => 'required',
		'Sexo' => 'required',
		'idCliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMascota','Nombre','Raza','Color','Peso','Especie','Edad','Sexo','idCliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'idCliente', 'idCliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historiaClinicas()
    {
        return $this->hasMany('App\Models\HistoriaClinica', 'idMascota', 'idMascota');
    }
    

}
