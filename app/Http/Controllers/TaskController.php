<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    protected $task;
    public function __construct()
    {
        $this->task = new Task();
    }


 
  
    public function index()
    {
        $response['tasks'] = $this->task->all();
        return view('admin.dashboard')->with($response);
    }

    public function show(string $id)
    {
        $response['task'] = $this->task->find($id);
        return view('admin.show')->with($response);
    }
    
    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->back();
    }

  
    public function edit(string $id)
    {
        $response['task'] = $this->task->find($id);
        return view('admin.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $task = $this->task->find($id);
        $task->update(array_merge($task->toArray(), $request->toArray()));
        return redirect()->route('admin.dashboard')->with('success', 'Task removed successfully.');
    }


    public function userupdate(Request $request, string $id)
    {
        $task = $this->task->find($id);
        $task->update(array_merge($task->toArray(), $request->toArray()));
        return redirect()->route('user.dashboard')->with('success', 'Task removed successfully.');
    }









    public function destroy(string $id)
    {
        $task = $this->task->find($id);
        $task->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Task removed successfully.');
    }

    public function assignTask(Request $request, string $id)
    {
        $task = $this->task->find($id);
        $task->update(array_merge($task->toArray(), $request->toArray()));
        return redirect()->route('admin.dashboard')->with('success', 'Task removed successfully.');
    }






    public function removeTask(string $id)
    {
        $task = $this->task->find($id);
        $task->user_id = null;
        $task->save();
        return redirect()->route('admin.dashboard')->with('success', 'Task removed successfully.');
    }

}
