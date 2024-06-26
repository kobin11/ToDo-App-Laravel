<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class UserDashBoardController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function dashboard()
    {
       
        $tasks = auth()->user()->tasks; // This will get only the tasks for the logged-in user
        return view('user.dashboard', compact('tasks'));


    }

}
