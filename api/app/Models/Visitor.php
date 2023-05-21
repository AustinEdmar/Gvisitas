<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    
    protected $fillable = [

        'name','birthday','image','affiliation','phone_number', 'document_id', 'doc_number', 'doc_emition', 'nacionality_id', 'gender_id'
    ];
    public function nacionality()
    {
       return $this->belongsTo(Nacionality::class, 'nacionality_id', 'id');

       // return $this->belongsTo(Nacionality::class);
    }

    public function gender()
    {
       // return $this->belongsTo(Nacionality::class, 'nacionality_id', 'id');

        return $this->belongsTo(Gender::class);
    }

    public function manage_subject()
    {
       // return $this->belongsTo(Nacionality::class, 'nacionality_id', 'id');

        return $this->hasMany(Manage_subject::class);
    }

    public function document()
    {
       // return $this->belongsTo(Nacionality::class, 'nacionality_id', 'id');

        return $this->belongsTo(Document::class);
    }
}
