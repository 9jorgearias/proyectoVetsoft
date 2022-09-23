<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleHistorium
 *
 * @property $idNotas
 * @property $Responsable
 * @property $Fecha
 * @property $Observaciones
 * @property $idHistoria
 * @property $created_at
 * @property $updated_at
 *
 * @property HistoriaClinica $historiaClinica
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleHistorium extends Model
{
    
    static $rules = [
		'idNotas' => 'required',
		'Responsable' => 'required',
		'Fecha' => 'required',
		'Observaciones' => 'required',
		'idHistoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idNotas','Responsable','Fecha','Observaciones','idHistoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historiaClinica()
    {
        return $this->hasOne('App\Models\HistoriaClinica', 'idHistoria', 'idHistoria');
    }
    

}
