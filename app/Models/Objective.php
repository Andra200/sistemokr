<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;

    protected $table='objectives';
    protected $fillable = [
        'team_id',
        'objective_name',
        'objective_details',
        'objective_finish',
        'progress'

    ];

    public function team()
    {
        return $this->belongsTo(Team::class,'team_id','id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class,'objective_id','id');
    }

    public function keyresults()
    {
        return $this->hasMany(Keyresult::class,'objective_id','id');
    }

    public function deadlines()
    {
        return $this->belongsToMany(Objective::class,'deadlines','keyresult_id','objective_id')
        ->withPivot(
            'date',
            'until'
        )
        ->withTimestamps();
    }
}
