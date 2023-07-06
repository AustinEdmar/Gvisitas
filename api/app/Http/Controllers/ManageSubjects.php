<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManageSubjectResource;
use Illuminate\Http\Request;

class ManageSubjects extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        
        //retornar todas as todos que pertencem ao usuario logado
       // return auth()->user()->manage_subject;
       
       return ManageSubjectResource::collection(auth()->user()->manage_subject);
    }


}
