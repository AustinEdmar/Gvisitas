<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* protected $fillable = [

        'document','image_document','number_document','date_emission'
    ]; */

    public function visitor()
    {
        return $this->hasMany(Visitor::class);
    }
}
