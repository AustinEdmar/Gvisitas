<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionResource;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {

      //  dd('cheguei');
        //retornar todas as todos que pertencem ao usuario logado
        $section = Section::get();
        
        return SectionResource::collection($section);
    }
}
