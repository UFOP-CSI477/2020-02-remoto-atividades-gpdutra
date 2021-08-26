<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nome
 * @property string $bairro
 * @property string $cidade
 * @property string $data_nascimento
 * @property string $created_at
 * @property string $updated_at
 */
class Pessoas extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nome', 'bairro', 'cidade', 'data_nascimento', 'created_at', 'updated_at'];

}
