<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
//Pass data from the database
Route::get('/tasks' ,function()
{
    $tasks = DB::table('tasks')->get();
      //dd($tasks);
    return view('tasks_db' , compact('tasks'));

   });
   Route::get('tasks/show/{id}' , function($id){
    $task = DB::table('tasks')->find($id);
     //dd($task);
       return view('show' , compact('task'));

   });
/*
Route::view('/pass', 'welcome',  ['key'=>'content']);
Route::view('/hello' , 'front.hello');

Route::get( 'user/{id}', function($id ) {
    return 'Userid:'.$id;
});

Route::get('/about', function () {
     $name= request('name');
    return view('about' , compact('name'));
});
Route::post('/store ', function () {
    $name= request('name');
   return view('about' , compact('name'));
});

Route::get( '/tasks' , function (){
    $tasks = [
            'first-task'  => 'Task1 ',
            'second-task' => 'Task2',
            'third-task'  => 'Task3'
    ];
 return view( 'tasks' , compact('tasks'));
});
Route::get('show/{id}',function($id){
    $tasks = [
        'first-task'  => 'Task1 ',
        'second-task' => 'Task2',
        'third-task'  => 'Task3'
];
    $task = $tasks[$id];
         return view('show',compact('task'));
});
*/
//  database in laravel
