<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table='tasks';
    protected $fillable=[
        'objective_id',
        'task_name',
        'task_finish',
        'progress'
    ];

    public function objective()
    {
        return $this->belongsTo( Objective::class,'objective_id','id');
    }

    public function deadlines()
    {
        return $this->belongsToMany(Objective::class,'deadlines','task_id','objective_id')
        ->withPivot(
            'date',
            'until'
        )
        -withTimestamps();
    }

}
