<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthEmailRequest;
use App\Http\Requests\AuthForgotPasswordRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use App\Http\Requests\AuthResetPasswordRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    private $authService;
    public function __construct(AuthService $authService)
    {
       $this->authService = $authService; 
    }

    public function login(AuthLoginRequest $request )
     {
        $input = $request->validated();
        
        $token = $this->authService->login($input['email'], $input['password']);

        return (new UserResource(auth()->user()))->additional($token);
    }

    public function register(AuthRegisterRequest $request)
    {
     // dd($request->all());

     

      $input = $request->validated();

     $user = $this->authService->register($input);

     return new UserResource($user);
    }


    public function verifyEmail(AuthEmailRequest $request)
    {
      
      $input = $request->validated();

      $user = $this->authService->verifyEmail($input['token']);

      return new UserResource($user);

    }

    public function forgotPassword(AuthForgotPasswordRequest $request)
    {
      $input = $request->validated();

      return $this->authService->forgotPassword($input['email']);
    }

    public function resetPassword(AuthResetPasswordRequest $request)
    {
      $input = $request->validated();
      
      $this->authService->resetPassword($input['email'], $input['password'], $input['token']);
    }

    

    /* 
    public function register(AuthRegisterRequest $request)
    {

      $input = $request->validated();

     $user = $this->authService->register(
     $input['first_name'], 
     $input['last_name'],
     $input['email'], 
     $input['birthday'], 
     $input['phone_number'], 
     $input['police_rank_id'], 
     $input['level_id'], 
     $input['direction_id'] ?? null,
     $input['department_id'] ?? null,
     $input['section_id'] ?? null,
     $input['gender_id'], 
     $input['status_id'], 
    
     $input['password']);

     return new UserResource($user);
    }
    
     */

}
