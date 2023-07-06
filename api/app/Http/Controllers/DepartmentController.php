<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {

      //  dd('cheguei');
        //retornar todas as todos que pertencem ao usuario logado
        $department = Department::get();
        
        return DepartmentResource::collection($department);
    }
}
