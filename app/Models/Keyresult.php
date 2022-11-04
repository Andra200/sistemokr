<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyresult extends Model
{
    use HasFactory;

    protected $table='keyresults';
    protected $fillable=
    [
        'objective_id',
        'objective_name',
        'objective_details',
        'objective_finish',
        'progress'
    ];

    public function objective()
    {
        return $this->belongsTo(Objective::class,'objective_id','id');
    }

    public function deadlines()
    {
        return $this->belongsToMany(Objective::class,'deadlines','objective_id','keyresult_id')
        ->withPivot(
            'date',
            'until'
        )
        ->withTimestamps();
    }
}
