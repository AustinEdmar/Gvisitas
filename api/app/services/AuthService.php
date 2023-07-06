<?php

namespace App\Services;

use App\Events\ForgotPassword;
use App\Events\UserRegistered;
use App\Exceptions\LoginInvalidException;
use App\Exceptions\ResetPasswordTokenInvalidException;
use App\Exceptions\UserHasBeenTaken;
use App\Exceptions\VerifyEmailTokenInvalidException;
use App\Models\Status;
use App\Models\User;
use App\Models\PasswordReset;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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


      public function register(array $input)
    {
        
        $user = User::where('email', $input[ 'email'])->exists();

        if(!empty($user)){
            throw new UserHasBeenTaken();
        }
        
        $status = Status::get();
       /*  if($input['image']){

            
            $img = $input['image'];
            $folderPath = "images/users/"; //path location
            
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $uniqid = uniqid();
            $file = $folderPath . $uniqid . '.'.$image_type;
            $image = file_put_contents($file, $image_base64);

        } */

        $image_64 = $input['image'];
        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 

        $image = str_replace($replace, '', $image_64); 

        $image = str_replace(' ', '+', $image); 
      
        $imageName = Str::random(10).'.'.$extension;
      
/* 
        $path = public_path('/usuarios');
   
         if(!Storage::exists($path)){
           $paths =  Storage::makeDirectory($path, 0777, true, true);
         } */

       //  dd($paths);

       
            Storage::disk('public')->put( $imageName, base64_decode($image));

        $userPassword = bcrypt($input['password'] ?? Str::random(10));
        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'image' => $imageName,
            'birthday' => $input['birthday'],
            'phone_number' => $input['phone_number'],
            'police_rank_id' => $input['police_rank_id'],
           'level_id' => '4',
            'direction_id' => $input['direction_id'],
            'department_id' => $input['department_id'],
            'section_id' => $input['section_id'],
            'gender_id' => $input['gender_id'],
            'status_id' => '2',
            
            'password' => $userPassword,
            'confirmation_token' => Str::random(60), //ira gerar uma string pro token
        ]);
        // event(new UserRegistered($user));
        return $user;

    }

    public function verifyEmail(string $token)
    {
        $user = User::where('confirmation_token', $token)->first();

        if(empty($user)){
            throw new VerifyEmailTokenInvalidException();
        }

        $user->confirmation_token = null;
        $user->email_verified_at = now();
        $user->save();

        return $user;
    }

    public function forgotPassword(string $email)
    {
        $user = User::where('email', $email)->firstOrFail();

        $token = Str::random(60);

        PasswordReset::create([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now()
        ]);

        event(new ForgotPassword($user, $token));

        return '';
    }
    public function resetPassword(string $email, string $password, string $token)
    {
        $passReset = PasswordReset::where('email', $email)->where('token', $token)->first();

        if(empty($passReset)){
            throw new ResetPasswordTokenInvalidException();

        }
        $user = User::where('email', $email)->firstOrfail();

        $user->password = bcrypt($password);

        $user->save();

        PasswordReset::where('email', $email)->delete();

        return '';



    }
}


/*     public function register(string $firstName, 
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
            'direction_id' => $direction_id  ?? '',
            'department_id' => $department_id ?? '',
            'section_id' => $section_id ?? '',
            'gender_id' => $gender_id,
            'status_id' => $status_id,
            'password' => $userPassword,
           
            
        ]);

        event(new UserRegistered($user));
        return $user;

    } */


