<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
