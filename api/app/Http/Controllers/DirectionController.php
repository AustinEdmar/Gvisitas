<?php

namespace App\Http\Controllers;

use App\Http\Resources\DirectionResource;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectionController extends Controller
{
  /*
  public function __construct()
  {
      $this->middleware('auth:api');
  }*/
  
    public function index()
    {

      //  dd('cheguei');
        //retornar todas as todos que pertencem ao usuario logado
        $direction = Direction::get();
        
        return DirectionResource::collection($direction);

       //return DirectionResource::collection(Auth::user()->direction);
    }
}
