<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    protected $fillable = [

        'name'
];


    public function manage_subject()
    {
        return $this->hasMany(Manage_subject::class);
    }
}
