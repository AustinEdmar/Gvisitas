<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $guarded=[];

    //pra permitir enviar ou manipular varios arrays na model
    protected $casts = [
        'name' =>'array',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

}
