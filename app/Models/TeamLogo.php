<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLogo extends Model
{
    use HasFactory;
    protected $table = 'teams_logos';
    protected $fillable = [
        'name',
        'image',
        'schedule_id',
    ];
}
