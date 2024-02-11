<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MustWicket extends Model
{
    use HasFactory;
    protected $table = 'most_wicket';

    protected $fillable = [
        'pos',
        'player_name',
        'image',
        'team_name',
        'match_no',
        'inns',
        'over',
        'wicket',
        'eco',
        'avg',
        'four_w',
        'five_w',
        'bbi',
        'runs',
    ];
}
