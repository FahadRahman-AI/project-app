<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShotList extends Model
{
    protected $fillable = [
        'project_id',
        'shot_number',
        'description',
        'angle',
        'completed',
        'notes',
    ];
    //
}
