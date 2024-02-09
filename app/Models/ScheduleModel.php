<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ScheduleModel extends Model
{
    use HasFactory;

    protected $table = 'schedule';
    protected $fillable = [
        'match_no',
        'stadium',
        'division',
        'image1',
        'image2',
        'team1',
        'team2',
        'date',
        'time',
    ];
    public function images(): HasOne
    {
        return $this->hasOne(TeamLogo::class, 'schedule_id', 'id');
    }
}
