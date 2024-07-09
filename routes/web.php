<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

Route::get('/', function(){
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function (){
    return view('index', [
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{task}/edit', function(Task $task){
    return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::get('/tasks/{task}', function(Task $task){
    return view('show', ['task' => $task]);

})->name('tasks.show');


Route::post('/tasks', function(TaskRequest $request){
    $task = Task::create($request -> validated());
    
    return redirect() -> route('tasks.show', ['task' => $task -> id])->with('success', 'Task created successfully!');

})->name('tasks.store');

Route::put('/tasks/{task}', function(Task $task, TaskRequest $request){
    $task -> update($request->validated());

    return redirect() -> route('tasks.show', ['task' => $task -> id])->with('success', 'Task updated successfully!');

})->name('tasks.update');


/*
Route::get('/hello', function(){
    return "hello";
})->name('hello');

Route::get('/hallo', function(){
    return redirect() -> route('');
});



Route::get('/greet/{name}', function($name){
    return "Hello {$name}";
});*/

Route::fallback(function() {echo "still get somewhere!";});
