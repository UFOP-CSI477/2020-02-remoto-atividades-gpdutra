<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idroom
 * @property int $idSchedule
 * @property string $dateSchedule
 * @property int $id_user
 * @property string $objective
 * @property string $timeSchedule
 * @property Room $room
 */
class RoomSchedule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'roomschedule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idSchedule';

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['idroom', 'dateSchedule', 'id_user', 'objective', 'timeSchedule'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo('App\Room', 'idroom', 'idroom');
    }
}
