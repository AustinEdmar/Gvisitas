<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoliceRankResource;
use App\Models\Police_rank;
use Illuminate\Http\Request;

class PoliceRankController extends Controller
{
    public function index()
    {

      //  dd('cheguei');
        //retornar todas as todos que pertencem ao usuario logado
        $police = Police_rank::get();
        return PoliceRankResource::collection($police);
        //return new PoliceRankResource($police);

    }
}
