<?php

namespace App\Services;

use App\Events\UserRegistered;
use App\Exceptions\LoginInvalidException;
use App\Exceptions\UserHasBeenTaken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthService 
{
    public function login(string $email, string $password)
    {
       $login = [
        'email' => $email,
        'password' => $password,
       ];

       if(!$token = auth()->attempt($login)){

        throw new LoginInvalidException();
       }

       return [
            'access_token' => $token,
            'token_type' => 'Bearer',
       ];
    }
    public function register(string $firstName, 
    string $lastName, 
    string $email, 
    string $birthday, 
    string $phone_number, 
    string $police_rank_id, 
    string $level_id, 
    string $direction_id, 
    string $department_id, 
    string $section_id, 
    string $gender_id, 
    string $status_id, 
    string $password)
    {

       //dd(Str::random(32));

        $user = User::where('email', $email)->exists();
        
        if(!empty($user)){
            throw new UserHasBeenTaken();
        }
      
       

        $userPassword = bcrypt($password ?? Str::random(10));
        
        $user = User::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'birthday' => $birthday,
            'confirmation_token' =>  Str::random(32),//ira gerar uma string pro token
            'phone_number' => $phone_number,
            'police_rank_id' => $police_rank_id,
            'level_id' => $level_id,
            'direction_id' => $direction_id,
            'department_id' => $department_id,
            'section_id' => $section_id,
            'gender_id' => $gender_id,
            'status_id' => $status_id,
            'password' => $userPassword,
           
            
        ]);

        event(new UserRegistered($user));
        return $user;

    }
}


/*  public function register(array $input)
    {
        // dd($input);
        $user = User::where('email', $input[ 'email'])->exists();

        if(!empty($user)){
            throw new UserHasBeenTaken();
        }

        $userPassword = bcrypt($input['password'] ?? Str::random(10));
        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'birthday' => $input['birthday'],
            'phone_number' => $input['phone_number'],
            'police_rank_id' => $input['police_rank_id'],
            'level_id' => $input['level_id'],
            'direction_id' => $input['direction_id'],
            'department_id' => $input['department_id'],
            'section_id' => $input['section_id'],
            'gender_id' => $input['gender_id'],
            'status_id' => $input['status_id'],
            
            'password' => $userPassword,
            'confirmation_token' => Str::random(60), //ira gerar uma string pro token
        ]);
        return $user;

    } */