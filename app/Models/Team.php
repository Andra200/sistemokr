<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table='teams';
    protected $fillable= [
        'user_id',
        'name'
    ];

    public function user(){
        return $this->belongsTo( User::class,'user_id','id' );
    }
    public function  objectives(){
        return $this->hasMany( Objective::class,'team_id','id' );
    }
}
