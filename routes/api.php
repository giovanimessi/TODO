<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController; 
use App\Http\Controllers\AuthController;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get("/ping",function(){
    return [
        "pong" => true,
      
    ];

});
Route::get('/unauthenticated',function(){
    return ['error' => 'Usuario nao logado'];
})->name('login');


Route::post('/users',[AuthController::class, 'criar']);
Route::post('/auth/login',[AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/auth/logout',[AuthController::class, 'logout']);

//Crud de lista

//create = metodos para criar tarefas
//Read = metdos pra ler umas ou todas as tarefas
//Update = metodospara atualizar uma tarefa
//Delete  = metodos para deletar uma tarefa


//POST ->Inserir tarefas no sistemas [TODO]
//GET ->ler todas as tarefas do sistema[TODOS]
//GET ->ler todas as tarefas do sistema[TODOS/2]
//PUT ->atualizar tarefa no  [TODOS/2]
//DELETE ->atualizar uma tarefa no sistema [TODOS/2]



Route::middleware('auth:sanctum')->post('/todo',[ApiController::class, 'creaLista']);//crear
Route::get('/todos',[ApiController::class, 'lerTodos']); //exibir
Route::get('/todo/{id}',[ApiController::class, 'exbirTodos']); //ler um so
Route::put('/todo/{id}',[ApiController::class, 'updateLista']); //atualizar
Route::delete('/todo/{id}',[ApiController::class, 'deleteLista']); //deltar
        