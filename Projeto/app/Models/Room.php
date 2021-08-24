<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idroom
 * @property string $roomName
 */
class Room extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'room';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idroom';

    /**
     * @var array
     */
    protected $fillable = ['roomName'];
    public $timestamps = false;

}
