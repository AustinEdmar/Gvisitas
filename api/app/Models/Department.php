<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [

        'name','direction_id','extention', 'group_id','floor_id'
    ];

    public function user()
    {

       return $this->hasMany(User::class);

    }

    public function section()
    {

       return $this->hasMany(Section::class);

    }


    public function direction()
    {

        return $this->belongsTo(Direction::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function manage_subjects()
    {
        return $this->hasMany(Manage_subject::class);
    }
}
