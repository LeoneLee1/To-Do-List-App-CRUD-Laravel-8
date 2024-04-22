<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        return view('create');
    }

    public function insert(Request $request){


        $data = new Task;
        $data->task = $request->task;
        $data->save();

        return redirect('/');

    }

    public function show($id){

        $data = Task::find($id);

        return view('edit',compact('data'));
    }

    public function update(Request $request, $id){

        $data = Task::find($id);
        $data->task = $request->task;
        $data->save();

        return redirect('/');

    }

    public function delete($id){

        $data = Task::find($id);
        $data->delete();

        return redirect('/');
    }



}
