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
}
