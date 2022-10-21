<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;

    protected $table='objective';
    protected $fillable = [
        'team_id',
        'objective_name',
        'objective_details',
        'objective_finish',
        'progress'
    ];
}
