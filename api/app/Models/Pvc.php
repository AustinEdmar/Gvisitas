<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pvc extends Model
{
    use HasFactory;

    protected $fillable = [

        'number_pvc'
    ];

    public function manage_subject()
    {
        return $this->hasMany(Manage_subject::class);
    }
}
