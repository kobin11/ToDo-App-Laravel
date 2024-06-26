<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

use App\Models\User;

class AdminDashBoardController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function dashboard()
    {
        $tasks = $this->task->all();
        $employees = User::where('role', 'user')->get();
        return view('admin.dashboard', compact('tasks', 'employees'));
    }

}
