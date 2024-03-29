<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MostRun extends Model
{
    use HasFactory;
    protected $table = 'most_runs';
    protected $fillable = [
        'pos',
        'player_name',
        'team',
        'match',
        'image',
        'inns',
        'runs',
        'sr',
        'avg',
        'hight',
        'fifty',
        'hundred',
        'four',
        'six',
    ];
}
