<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyresult extends Model
{
    use HasFactory;

    protected $table='keyresults';
    protected $fillable=[
        'objective_id',
        'objective_name',
        'objective_details',
        'objective_finish',
        'progress'
    ];
}
