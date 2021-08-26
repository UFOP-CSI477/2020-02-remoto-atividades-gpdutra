<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $pessoa_id
 * @property int $unidade_id
 * @property int $vacina_id
 * @property string $dose
 * @property string $data
 * @property string $created_at
 * @property string $updated_at
 * @property Pessoa $pessoa
 * @property Unidade $unidade
 * @property Vacina $vacina
 */
class Registro extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['pessoa_id', 'unidade_id', 'vacina_id', 'dose', 'data', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unidade()
    {
        return $this->belongsTo('App\Models\Unidade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vacina()
    {
        return $this->belongsTo('App\Models\Vacina');
    }
}
