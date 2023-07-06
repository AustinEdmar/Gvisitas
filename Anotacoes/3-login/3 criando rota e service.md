1- primeiro crair uma rota nova
Route::prefix('v1')->group(function(){

    Route::post('login', [AuthController::class, 'login']);
});
php artisan make:controller AuthController

2- vao criar servico pra alocar toda regra do negocio do login
### criei o directorio e class

no Postman clico em new/colletion ira criar a pasta da minha aplicacao,
 criei em envirment criei o 
 1- coloquei o hostname em variable, e vale: http://127.0.0.1:8000
2- variable: token - vazio por enquanto

agora crio as request e add
{{hostname}}/api/v1/login

<!-- <?php

namespace App\Services;

class AuthService 
{
    public function login()
    {
        dd('service');
    }
} -->

3- em authcontroller vou receber esse service
    private $authService;

 public function __construct(AuthService $authService)
    {
       $this->authService = $authService; 
    }
    ///este login vem da api
    public function login(){
        //este login vem do metodo ta class service
        $this->authService->login();
    }

<!-- resulte -->

<!-- AuthController

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)
    {
       $this->authService = $authService; 
    }


    public function login(){
        //este login vem do metodo ta class service
        $this->authService->login();
    }
} -->

<!-- Services/ AuthService
    <?php
namespace App\Services;

class AuthService 
{
    public function login()
    {
        dd('service');
    }
}
 -->


 
