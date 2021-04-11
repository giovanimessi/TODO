<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;


class ApiController extends Controller
{
    //
  

    public function creaLista(Request $request){
       $array =['error' => ''];
       

       $rules = [
        'title' => 'required|min:3'
       ];

       
    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
        $array[ 'error'] = $validator->messages();
        return $array;

    }
  
     $title = $request->input('title');

     $todo = new Todo();
     $todo ->title = $title;
     $todo->save();


        return $array;
    }
////////////////////////

    public function lerTodos(){
        $array = ['errors',''];

        
        $array['list'] = Todo::all();


         return $array;

        
    }
    public function exbirTodos($id){

        $array = [ 'errors', ''];

        // $array['lista'] = Todo::find($id);

    $todos = Todo::simplePaginate(3);

    $array['lista'] = $todos->items();
    $array['current_page'] = $todos->currentePage();


        return $array;
        
    }
    /////////////
    public function updateLista($id,Request $request){
          $array = ['error', ''];

          $rules = [
            'title' => 'required|min:3',
             'done' => 'bolean'

           ];
    
           
        $validator = Validator::make($request->all(), $rules);
      
         $title = $request->input('title');
         $done = $request->input('done');
    
         $todos = Todo::find($id);

if($todos){

    if($title){
        $todos ->title = $title;
    }
    if($done !== null){
        $todos ->done = $done;
    }
    $todos->save();


}else{
    $array ['error'] = 'Tarefa '.$id. 'nao existe edicao';

}

       

          return $array;
        
    }
    ////////////
    public function deleteLista($id){

        $todos = Todo::find($id);
        $todos->delete();

        
    } 

    
}
