<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //$tasks =DB::table('tasks')->get();
            //return view('contact', compact('tasks')) ;

$tasks = DB::table('tasks')->get();
$tasks=Task::all();
//dd($tasks);
return view('index',compact('tasks')) ;
}
public function show($id){    
    $task= DB::table('tasks')->find($id);

    return view('task',compact('task'));
}

