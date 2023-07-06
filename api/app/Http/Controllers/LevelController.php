<?php

namespace App\Http\Controllers;

use App\Http\Resources\LevelResource;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {

      //  dd('cheguei');
        //retornar todas as todos que pertencem ao usuario logado
        $level = Level::get();
        return LevelResource::collection($level);
        //return new PoliceRankResource($police);

    }
}
