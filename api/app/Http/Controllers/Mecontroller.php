<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeUpdateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\models\User;
use App\Services\UserService;

class Mecontroller extends Controller
{
     public function __construct()
    {
        //aqui ele bloqueia tudo, podemos colocar except ou only ->only();
        $this->middleware('auth:api'); 
    } 

    public function index()
    {

        return new UserResource( auth()->user());
    }

    public function update(MeUpdateRequest $request)
    {

        $input = $request->validated();

        $user = (new UserService())->update(auth()->user(), $input);

        return new UserResource($user);

    }
}

