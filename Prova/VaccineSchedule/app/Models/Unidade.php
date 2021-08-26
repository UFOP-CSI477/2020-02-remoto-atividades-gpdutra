<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nome
 * @property string $bairro
 * @property string $cidade
 * @property string $created_at
 * @property string $updated_at
 * @property Registro[] $registros
 */
class Unidade extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nome', 'bairro', 'cidade', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany('App\Registro');
    }
}
