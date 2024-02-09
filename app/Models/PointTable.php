<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointTable extends Model
{
    use HasFactory;
    protected $table = 'point_tables';
    protected $fillable = [
        'team_no',
        'team_name',
        'team_logo',
        'match',
        'win',
        'los',
        'nrr',
        'point',
    ];
}
